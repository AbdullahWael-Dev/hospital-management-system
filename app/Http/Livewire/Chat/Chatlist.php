<?php

namespace App\Http\Livewire\Chat;

use App\Models\Conversation;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Admin;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Chatlist extends Component
{
    public $conversations;
    public $auth_email;
    public $selected_conversation_id;

    protected $listeners = [
        'chatUserSelected',
        'refresh' => '$refresh'
    ];

    public function mount()
    {
        $this->auth_email = Auth::user()->email;
        $this->loadConversations();
    }

    // جيب المستخدم الثاني في المحادثة
    public function getOtherUser(Conversation $conversation): ?object
    {
        // الإيميل الخاص بالطرف الثاني
        $otherEmail = $conversation->sender_email === $this->auth_email
            ? $conversation->receiver_email
            : $conversation->sender_email;

        // دور عليه في كل الجداول
        return Doctor::where('email', $otherEmail)->first()
            ?? Patient::where('email', $otherEmail)->first()
            ?? Admin::where('email', $otherEmail)->first();
    }

    public function chatUserSelected(Conversation $conversation, $receiver_id)
    {
        $this->selected_conversation_id = $conversation->id;

        // حدد نوع المستخدم الثاني صح
        $otherEmail = $conversation->sender_email === $this->auth_email
            ? $conversation->receiver_email
            : $conversation->sender_email;

        $receiverUser = Doctor::where('email', $otherEmail)->first()
            ?? Patient::where('email', $otherEmail)->first()
            ?? Admin::where('email', $otherEmail)->first();

        if (!$receiverUser) return;

        // بعت الـ IDs بس مش الـ Models كاملة
        if (Auth::guard('patient')->check()) {
            $this->emitTo('chat.chatbox', 'load_conversationDoctor',
                $conversation->id,
                $receiverUser->id,
                get_class($receiverUser)
            );
            $this->emitTo('chat.send-message', 'updateMessage',
                $conversation->id,
                $receiverUser->id
            );
        } else {
            $this->emitTo('chat.chatbox', 'load_conversationPatient',
                $conversation->id,
                $receiverUser->id,
                get_class($receiverUser)
            );
            $this->emitTo('chat.send-message', 'updateMessage2',
                $conversation->id,
                $receiverUser->id
            );
        }
    }

    public function loadConversations()
    {
        $this->conversations = Conversation::where('sender_email', $this->auth_email)
            ->orWhere('receiver_email', $this->auth_email)
            ->with(['messages' => fn($q) => $q->latest()->limit(1)])
            ->orderByDesc('last_time_message')
            ->get()
            ->map(function ($conversation) {
                $otherUser = $this->getOtherUser($conversation);
                $conversation->other_user_name = $otherUser?->name ?? 'مجهول';
                $conversation->other_user_id   = $otherUser?->id;
                return $conversation;
            });
    }

    public function render()
    {
        $this->loadConversations(); // عشان يتحدث عند كل refresh
        return view('livewire.chat.chatlist');
    }
}
