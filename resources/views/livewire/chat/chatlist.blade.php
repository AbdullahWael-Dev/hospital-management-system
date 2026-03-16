<div>
    <div class="main-chat-list" id="ChatList">
        @foreach ($conversations as $conversation)
            @php $lastMessage = $conversation->messages->first() @endphp

            <div class="media {{ $selected_conversation_id == $conversation->id ? 'active' : 'new' }}"
                 wire:click="chatUserSelected({{ $conversation->id }}, '{{ $conversation->other_user_id }}')">

                <div class="media-body">
                    <div class="media-contact-name">
                        <span>{{ $conversation->other_user_name }}</span>
                        <span class="text-muted small">
                            {{ $lastMessage?->created_at->shortAbsoluteDiffForHumans() ?? '' }}
                        </span>
                    </div>
                    <p class="mb-0 text-truncate">
                        {{ $lastMessage?->body ?? 'لا توجد رسائل بعد' }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</div>
