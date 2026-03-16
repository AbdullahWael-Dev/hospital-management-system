<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // =============================================
        // 1. المستخدمون
        // =============================================
        DB::table('users')->insert([
            ['name' => 'أحمد محمد',    'email' => 'user@gmail.com',         'password' => Hash::make('password'), 'email_verified_at' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'منى خالد',     'email' => 'jane@gmail.com',          'password' => Hash::make('password'), 'email_verified_at' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'مارك حسن',     'email' => 'mark@gmail.com',          'password' => Hash::make('password'), 'email_verified_at' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ليلى عمر',     'email' => 'layla.user@gmail.com',    'password' => Hash::make('password'), 'email_verified_at' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'نور سالم',     'email' => 'nour@gmail.com',          'password' => Hash::make('password'), 'email_verified_at' => now(), 'created_at' => now(), 'updated_at' => now()],
        ]);

        // =============================================
        // 2. المديرون
        // =============================================
        DB::table('admins')->insert([
            ['name' => 'المدير العام',     'email' => 'admin@gmail.com',   'password' => Hash::make('password'), 'email_verified_at' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'مدير ثانٍ',        'email' => 'admin2@gmail.com',  'password' => Hash::make('password'), 'email_verified_at' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'مدير ثالث',        'email' => 'admin3@gmail.com',  'password' => Hash::make('password'), 'email_verified_at' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'مدير رابع',        'email' => 'admin4@gmail.com',  'password' => Hash::make('password'), 'email_verified_at' => now(), 'created_at' => now(), 'updated_at' => now()],
        ]);

        // =============================================
        // 3. الأقسام
        // =============================================
        DB::table('sections')->insert([
            ['created_at' => now(), 'updated_at' => now()], // id=1 قسم القلب
            ['created_at' => now(), 'updated_at' => now()], // id=2 قسم الأعصاب
            ['created_at' => now(), 'updated_at' => now()], // id=3 قسم العظام
            ['created_at' => now(), 'updated_at' => now()], // id=4 قسم الأشعة
            ['created_at' => now(), 'updated_at' => now()], // id=5 قسم المختبر
            ['created_at' => now(), 'updated_at' => now()], // id=6 قسم الجلدية
            ['created_at' => now(), 'updated_at' => now()], // id=7 قسم الأطفال
            ['created_at' => now(), 'updated_at' => now()], // id=8 قسم الباطنة
        ]);

        // =============================================
        // 4. ترجمات الأقسام
        // =============================================
        DB::table('section_translations')->insert([
            ['section_id' => 1, 'locale' => 'ar', 'name' => 'قسم القلب',         'description' => 'قسم متخصص في أمراض القلب والأوعية الدموية وعلاج الضغط والذبحة الصدرية.'],
            ['section_id' => 1, 'locale' => 'en', 'name' => 'Cardiology',         'description' => 'Department specializing in heart diseases and cardiovascular conditions.'],
            ['section_id' => 2, 'locale' => 'ar', 'name' => 'قسم الأعصاب',       'description' => 'قسم متخصص في تشخيص وعلاج اضطرابات الجهاز العصبي المركزي والمحيطي.'],
            ['section_id' => 2, 'locale' => 'en', 'name' => 'Neurology',          'description' => 'Department specializing in nervous system disorders.'],
            ['section_id' => 3, 'locale' => 'ar', 'name' => 'قسم العظام',        'description' => 'قسم متخصص في أمراض العظام والمفاصل وإصابات الملاعب والعمود الفقري.'],
            ['section_id' => 3, 'locale' => 'en', 'name' => 'Orthopedics',        'description' => 'Department specializing in bone and joint conditions.'],
            ['section_id' => 4, 'locale' => 'ar', 'name' => 'قسم الأشعة',        'description' => 'قسم التصوير الطبي يشمل الأشعة السينية والرنين المغناطيسي والسونار.'],
            ['section_id' => 4, 'locale' => 'en', 'name' => 'Radiology',          'description' => 'Department for medical imaging including X-rays, MRI and ultrasound.'],
            ['section_id' => 5, 'locale' => 'ar', 'name' => 'قسم المختبر',       'description' => 'قسم الفحوصات والتحاليل الطبية الشاملة للدم والبول وغيرها.'],
            ['section_id' => 5, 'locale' => 'en', 'name' => 'Laboratory',         'description' => 'Department for medical tests and analysis.'],
            ['section_id' => 6, 'locale' => 'ar', 'name' => 'قسم الجلدية',       'description' => 'قسم متخصص في أمراض الجلد والشعر والأظافر وعلاج الحساسية الجلدية.'],
            ['section_id' => 6, 'locale' => 'en', 'name' => 'Dermatology',        'description' => 'Department specializing in skin, hair, and nail conditions.'],
            ['section_id' => 7, 'locale' => 'ar', 'name' => 'قسم الأطفال',       'description' => 'قسم متخصص في الرعاية الطبية الشاملة للأطفال من الولادة حتى سن المراهقة.'],
            ['section_id' => 7, 'locale' => 'en', 'name' => 'Pediatrics',         'description' => 'Department specializing in the medical care of children.'],
            ['section_id' => 8, 'locale' => 'ar', 'name' => 'قسم الباطنة',       'description' => 'قسم تشخيص وعلاج أمراض الجهاز الهضمي والغدد الصماء والجهاز التنفسي.'],
            ['section_id' => 8, 'locale' => 'en', 'name' => 'Internal Medicine',  'description' => 'Department for diagnosis and treatment of adult internal diseases.'],
        ]);

        // =============================================
        // 5. الأطباء
        // =============================================
        DB::table('doctors')->insert([
            // id=1
            ['email' => 'cummings.forest@example.org', 'password' => Hash::make('password'), 'email_verified_at' => now(), 'section_id' => 1, 'phone' => '0501234567', 'number_of_statements' => 150, 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            // id=2
            ['email' => 'dr.sarah@example.org',        'password' => Hash::make('password'), 'email_verified_at' => now(), 'section_id' => 2, 'phone' => '0502345678', 'number_of_statements' => 90,  'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            // id=3
            ['email' => 'dr.ahmed@example.org',        'password' => Hash::make('password'), 'email_verified_at' => now(), 'section_id' => 3, 'phone' => '0503456789', 'number_of_statements' => 75,  'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            // id=4
            ['email' => 'dr.emily@example.org',        'password' => Hash::make('password'), 'email_verified_at' => now(), 'section_id' => 4, 'phone' => '0504567890', 'number_of_statements' => 60,  'status' => 0, 'created_at' => now(), 'updated_at' => now()],
            // id=5
            ['email' => 'dr.khalid@example.org',       'password' => Hash::make('password'), 'email_verified_at' => now(), 'section_id' => 5, 'phone' => '0505678901', 'number_of_statements' => 110, 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            // id=6
            ['email' => 'dr.rana@example.org',         'password' => Hash::make('password'), 'email_verified_at' => now(), 'section_id' => 6, 'phone' => '0506789012', 'number_of_statements' => 85,  'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            // id=7
            ['email' => 'dr.tariq@example.org',        'password' => Hash::make('password'), 'email_verified_at' => now(), 'section_id' => 7, 'phone' => '0507890123', 'number_of_statements' => 130, 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            // id=8
            ['email' => 'dr.hana@example.org',         'password' => Hash::make('password'), 'email_verified_at' => now(), 'section_id' => 8, 'phone' => '0508901234', 'number_of_statements' => 45,  'status' => 0, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // =============================================
        // 6. ترجمات الأطباء
        // =============================================
        DB::table('doctor_translations')->insert([
            ['doctor_id' => 1, 'locale' => 'ar', 'name' => 'د. فورست كامينجز'],
            ['doctor_id' => 1, 'locale' => 'en', 'name' => 'Dr. Forest Cummings'],
            ['doctor_id' => 2, 'locale' => 'ar', 'name' => 'د. سارة ميتشل'],
            ['doctor_id' => 2, 'locale' => 'en', 'name' => 'Dr. Sarah Mitchell'],
            ['doctor_id' => 3, 'locale' => 'ar', 'name' => 'د. أحمد حسن'],
            ['doctor_id' => 3, 'locale' => 'en', 'name' => 'Dr. Ahmed Hassan'],
            ['doctor_id' => 4, 'locale' => 'ar', 'name' => 'د. إيميلي كلارك'],
            ['doctor_id' => 4, 'locale' => 'en', 'name' => 'Dr. Emily Clark'],
            ['doctor_id' => 5, 'locale' => 'ar', 'name' => 'د. خالد الراشد'],
            ['doctor_id' => 5, 'locale' => 'en', 'name' => 'Dr. Khalid Al-Rashid'],
            ['doctor_id' => 6, 'locale' => 'ar', 'name' => 'د. رنا فاروق'],
            ['doctor_id' => 6, 'locale' => 'en', 'name' => 'Dr. Rana Farouk'],
            ['doctor_id' => 7, 'locale' => 'ar', 'name' => 'د. طارق منصور'],
            ['doctor_id' => 7, 'locale' => 'en', 'name' => 'Dr. Tariq Mansour'],
            ['doctor_id' => 8, 'locale' => 'ar', 'name' => 'د. هناء زكي'],
            ['doctor_id' => 8, 'locale' => 'en', 'name' => 'Dr. Hana Zaki'],
        ]);

        // =============================================
        // 7. الصور (Polymorphic)
        // =============================================
        DB::table('images')->insert([
            ['filename' => 'doctor_1.jpg',  'imageable_id' => 1, 'imageable_type' => 'App\Models\Doctor',  'created_at' => now(), 'updated_at' => now()],
            ['filename' => 'doctor_2.jpg',  'imageable_id' => 2, 'imageable_type' => 'App\Models\Doctor',  'created_at' => now(), 'updated_at' => now()],
            ['filename' => 'doctor_3.jpg',  'imageable_id' => 3, 'imageable_type' => 'App\Models\Doctor',  'created_at' => now(), 'updated_at' => now()],
            ['filename' => 'doctor_5.jpg',  'imageable_id' => 5, 'imageable_type' => 'App\Models\Doctor',  'created_at' => now(), 'updated_at' => now()],
            ['filename' => 'doctor_6.jpg',  'imageable_id' => 6, 'imageable_type' => 'App\Models\Doctor',  'created_at' => now(), 'updated_at' => now()],
            ['filename' => 'doctor_7.jpg',  'imageable_id' => 7, 'imageable_type' => 'App\Models\Doctor',  'created_at' => now(), 'updated_at' => now()],
            ['filename' => 'section_1.jpg', 'imageable_id' => 1, 'imageable_type' => 'App\Models\Section', 'created_at' => now(), 'updated_at' => now()],
            ['filename' => 'section_2.jpg', 'imageable_id' => 2, 'imageable_type' => 'App\Models\Section', 'created_at' => now(), 'updated_at' => now()],
            ['filename' => 'section_6.jpg', 'imageable_id' => 6, 'imageable_type' => 'App\Models\Section', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // =============================================
        // 8. المواعيد
        // =============================================
        DB::table('appointments')->insert([
            ['doctor_id' => 1, 'section_id' => 1, 'name' => 'أحمد علي',       'email' => 'patient@gmail.com',      'phone' => '0551234567', 'type' => 'مؤكد',     'appointment' => Carbon::now()->addDays(2),  'notes' => 'زيارة أولى - ألم في الصدر',              'appointment_patient' => Carbon::now()->addDays(2)->toDateString(),  'created_at' => now(), 'updated_at' => now()],
            ['doctor_id' => 1, 'section_id' => 1, 'name' => 'منى خالد',       'email' => 'mona@example.com',       'phone' => '0552345678', 'type' => 'غير مؤكد', 'appointment' => Carbon::now()->addDays(5),  'notes' => 'متابعة دورية بعد العلاج',                'appointment_patient' => Carbon::now()->addDays(5)->toDateString(),  'created_at' => now(), 'updated_at' => now()],
            ['doctor_id' => 2, 'section_id' => 2, 'name' => 'عمر سعد',        'email' => 'omar@example.com',       'phone' => '0553456789', 'type' => 'منتهي',    'appointment' => Carbon::now()->subDays(3),  'notes' => 'صداع مستمر ودوخة',                       'appointment_patient' => Carbon::now()->subDays(3)->toDateString(),  'created_at' => now(), 'updated_at' => now()],
            ['doctor_id' => 3, 'section_id' => 3, 'name' => 'ليلى ناصر',      'email' => 'layla@example.com',      'phone' => '0554567890', 'type' => 'مؤكد',     'appointment' => Carbon::now()->addDays(1),  'notes' => 'استشارة لألم في الركبة',                 'appointment_patient' => Carbon::now()->addDays(1)->toDateString(),  'created_at' => now(), 'updated_at' => now()],
            ['doctor_id' => 1, 'section_id' => 1, 'name' => 'يوسف إبراهيم',   'email' => 'youssef@example.com',    'phone' => '0555678901', 'type' => 'غير مؤكد', 'appointment' => Carbon::now()->addDays(7),  'notes' => null,                                     'appointment_patient' => Carbon::now()->addDays(7)->toDateString(),  'created_at' => now(), 'updated_at' => now()],
            ['doctor_id' => 5, 'section_id' => 5, 'name' => 'رانيا سامي',     'email' => 'rania@example.com',      'phone' => '0556789012', 'type' => 'مؤكد',     'appointment' => Carbon::now()->addDays(3),  'notes' => 'تحاليل دم روتينية',                      'appointment_patient' => Carbon::now()->addDays(3)->toDateString(),  'created_at' => now(), 'updated_at' => now()],
            ['doctor_id' => 6, 'section_id' => 6, 'name' => 'حسن فتحي',       'email' => 'hassan.f@example.com',   'phone' => '0557890123', 'type' => 'مؤكد',     'appointment' => Carbon::now()->addDays(4),  'notes' => 'تقييم طفح جلدي',                         'appointment_patient' => Carbon::now()->addDays(4)->toDateString(),  'created_at' => now(), 'updated_at' => now()],
            ['doctor_id' => 7, 'section_id' => 7, 'name' => 'دينا مصطفى',     'email' => 'dina@example.com',       'phone' => '0558901234', 'type' => 'غير مؤكد', 'appointment' => Carbon::now()->addDays(6),  'notes' => 'متابعة تطعيمات الطفل',                   'appointment_patient' => Carbon::now()->addDays(6)->toDateString(),  'created_at' => now(), 'updated_at' => now()],
            ['doctor_id' => 2, 'section_id' => 2, 'name' => 'سميرة بدر',      'email' => 'samira@example.com',     'phone' => '0559012345', 'type' => 'منتهي',    'appointment' => Carbon::now()->subDays(6),  'notes' => 'مشاكل في الذاكرة والتركيز',              'appointment_patient' => Carbon::now()->subDays(6)->toDateString(),  'created_at' => now(), 'updated_at' => now()],
            ['doctor_id' => 8, 'section_id' => 8, 'name' => 'وليد نجيب',      'email' => 'walid@example.com',      'phone' => '0560123456', 'type' => 'مؤكد',     'appointment' => Carbon::now()->addDays(2),  'notes' => 'متابعة مرض السكري',                      'appointment_patient' => Carbon::now()->addDays(2)->toDateString(),  'created_at' => now(), 'updated_at' => now()],
        ]);

        // =============================================
        // 9. ترجمات المواعيد
        // =============================================
        DB::table('appointment_translations')->insert([
            ['appointment_id' => 1, 'locale' => 'ar', 'name' => 'أحمد علي'],
            ['appointment_id' => 1, 'locale' => 'en', 'name' => 'Ahmed Ali'],
            ['appointment_id' => 2, 'locale' => 'ar', 'name' => 'منى خالد'],
            ['appointment_id' => 2, 'locale' => 'en', 'name' => 'Mona Khaled'],
            ['appointment_id' => 3, 'locale' => 'ar', 'name' => 'عمر سعد'],
            ['appointment_id' => 3, 'locale' => 'en', 'name' => 'Omar Saad'],
            ['appointment_id' => 4, 'locale' => 'ar', 'name' => 'ليلى ناصر'],
            ['appointment_id' => 4, 'locale' => 'en', 'name' => 'Layla Nasser'],
            ['appointment_id' => 6, 'locale' => 'ar', 'name' => 'رانيا سامي'],
            ['appointment_id' => 6, 'locale' => 'en', 'name' => 'Rania Sami'],
            ['appointment_id' => 7, 'locale' => 'ar', 'name' => 'حسن فتحي'],
            ['appointment_id' => 7, 'locale' => 'en', 'name' => 'Hassan Fathy'],
        ]);

        // =============================================
        // 10. جدول الأطباء والمواعيد (pivot)
        // =============================================
        DB::table('appointment_doctor')->insert([
            ['doctor_id' => 1, 'appointment_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['doctor_id' => 1, 'appointment_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['doctor_id' => 2, 'appointment_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['doctor_id' => 3, 'appointment_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['doctor_id' => 1, 'appointment_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['doctor_id' => 5, 'appointment_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['doctor_id' => 6, 'appointment_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['doctor_id' => 7, 'appointment_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['doctor_id' => 2, 'appointment_id' => 9, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // =============================================
        // 11. الخدمات
        // =============================================
        DB::table('services')->insert([
            ['price' => 200.00, 'description' => 'كشف طبي عام مع الطبيب المختص',                    'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['price' => 500.00, 'description' => 'تخطيط القلب الكهربائي ECG',                        'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['price' => 350.00, 'description' => 'قياس ومراقبة ضغط الدم',                           'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['price' => 750.00, 'description' => 'أشعة سينية شاملة للجسم',                          'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['price' => 300.00, 'description' => 'تحليل دم شامل CBC',                               'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['price' => 450.00, 'description' => 'تحليل بول كامل',                                  'status' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['price' => 600.00, 'description' => 'سونار بطن شامل',                                  'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['price' => 850.00, 'description' => 'رنين مغناطيسي للمخ بدون حقن',                     'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['price' => 250.00, 'description' => 'وظائف الغدة الدرقية TSH و T3 و T4',               'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['price' => 180.00, 'description' => 'اختبار الحساسية الجلدية بالرقع',                   'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['price' => 320.00, 'description' => 'فحص نمو وتطور الأطفال',                           'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['price' => 400.00, 'description' => 'تحليل السكر التراكمي HbA1c',                      'status' => 0, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // =============================================
        // 12. ترجمات الخدمات
        // =============================================
        DB::table('service_translations')->insert([
            ['Service_id' => 1,  'locale' => 'ar', 'name' => 'كشف عام'],
            ['Service_id' => 1,  'locale' => 'en', 'name' => 'General Consultation'],
            ['Service_id' => 2,  'locale' => 'ar', 'name' => 'تخطيط القلب'],
            ['Service_id' => 2,  'locale' => 'en', 'name' => 'ECG'],
            ['Service_id' => 3,  'locale' => 'ar', 'name' => 'مراقبة ضغط الدم'],
            ['Service_id' => 3,  'locale' => 'en', 'name' => 'Blood Pressure Monitoring'],
            ['Service_id' => 4,  'locale' => 'ar', 'name' => 'أشعة شاملة'],
            ['Service_id' => 4,  'locale' => 'en', 'name' => 'Full Body X-Ray'],
            ['Service_id' => 5,  'locale' => 'ar', 'name' => 'تحليل دم شامل'],
            ['Service_id' => 5,  'locale' => 'en', 'name' => 'Blood Analysis CBC'],
            ['Service_id' => 6,  'locale' => 'ar', 'name' => 'تحليل بول'],
            ['Service_id' => 6,  'locale' => 'en', 'name' => 'Urine Analysis'],
            ['Service_id' => 7,  'locale' => 'ar', 'name' => 'سونار البطن'],
            ['Service_id' => 7,  'locale' => 'en', 'name' => 'Abdominal Ultrasound'],
            ['Service_id' => 8,  'locale' => 'ar', 'name' => 'رنين مغناطيسي للمخ'],
            ['Service_id' => 8,  'locale' => 'en', 'name' => 'Brain MRI'],
            ['Service_id' => 9,  'locale' => 'ar', 'name' => 'وظائف الغدة الدرقية'],
            ['Service_id' => 9,  'locale' => 'en', 'name' => 'Thyroid Function Tests'],
            ['Service_id' => 10, 'locale' => 'ar', 'name' => 'اختبار حساسية الجلد'],
            ['Service_id' => 10, 'locale' => 'en', 'name' => 'Skin Allergy Test'],
            ['Service_id' => 11, 'locale' => 'ar', 'name' => 'فحص نمو الأطفال'],
            ['Service_id' => 11, 'locale' => 'en', 'name' => 'Pediatric Development Screening'],
            ['Service_id' => 12, 'locale' => 'ar', 'name' => 'تحليل السكر التراكمي'],
            ['Service_id' => 12, 'locale' => 'en', 'name' => 'HbA1c Diabetes Test'],
        ]);

        // =============================================
        // 13. الباقات
        // =============================================
        DB::table('groups')->insert([
            ['Total_before_discount' => 1050.00, 'discount_value' => 105.00, 'Total_after_discount' => 945.00,  'tax_rate' => '15', 'Total_with_tax' => 1086.75, 'created_at' => now(), 'updated_at' => now()],
            ['Total_before_discount' => 700.00,  'discount_value' => 0.00,   'Total_after_discount' => 700.00,  'tax_rate' => '15', 'Total_with_tax' => 805.00,  'created_at' => now(), 'updated_at' => now()],
            ['Total_before_discount' => 550.00,  'discount_value' => 50.00,  'Total_after_discount' => 500.00,  'tax_rate' => '15', 'Total_with_tax' => 575.00,  'created_at' => now(), 'updated_at' => now()],
            ['Total_before_discount' => 1450.00, 'discount_value' => 150.00, 'Total_after_discount' => 1300.00, 'tax_rate' => '15', 'Total_with_tax' => 1495.00, 'created_at' => now(), 'updated_at' => now()],
            ['Total_before_discount' => 830.00,  'discount_value' => 80.00,  'Total_after_discount' => 750.00,  'tax_rate' => '15', 'Total_with_tax' => 862.50,  'created_at' => now(), 'updated_at' => now()],
            ['Total_before_discount' => 500.00,  'discount_value' => 0.00,   'Total_after_discount' => 500.00,  'tax_rate' => '15', 'Total_with_tax' => 575.00,  'created_at' => now(), 'updated_at' => now()],
        ]);

        // =============================================
        // 14. ترجمات الباقات
        // =============================================
        DB::table('group_translations')->insert([
            ['Group_id' => 1, 'locale' => 'ar', 'name' => 'باقة فحص القلب',          'notes' => 'تشمل كشف عام وتخطيط قلب ومراقبة ضغط الدم'],
            ['Group_id' => 1, 'locale' => 'en', 'name' => 'Heart Checkup Package',   'notes' => 'Includes consultation, ECG, and blood pressure monitoring'],
            ['Group_id' => 2, 'locale' => 'ar', 'name' => 'باقة الأشعة',             'notes' => 'أشعة شاملة وكشف طبي'],
            ['Group_id' => 2, 'locale' => 'en', 'name' => 'Radiology Package',       'notes' => 'Full body X-Ray and consultation'],
            ['Group_id' => 3, 'locale' => 'ar', 'name' => 'باقة التحاليل',           'notes' => 'تحليل دم شامل وتحليل بول'],
            ['Group_id' => 3, 'locale' => 'en', 'name' => 'Lab Analysis Package',    'notes' => 'Blood and urine analysis'],
            ['Group_id' => 4, 'locale' => 'ar', 'name' => 'باقة الأعصاب المتقدمة',  'notes' => 'رنين مغناطيسي للمخ وفحص الغدة الدرقية وكشف طبي'],
            ['Group_id' => 4, 'locale' => 'en', 'name' => 'Advanced Neurology Pack', 'notes' => 'Brain MRI, thyroid tests, and consultation'],
            ['Group_id' => 5, 'locale' => 'ar', 'name' => 'باقة مراقبة السكري',      'notes' => 'سكر تراكمي وتحليل دم شامل واستشارة باطنة'],
            ['Group_id' => 5, 'locale' => 'en', 'name' => 'Diabetes Monitoring Pack','notes' => 'HbA1c, CBC, and internal medicine consultation'],
            ['Group_id' => 6, 'locale' => 'ar', 'name' => 'باقة صحة الطفل',          'notes' => 'فحص نمو وتطور الطفل واستشارة طب الأطفال'],
            ['Group_id' => 6, 'locale' => 'en', 'name' => 'Pediatric Wellness Pack', 'notes' => 'Development screening and pediatric consultation'],
        ]);

        // =============================================
        // 15. جدول الخدمات والباقات (pivot)
        // =============================================
        DB::table('Service_Group')->insert([
            ['Group_id' => 1, 'Service_id' => 1,  'quantity' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['Group_id' => 1, 'Service_id' => 2,  'quantity' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['Group_id' => 1, 'Service_id' => 3,  'quantity' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['Group_id' => 2, 'Service_id' => 1,  'quantity' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['Group_id' => 2, 'Service_id' => 4,  'quantity' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['Group_id' => 3, 'Service_id' => 5,  'quantity' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['Group_id' => 3, 'Service_id' => 6,  'quantity' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['Group_id' => 4, 'Service_id' => 1,  'quantity' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['Group_id' => 4, 'Service_id' => 8,  'quantity' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['Group_id' => 4, 'Service_id' => 9,  'quantity' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['Group_id' => 5, 'Service_id' => 1,  'quantity' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['Group_id' => 5, 'Service_id' => 5,  'quantity' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['Group_id' => 5, 'Service_id' => 12, 'quantity' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['Group_id' => 6, 'Service_id' => 1,  'quantity' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['Group_id' => 6, 'Service_id' => 11, 'quantity' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // =============================================
        // 16. شركات التأمين
        // =============================================
        DB::table('insurances')->insert([
            ['insurance_code' => 'INS-001', 'discount_percentage' => '20', 'Company_rate' => '80', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['insurance_code' => 'INS-002', 'discount_percentage' => '15', 'Company_rate' => '85', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['insurance_code' => 'INS-003', 'discount_percentage' => '30', 'Company_rate' => '70', 'status' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['insurance_code' => 'INS-004', 'discount_percentage' => '10', 'Company_rate' => '90', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['insurance_code' => 'INS-005', 'discount_percentage' => '25', 'Company_rate' => '75', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['insurance_code' => 'INS-006', 'discount_percentage' => '35', 'Company_rate' => '65', 'status' => 0, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // =============================================
        // 17. ترجمات شركات التأمين
        // =============================================
        DB::table('insurance_translations')->insert([
            ['insurance_id' => 1, 'locale' => 'ar', 'name' => 'تأمين ميدلايف',      'notes' => 'يغطي جميع الإجراءات الطبية الرئيسية'],
            ['insurance_id' => 1, 'locale' => 'en', 'name' => 'MedLife Insurance',   'notes' => 'Covers all major medical procedures'],
            ['insurance_id' => 2, 'locale' => 'ar', 'name' => 'تأمين هيلث جارد',    'notes' => 'خطة التغطية الأساسية للأفراد'],
            ['insurance_id' => 2, 'locale' => 'en', 'name' => 'HealthGuard',         'notes' => 'Basic individual coverage plan'],
            ['insurance_id' => 3, 'locale' => 'ar', 'name' => 'تأمين بريميم كير',   'notes' => 'خطة مميزة - غير نشطة حالياً'],
            ['insurance_id' => 3, 'locale' => 'en', 'name' => 'PremiumCare',         'notes' => 'Premium plan - currently inactive'],
            ['insurance_id' => 4, 'locale' => 'ar', 'name' => 'تأمين سيف نت',       'notes' => 'خطة تأمينية اقتصادية للأفراد'],
            ['insurance_id' => 4, 'locale' => 'en', 'name' => 'SafeNet Insurance',   'notes' => 'Affordable individual insurance plan'],
            ['insurance_id' => 5, 'locale' => 'ar', 'name' => 'تأمين فاميلي كير',   'notes' => 'تغطية شاملة للعائلة بأسعار مناسبة'],
            ['insurance_id' => 5, 'locale' => 'en', 'name' => 'FamilyCare',          'notes' => 'Comprehensive family coverage'],
            ['insurance_id' => 6, 'locale' => 'ar', 'name' => 'تأمين سينيور بلس',   'notes' => 'خطة كبار السن - غير نشطة حالياً'],
            ['insurance_id' => 6, 'locale' => 'en', 'name' => 'SeniorPlus',          'notes' => 'Senior citizens plan - currently inactive'],
        ]);

        // =============================================
        // 18. سيارات الإسعاف
        // =============================================
        DB::table('ambulances')->insert([
            ['car_number' => 'ABC-1234', 'car_model' => 'تويوتا هاياس',       'car_year_made' => '2020', 'driver_license_number' => 'DL-456789', 'driver_phone' => '0561234567', 'is_available' => 1, 'car_type' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['car_number' => 'XYZ-5678', 'car_model' => 'فورد ترانزيت',       'car_year_made' => '2019', 'driver_license_number' => 'DL-789012', 'driver_phone' => '0562345678', 'is_available' => 0, 'car_type' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['car_number' => 'MNO-9012', 'car_model' => 'مرسيدس سبرينتر',    'car_year_made' => '2022', 'driver_license_number' => 'DL-012345', 'driver_phone' => '0563456789', 'is_available' => 1, 'car_type' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['car_number' => 'KLM-3456', 'car_model' => 'نيسان NV350',        'car_year_made' => '2021', 'driver_license_number' => 'DL-345678', 'driver_phone' => '0564567890', 'is_available' => 1, 'car_type' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['car_number' => 'PQR-7890', 'car_model' => 'رينو ماستر',         'car_year_made' => '2018', 'driver_license_number' => 'DL-678901', 'driver_phone' => '0565678901', 'is_available' => 0, 'car_type' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['car_number' => 'STU-2345', 'car_model' => 'هيونداي H350',       'car_year_made' => '2023', 'driver_license_number' => 'DL-901234', 'driver_phone' => '0566789012', 'is_available' => 1, 'car_type' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // =============================================
        // 19. ترجمات سيارات الإسعاف
        // =============================================
        DB::table('ambulance_translations')->insert([
            ['ambulance_id' => 1, 'locale' => 'ar', 'driver_name' => 'خالد محمد',    'notes' => 'سائق متمرس - متاح على مدار الساعة'],
            ['ambulance_id' => 1, 'locale' => 'en', 'driver_name' => 'Khaled Mohammed','notes' => 'Experienced driver - available 24/7'],
            ['ambulance_id' => 2, 'locale' => 'ar', 'driver_name' => 'حسن علي',      'notes' => 'في إجازة حالياً'],
            ['ambulance_id' => 2, 'locale' => 'en', 'driver_name' => 'Hassan Ali',    'notes' => 'Currently on leave'],
            ['ambulance_id' => 3, 'locale' => 'ar', 'driver_name' => 'سمير يوسف',    'notes' => 'متخصص في الوردية الليلية'],
            ['ambulance_id' => 3, 'locale' => 'en', 'driver_name' => 'Samir Youssef', 'notes' => 'Night shift specialist'],
            ['ambulance_id' => 4, 'locale' => 'ar', 'driver_name' => 'محمود صلاح',   'notes' => 'سائق مدرب على حالات الطوارئ والإسعافات الأولية'],
            ['ambulance_id' => 4, 'locale' => 'en', 'driver_name' => 'Mahmoud Salah', 'notes' => 'Emergency trauma trained driver'],
            ['ambulance_id' => 5, 'locale' => 'ar', 'driver_name' => 'طارق فؤاد',    'notes' => 'السيارة في صيانة دورية مجدولة'],
            ['ambulance_id' => 5, 'locale' => 'en', 'driver_name' => 'Tarek Fouad',   'notes' => 'Vehicle under scheduled maintenance'],
            ['ambulance_id' => 6, 'locale' => 'ar', 'driver_name' => 'نبيل عثمان',   'notes' => 'موظف جديد - اجتاز جميع الاختبارات والشهادات'],
            ['ambulance_id' => 6, 'locale' => 'en', 'driver_name' => 'Nabil Osman',   'notes' => 'New hire - passed all certifications'],
        ]);

        // =============================================
        // 20. المرضى
        // =============================================
        DB::table('patients')->insert([
            // id=1
            ['email' => 'patient@gmail.com',          'password' => Hash::make('password'), 'Date_Birth' => '1990-05-15', 'Phone' => '0551234567', 'Gender' => 'ذكر',   'Blood_Group' => 'A+',  'created_at' => now(), 'updated_at' => now()],
            // id=2
            ['email' => 'sara.patient@example.com',   'password' => Hash::make('password'), 'Date_Birth' => '1985-09-20', 'Phone' => '0552345678', 'Gender' => 'أنثى',  'Blood_Group' => 'B+',  'created_at' => now(), 'updated_at' => now()],
            // id=3
            ['email' => 'omar.patient@example.com',   'password' => Hash::make('password'), 'Date_Birth' => '1978-03-10', 'Phone' => '0553456789', 'Gender' => 'ذكر',   'Blood_Group' => 'O-',  'created_at' => now(), 'updated_at' => now()],
            // id=4
            ['email' => 'nadia.patient@example.com',  'password' => Hash::make('password'), 'Date_Birth' => '1995-11-25', 'Phone' => '0554567890', 'Gender' => 'أنثى',  'Blood_Group' => 'AB+', 'created_at' => now(), 'updated_at' => now()],
            // id=5
            ['email' => 'karim.patient@example.com',  'password' => Hash::make('password'), 'Date_Birth' => '1988-07-08', 'Phone' => '0555678901', 'Gender' => 'ذكر',   'Blood_Group' => 'A-',  'created_at' => now(), 'updated_at' => now()],
            // id=6
            ['email' => 'hala.patient@example.com',   'password' => Hash::make('password'), 'Date_Birth' => '1992-02-14', 'Phone' => '0556789012', 'Gender' => 'أنثى',  'Blood_Group' => 'O+',  'created_at' => now(), 'updated_at' => now()],
            // id=7
            ['email' => 'fadi.patient@example.com',   'password' => Hash::make('password'), 'Date_Birth' => '1975-06-30', 'Phone' => '0557890123', 'Gender' => 'ذكر',   'Blood_Group' => 'B-',  'created_at' => now(), 'updated_at' => now()],
            // id=8
            ['email' => 'dalia.patient@example.com',  'password' => Hash::make('password'), 'Date_Birth' => '2000-12-05', 'Phone' => '0558901234', 'Gender' => 'أنثى',  'Blood_Group' => 'AB-', 'created_at' => now(), 'updated_at' => now()],
            // id=9
            ['email' => 'bassem.patient@example.com', 'password' => Hash::make('password'), 'Date_Birth' => '1983-04-18', 'Phone' => '0559012345', 'Gender' => 'ذكر',   'Blood_Group' => 'A+',  'created_at' => now(), 'updated_at' => now()],
            // id=10
            ['email' => 'inas.patient@example.com',   'password' => Hash::make('password'), 'Date_Birth' => '1970-08-22', 'Phone' => '0560123456', 'Gender' => 'أنثى',  'Blood_Group' => 'O+',  'created_at' => now(), 'updated_at' => now()],
        ]);

        // =============================================
        // 21. ترجمات المرضى
        // =============================================
        DB::table('patient_translations')->insert([
            ['patient_id' => 1,  'locale' => 'ar', 'name' => 'أحمد علي حسن',       'Address' => '12 الشارع الرئيسي، القاهرة'],
            ['patient_id' => 1,  'locale' => 'en', 'name' => 'Ahmed Ali Hassan',    'Address' => '12 Main Street, Cairo'],
            ['patient_id' => 2,  'locale' => 'ar', 'name' => 'سارة محمد',           'Address' => '45 طريق النيل، الإسكندرية'],
            ['patient_id' => 2,  'locale' => 'en', 'name' => 'Sara Mohamed',        'Address' => '45 Nile Road, Alexandria'],
            ['patient_id' => 3,  'locale' => 'ar', 'name' => 'عمر عبدالله',         'Address' => '78 شارع الصحراء، الجيزة'],
            ['patient_id' => 3,  'locale' => 'en', 'name' => 'Omar Abdullah',       'Address' => '78 Desert Avenue, Giza'],
            ['patient_id' => 4,  'locale' => 'ar', 'name' => 'نادية صالح',          'Address' => '32 مدينة الحديقة، القاهرة'],
            ['patient_id' => 4,  'locale' => 'en', 'name' => 'Nadia Saleh',         'Address' => '32 Garden City, Cairo'],
            ['patient_id' => 5,  'locale' => 'ar', 'name' => 'كريم منصور',          'Address' => '55 شارع الكورنيش، السويس'],
            ['patient_id' => 5,  'locale' => 'en', 'name' => 'Karim Mansour',       'Address' => '55 Corniche Street, Suez'],
            ['patient_id' => 6,  'locale' => 'ar', 'name' => 'هالة توفيق',          'Address' => '19 طريق النصر، القاهرة'],
            ['patient_id' => 6,  'locale' => 'en', 'name' => 'Hala Tawfik',         'Address' => '19 El Nasr Road, Cairo'],
            ['patient_id' => 7,  'locale' => 'ar', 'name' => 'فادي إسكندر',         'Address' => '67 شارع النخيل، الأقصر'],
            ['patient_id' => 7,  'locale' => 'en', 'name' => 'Fadi Iskander',       'Address' => '67 Palm Street, Luxor'],
            ['patient_id' => 8,  'locale' => 'ar', 'name' => 'داليا محمود',         'Address' => '4 ميدان الجامعة، المنصورة'],
            ['patient_id' => 8,  'locale' => 'en', 'name' => 'Dalia Mahmoud',       'Address' => '4 University Square, Mansoura'],
            ['patient_id' => 9,  'locale' => 'ar', 'name' => 'باسم نور',            'Address' => '88 المنطقة الصناعية، السادس من أكتوبر'],
            ['patient_id' => 9,  'locale' => 'en', 'name' => 'Bassem Nour',         'Address' => '88 Industrial Zone, 6th of October'],
            ['patient_id' => 10, 'locale' => 'ar', 'name' => 'إيناس عبد العزيز',    'Address' => '23 ميدان التحرير، القاهرة'],
            ['patient_id' => 10, 'locale' => 'en', 'name' => 'Inas Abdel-Aziz',     'Address' => '23 El Tahrir Square, Cairo'],
        ]);

        // =============================================
        // 22. الفواتير
        // =============================================
        DB::table('invoices')->insert([
            ['invoice_type' => 1, 'invoice_date' => Carbon::now()->subDays(10)->toDateString(), 'patient_id' => 1,  'doctor_id' => 1, 'section_id' => 1, 'Group_id' => 1,   'Service_id' => null, 'price' => 1050.00, 'discount_value' => 105.00, 'tax_rate' => '15', 'tax_value' => '141.75', 'total_with_tax' => 1086.75, 'type' => 1, 'invoice_status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['invoice_type' => 2, 'invoice_date' => Carbon::now()->subDays(5)->toDateString(),  'patient_id' => 2,  'doctor_id' => 2, 'section_id' => 2, 'Group_id' => null, 'Service_id' => 2,    'price' => 500.00,  'discount_value' => 0.00,   'tax_rate' => '15', 'tax_value' => '75.00',  'total_with_tax' => 575.00,  'type' => 2, 'invoice_status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['invoice_type' => 1, 'invoice_date' => Carbon::now()->subDays(3)->toDateString(),  'patient_id' => 3,  'doctor_id' => 3, 'section_id' => 3, 'Group_id' => 2,   'Service_id' => null, 'price' => 700.00,  'discount_value' => 0.00,   'tax_rate' => '15', 'tax_value' => '105.00', 'total_with_tax' => 805.00,  'type' => 1, 'invoice_status' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['invoice_type' => 2, 'invoice_date' => Carbon::now()->subDays(1)->toDateString(),  'patient_id' => 1,  'doctor_id' => 1, 'section_id' => 1, 'Group_id' => null, 'Service_id' => 5,    'price' => 300.00,  'discount_value' => 30.00,  'tax_rate' => '15', 'tax_value' => '40.50',  'total_with_tax' => 310.50,  'type' => 2, 'invoice_status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['invoice_type' => 1, 'invoice_date' => Carbon::now()->toDateString(),              'patient_id' => 4,  'doctor_id' => 1, 'section_id' => 1, 'Group_id' => 3,   'Service_id' => null, 'price' => 550.00,  'discount_value' => 50.00,  'tax_rate' => '15', 'tax_value' => '75.00',  'total_with_tax' => 575.00,  'type' => 1, 'invoice_status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['invoice_type' => 1, 'invoice_date' => Carbon::now()->subDays(8)->toDateString(),  'patient_id' => 6,  'doctor_id' => 2, 'section_id' => 2, 'Group_id' => 4,   'Service_id' => null, 'price' => 1450.00, 'discount_value' => 150.00, 'tax_rate' => '15', 'tax_value' => '195.00', 'total_with_tax' => 1495.00, 'type' => 1, 'invoice_status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['invoice_type' => 2, 'invoice_date' => Carbon::now()->subDays(4)->toDateString(),  'patient_id' => 7,  'doctor_id' => 5, 'section_id' => 5, 'Group_id' => null, 'Service_id' => 9,    'price' => 250.00,  'discount_value' => 0.00,   'tax_rate' => '15', 'tax_value' => '37.50',  'total_with_tax' => 287.50,  'type' => 2, 'invoice_status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['invoice_type' => 1, 'invoice_date' => Carbon::now()->subDays(2)->toDateString(),  'patient_id' => 9,  'doctor_id' => 8, 'section_id' => 8, 'Group_id' => 5,   'Service_id' => null, 'price' => 830.00,  'discount_value' => 80.00,  'tax_rate' => '15', 'tax_value' => '112.50', 'total_with_tax' => 862.50,  'type' => 1, 'invoice_status' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['invoice_type' => 2, 'invoice_date' => Carbon::now()->subDays(6)->toDateString(),  'patient_id' => 8,  'doctor_id' => 6, 'section_id' => 6, 'Group_id' => null, 'Service_id' => 10,   'price' => 180.00,  'discount_value' => 0.00,   'tax_rate' => '15', 'tax_value' => '27.00',  'total_with_tax' => 207.00,  'type' => 2, 'invoice_status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['invoice_type' => 1, 'invoice_date' => Carbon::now()->subDays(1)->toDateString(),  'patient_id' => 10, 'doctor_id' => 7, 'section_id' => 7, 'Group_id' => 6,   'Service_id' => null, 'price' => 500.00,  'discount_value' => 0.00,   'tax_rate' => '15', 'tax_value' => '75.00',  'total_with_tax' => 575.00,  'type' => 1, 'invoice_status' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // =============================================
        // 23. فواتير الخدمات الفردية
        // =============================================
        DB::table('single_invoices')->insert([
            ['invoice_date' => Carbon::now()->subDays(8)->toDateString(), 'patient_id' => 1,  'doctor_id' => 1, 'section_id' => 1, 'Service_id' => 1,  'price' => 200.00, 'discount_value' => 0.00,  'tax_rate' => '15', 'tax_value' => '30.00',  'total_with_tax' => 230.00,  'type' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['invoice_date' => Carbon::now()->subDays(4)->toDateString(), 'patient_id' => 2,  'doctor_id' => 2, 'section_id' => 2, 'Service_id' => 3,  'price' => 350.00, 'discount_value' => 35.00, 'tax_rate' => '15', 'tax_value' => '47.25',  'total_with_tax' => 362.25,  'type' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['invoice_date' => Carbon::now()->subDays(2)->toDateString(), 'patient_id' => 5,  'doctor_id' => 3, 'section_id' => 3, 'Service_id' => 4,  'price' => 750.00, 'discount_value' => 0.00,  'tax_rate' => '15', 'tax_value' => '112.50', 'total_with_tax' => 862.50,  'type' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['invoice_date' => Carbon::now()->subDays(6)->toDateString(), 'patient_id' => 6,  'doctor_id' => 2, 'section_id' => 2, 'Service_id' => 8,  'price' => 850.00, 'discount_value' => 85.00, 'tax_rate' => '15', 'tax_value' => '114.75', 'total_with_tax' => 879.75,  'type' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['invoice_date' => Carbon::now()->subDays(3)->toDateString(), 'patient_id' => 7,  'doctor_id' => 5, 'section_id' => 5, 'Service_id' => 5,  'price' => 300.00, 'discount_value' => 0.00,  'tax_rate' => '15', 'tax_value' => '45.00',  'total_with_tax' => 345.00,  'type' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['invoice_date' => Carbon::now()->subDays(1)->toDateString(), 'patient_id' => 8,  'doctor_id' => 6, 'section_id' => 6, 'Service_id' => 10, 'price' => 180.00, 'discount_value' => 0.00,  'tax_rate' => '15', 'tax_value' => '27.00',  'total_with_tax' => 207.00,  'type' => 2, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // =============================================
        // 24. فواتير الباقات
        // =============================================
        DB::table('group_invoices')->insert([
            ['invoice_date' => Carbon::now()->subDays(10)->toDateString(), 'patient_id' => 1,  'doctor_id' => 1, 'section_id' => 1, 'Group_id' => 1, 'price' => 1050.00, 'discount_value' => 105.00, 'tax_rate' => '15', 'tax_value' => '141.75', 'total_with_tax' => 1086.75, 'type' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['invoice_date' => Carbon::now()->subDays(3)->toDateString(),  'patient_id' => 3,  'doctor_id' => 3, 'section_id' => 3, 'Group_id' => 2, 'price' => 700.00,  'discount_value' => 0.00,   'tax_rate' => '15', 'tax_value' => '105.00', 'total_with_tax' => 805.00,  'type' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['invoice_date' => Carbon::now()->toDateString(),              'patient_id' => 4,  'doctor_id' => 1, 'section_id' => 1, 'Group_id' => 3, 'price' => 550.00,  'discount_value' => 50.00,  'tax_rate' => '15', 'tax_value' => '75.00',  'total_with_tax' => 575.00,  'type' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['invoice_date' => Carbon::now()->subDays(8)->toDateString(),  'patient_id' => 6,  'doctor_id' => 2, 'section_id' => 2, 'Group_id' => 4, 'price' => 1450.00, 'discount_value' => 150.00, 'tax_rate' => '15', 'tax_value' => '195.00', 'total_with_tax' => 1495.00, 'type' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['invoice_date' => Carbon::now()->subDays(2)->toDateString(),  'patient_id' => 9,  'doctor_id' => 8, 'section_id' => 8, 'Group_id' => 5, 'price' => 830.00,  'discount_value' => 80.00,  'tax_rate' => '15', 'tax_value' => '112.50', 'total_with_tax' => 862.50,  'type' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['invoice_date' => Carbon::now()->subDays(1)->toDateString(),  'patient_id' => 10, 'doctor_id' => 7, 'section_id' => 7, 'Group_id' => 6, 'price' => 500.00,  'discount_value' => 0.00,   'tax_rate' => '15', 'tax_value' => '75.00',  'total_with_tax' => 575.00,  'type' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // =============================================
        // 25. سندات القبض
        // =============================================
        DB::table('receipt_accounts')->insert([
            ['date' => Carbon::now()->subDays(9)->toDateString(), 'patient_id' => 1,  'amount' => 1086.75, 'description' => 'سداد فاتورة باقة فحص القلب رقم 1',              'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->subDays(4)->toDateString(), 'patient_id' => 2,  'amount' => 575.00,  'description' => 'سداد فاتورة خدمة تخطيط القلب',                  'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->subDays(1)->toDateString(), 'patient_id' => 1,  'amount' => 310.50,  'description' => 'سداد فاتورة تحليل الدم الشامل',                  'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->toDateString(),             'patient_id' => 4,  'amount' => 575.00,  'description' => 'سداد فاتورة باقة التحاليل',                      'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->subDays(7)->toDateString(), 'patient_id' => 6,  'amount' => 1495.00, 'description' => 'سداد فاتورة باقة الأعصاب المتقدمة',              'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->subDays(3)->toDateString(), 'patient_id' => 7,  'amount' => 287.50,  'description' => 'سداد فاتورة فحص وظائف الغدة الدرقية',           'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->subDays(5)->toDateString(), 'patient_id' => 8,  'amount' => 207.00,  'description' => 'سداد فاتورة اختبار حساسية الجلد',               'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->subDays(1)->toDateString(), 'patient_id' => 10, 'amount' => 575.00,  'description' => 'سداد فاتورة باقة صحة الطفل',                    'created_at' => now(), 'updated_at' => now()],
        ]);

        // =============================================
        // 26. سندات الصرف
        // =============================================
        DB::table('payment_accounts')->insert([
            ['date' => Carbon::now()->subDays(7)->toDateString(), 'patient_id' => 3, 'amount' => 200.00, 'description' => 'استرداد مبلغ بسبب إلغاء الموعد',                 'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->subDays(2)->toDateString(), 'patient_id' => 5, 'amount' => 100.00, 'description' => 'استرداد جزئي - تغطية شركة التأمين',              'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->subDays(5)->toDateString(), 'patient_id' => 9, 'amount' => 150.00, 'description' => 'تسوية خطأ في الفاتورة - استرداد الفرق',          'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->subDays(1)->toDateString(), 'patient_id' => 2, 'amount' => 75.00,  'description' => 'استرداد مبلغ زائد في الدفع',                     'created_at' => now(), 'updated_at' => now()],
        ]);

        // =============================================
        // 27. حساب الصندوق العام
        // =============================================
        DB::table('fund_accounts')->insert([
            ['date' => Carbon::now()->subDays(9)->toDateString(), 'invoice_id' => 1,    'receipt_id' => 1,    'Payment_id' => null, 'Debit' => 1086.75, 'credit' => null,   'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->subDays(4)->toDateString(), 'invoice_id' => 2,    'receipt_id' => 2,    'Payment_id' => null, 'Debit' => 575.00,  'credit' => null,   'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->subDays(7)->toDateString(), 'invoice_id' => null, 'receipt_id' => null, 'Payment_id' => 1,    'Debit' => null,    'credit' => 200.00, 'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->subDays(1)->toDateString(), 'invoice_id' => 4,    'receipt_id' => 3,    'Payment_id' => null, 'Debit' => 310.50,  'credit' => null,   'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->subDays(2)->toDateString(), 'invoice_id' => null, 'receipt_id' => null, 'Payment_id' => 2,    'Debit' => null,    'credit' => 100.00, 'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->toDateString(),             'invoice_id' => 5,    'receipt_id' => 4,    'Payment_id' => null, 'Debit' => 575.00,  'credit' => null,   'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->subDays(7)->toDateString(), 'invoice_id' => 6,    'receipt_id' => 5,    'Payment_id' => null, 'Debit' => 1495.00, 'credit' => null,   'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->subDays(5)->toDateString(), 'invoice_id' => null, 'receipt_id' => null, 'Payment_id' => 3,    'Debit' => null,    'credit' => 150.00, 'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->subDays(3)->toDateString(), 'invoice_id' => 7,    'receipt_id' => 6,    'Payment_id' => null, 'Debit' => 287.50,  'credit' => null,   'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->subDays(1)->toDateString(), 'invoice_id' => null, 'receipt_id' => null, 'Payment_id' => 4,    'Debit' => null,    'credit' => 75.00,  'created_at' => now(), 'updated_at' => now()],
        ]);

        // =============================================
        // 28. حسابات المرضى
        // =============================================
        DB::table('patient_accounts')->insert([
            ['date' => Carbon::now()->subDays(10)->toDateString(), 'invoice_id' => 1,    'receipt_id' => null, 'patient_id' => 1, 'Payment_id' => null, 'Debit' => 1086.75, 'credit' => null,    'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->subDays(9)->toDateString(),  'invoice_id' => null, 'receipt_id' => 1,    'patient_id' => 1, 'Payment_id' => null, 'Debit' => null,    'credit' => 1086.75, 'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->subDays(5)->toDateString(),  'invoice_id' => 2,    'receipt_id' => null, 'patient_id' => 2, 'Payment_id' => null, 'Debit' => 575.00,  'credit' => null,    'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->subDays(4)->toDateString(),  'invoice_id' => null, 'receipt_id' => 2,    'patient_id' => 2, 'Payment_id' => null, 'Debit' => null,    'credit' => 575.00,  'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->subDays(7)->toDateString(),  'invoice_id' => null, 'receipt_id' => null, 'patient_id' => 3, 'Payment_id' => 1,    'Debit' => null,    'credit' => 200.00,  'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->subDays(1)->toDateString(),  'invoice_id' => 4,    'receipt_id' => null, 'patient_id' => 1, 'Payment_id' => null, 'Debit' => 310.50,  'credit' => null,    'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->subDays(1)->toDateString(),  'invoice_id' => null, 'receipt_id' => 3,    'patient_id' => 1, 'Payment_id' => null, 'Debit' => null,    'credit' => 310.50,  'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->toDateString(),              'invoice_id' => 5,    'receipt_id' => null, 'patient_id' => 4, 'Payment_id' => null, 'Debit' => 575.00,  'credit' => null,    'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->toDateString(),              'invoice_id' => null, 'receipt_id' => 4,    'patient_id' => 4, 'Payment_id' => null, 'Debit' => null,    'credit' => 575.00,  'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->subDays(8)->toDateString(),  'invoice_id' => 6,    'receipt_id' => null, 'patient_id' => 6, 'Payment_id' => null, 'Debit' => 1495.00, 'credit' => null,    'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->subDays(7)->toDateString(),  'invoice_id' => null, 'receipt_id' => 5,    'patient_id' => 6, 'Payment_id' => null, 'Debit' => null,    'credit' => 1495.00, 'created_at' => now(), 'updated_at' => now()],
            ['date' => Carbon::now()->subDays(2)->toDateString(),  'invoice_id' => null, 'receipt_id' => null, 'patient_id' => 5, 'Payment_id' => 2,    'Debit' => null,    'credit' => 100.00,  'created_at' => now(), 'updated_at' => now()],
        ]);

        // =============================================
        // 29. التشخيصات الطبية
        // =============================================
        DB::table('diagnostics')->insert([
            [
                'date'        => Carbon::now()->subDays(10)->toDateString(),
                'review_date' => Carbon::now()->addDays(14),
                'diagnosis'   => 'يعاني المريض من ارتفاع طفيف في ضغط الدم مع آلام متقطعة في الصدر. تخطيط القلب يُظهر إيقاعاً جيبياً طبيعياً. ضغط الدم: 145/90 ملم زئبق. يُوصى بتغيير نمط الحياة والمتابعة الدورية.',
                'medicine'    => "أملوديبين 5 ملغ مرة يومياً\nأسبرين 81 ملغ مرة يومياً\nأوميبرازول 20 ملغ مرة يومياً",
                'invoice_id'  => 1, 'patient_id' => 1, 'doctor_id' => 1, 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'date'        => Carbon::now()->subDays(5)->toDateString(),
                'review_date' => Carbon::now()->addDays(7),
                'diagnosis'   => 'تشكو المريضة من صداع مستمر وضبابية في الرؤية منذ أسبوعين. الفحص العصبي لا يُظهر أي عجز بؤري. يُوصى بإجراء رنين مغناطيسي للمخ.',
                'medicine'    => "إيبوبروفين 400 ملغ ثلاث مرات يومياً\nمكملات فيتامين B12",
                'invoice_id'  => 2, 'patient_id' => 2, 'doctor_id' => 2, 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'date'        => Carbon::now()->subDays(3)->toDateString(),
                'review_date' => null,
                'diagnosis'   => 'التهاب مفصل الركبة اليمنى - درجة ثانية. يُفيد المريض بألم عند المشي وصعود الدرج. الأشعة السينية تؤكد تضيق مسافة المفصل.',
                'medicine'    => "ديكلوفيناك جل للتطبيق مرتين يومياً\nجلوكوزامين 500 ملغ ثلاث مرات يومياً\nجلسات علاج طبيعي - موصى بها",
                'invoice_id'  => 3, 'patient_id' => 3, 'doctor_id' => 3, 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'date'        => Carbon::now()->subDays(1)->toDateString(),
                'review_date' => Carbon::now()->addDays(30),
                'diagnosis'   => 'فحص دوري روتيني. جميع مؤشرات الدم ضمن المعدل الطبيعي. المريض بصحة جيدة بشكل عام. يُوصى بإجراء فحص سنوي دوري.',
                'medicine'    => "الاستمرار في الأدوية الحالية\nمكمل متعدد الفيتامينات",
                'invoice_id'  => 4, 'patient_id' => 1, 'doctor_id' => 1, 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'date'        => Carbon::now()->subDays(8)->toDateString(),
                'review_date' => Carbon::now()->addDays(21),
                'diagnosis'   => 'تعاني المريضة من نوبات صداع نصفي متكررة مصحوبة بهالات بصرية. اضطراب في النوم ملحوظ. الرنين المغناطيسي للمخ لا يُظهر أي تشوهات هيكلية. تُوصى بمتابعة أعصاب.',
                'medicine'    => "سوماتريبتان 50 ملغ عند الحاجة\nتوبيراميت 25 ملغ مرة يومياً للوقاية\nميلاتونين 3 ملغ قبل النوم",
                'invoice_id'  => 6, 'patient_id' => 6, 'doctor_id' => 2, 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'date'        => Carbon::now()->subDays(4)->toDateString(),
                'review_date' => Carbon::now()->addDays(14),
                'diagnosis'   => 'نتائج وظائف الغدة الدرقية تكشف قصور درقي تحت سريري. TSH مرتفع قليلاً عند 6.2. لا أعراض واضحة لقصور الغدة في الوقت الراهن. مراقبة مع إعادة التحليل خلال 3 أشهر.',
                'medicine'    => "ليفوثيروكسين 25 ميكروجرام مرة يومياً صباحاً\nإعادة قياس TSH بعد 12 أسبوعاً",
                'invoice_id'  => 7, 'patient_id' => 7, 'doctor_id' => 5, 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'date'        => Carbon::now()->subDays(2)->toDateString(),
                'review_date' => Carbon::now()->addDays(60),
                'diagnosis'   => 'داء السكري من النوع الثاني - ضعيف السيطرة. السكر التراكمي HbA1c: 9.1%. المريض يُفيد بعدم الالتزام بالحمية الغذائية. فحص القدمين طبيعي. يُحال للكشف على العيون.',
                'medicine'    => "ميتفورمين 1000 ملغ مرتين يومياً\nجليكلازيد 80 ملغ مرة يومياً\nروسوفاستاتين 10 ملغ مرة يومياً",
                'invoice_id'  => 8, 'patient_id' => 9, 'doctor_id' => 8, 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'date'        => Carbon::now()->subDays(6)->toDateString(),
                'review_date' => Carbon::now()->addDays(10),
                'diagnosis'   => 'التهاب جلد تماسي - تفاعل تحسسي للنيكل. نتيجة اختبار الرقع إيجابية. لا حاجة لخزعة جلدية. يُنصح بتجنب مسببات الحساسية.',
                'medicine'    => "هيدروكورتيزون 1% كريم للتطبيق مرتين يومياً\nسيتيريزين 10 ملغ مرة يومياً\nمرطب جلدي حسب الحاجة",
                'invoice_id'  => 9, 'patient_id' => 8, 'doctor_id' => 6, 'created_at' => now(), 'updated_at' => now(),
            ],
        ]);

        // =============================================
        // 30. موظفو المختبر
        // =============================================
        DB::table('laboratorie_employees')->insert([
            ['name' => 'فني مختبر',      'email' => 'test@gmail.com',            'password' => Hash::make('password'), 'email_verified_at' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'سارة المختبر',   'email' => 'sara.lab@example.com',      'password' => Hash::make('password'), 'email_verified_at' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'محمد المختبر',   'email' => 'mohammed.lab@example.com',  'password' => Hash::make('password'), 'email_verified_at' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'أميرة المختبر',  'email' => 'amira.lab@example.com',     'password' => Hash::make('password'), 'email_verified_at' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ياسر المختبر',   'email' => 'yasser.lab@example.com',    'password' => Hash::make('password'), 'email_verified_at' => now(), 'created_at' => now(), 'updated_at' => now()],
        ]);

        // =============================================
        // 31. طلبات المختبر
        // =============================================
        DB::table('laboratories')->insert([
            [
                'description'          => 'تحليل دم شامل CBC، وظائف كبد LFT، وظائف كلى KFT',
                'invoice_id'           => 1, 'patient_id' => 1,  'doctor_id' => 1, 'employee_id' => 1,
                'description_employee' => "CBC: كرات الدم البيضاء 7.5، الحمراء 5.0، هيموجلوبين 14.5 جم/ديسيلتر، صفائح 250 ألف - ضمن الطبيعي.\nوظائف الكبد: ALT 25، AST 30، بيليروبين 0.8 - طبيعي.\nوظائف الكلى: كرياتينين 1.0، يوريا 25 - طبيعي.",
                'case' => 2, 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'description'          => 'سكر الدم الصيامي والسكر التراكمي HbA1c',
                'invoice_id'           => 2, 'patient_id' => 2,  'doctor_id' => 2, 'employee_id' => 2,
                'description_employee' => "سكر صيامي: 95 ملغ/ديسيلتر - طبيعي.\nسكر تراكمي HbA1c: 5.4% - طبيعي.",
                'case' => 2, 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'description'          => 'مزرعة بول واختبار حساسية للمضادات الحيوية',
                'invoice_id'           => 4, 'patient_id' => 1,  'doctor_id' => 1, 'employee_id' => 1,
                'description_employee' => null,
                'case' => 0, 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'description'          => 'دهون الدم - كوليسترول كلي، HDL، LDL، دهون ثلاثية',
                'invoice_id'           => 5, 'patient_id' => 4,  'doctor_id' => 1, 'employee_id' => null,
                'description_employee' => null,
                'case' => 0, 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'description'          => 'وظائف الغدة الدرقية: TSH، T3 حر، T4 حر',
                'invoice_id'           => 7, 'patient_id' => 7,  'doctor_id' => 5, 'employee_id' => 3,
                'description_employee' => "TSH: 6.2 وحدة/لتر (مرتفع)\nT3 حر: 3.1 بيكومول/لتر (طبيعي)\nT4 حر: 12.4 بيكومول/لتر (طبيعي)\nالاستنتاج: قصور درقي تحت سريري.",
                'case' => 2, 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'description'          => 'سكر تراكمي HbA1c وإنسولين صيامي',
                'invoice_id'           => 8, 'patient_id' => 9,  'doctor_id' => 8, 'employee_id' => 4,
                'description_employee' => "HbA1c: 9.1% (مرتفع جداً)\nإنسولين صيامي: 18.4 وحدة دولية/مليلتر (مرتفع)\nالاستنتاج: ضعف السيطرة على السكري - مراجعة العلاج والنظام الغذائي ضرورية.",
                'case' => 2, 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'description'          => 'مزرعة دم واختبار حساسية للمضادات - للاشتباه بتجرثم الدم',
                'invoice_id'           => 6, 'patient_id' => 6,  'doctor_id' => 2, 'employee_id' => 2,
                'description_employee' => null,
                'case' => 1, 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'description'          => 'مخطط تخثر الدم: وقت البروثرومبين PT، وقت الثرومبوبلاستين PTT، INR',
                'invoice_id'           => 10,'patient_id' => 10, 'doctor_id' => 7, 'employee_id' => null,
                'description_employee' => null,
                'case' => 0, 'created_at' => now(), 'updated_at' => now(),
            ],
        ]);

        // =============================================
        // 32. موظفو الأشعة
        // =============================================
        DB::table('ray_employees')->insert([
            ['name' => 'فني أشعة',        'email' => 'ray@gmail.com',             'password' => Hash::make('password'), 'email_verified_at' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'أحمد الأشعة',    'email' => 'ahmed.ray@example.com',     'password' => Hash::make('password'), 'email_verified_at' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'فاطمة الأشعة',   'email' => 'fatma.ray@example.com',     'password' => Hash::make('password'), 'email_verified_at' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'رامي الأشعة',    'email' => 'rami.ray@example.com',      'password' => Hash::make('password'), 'email_verified_at' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'نسمة الأشعة',    'email' => 'nesma.ray@example.com',     'password' => Hash::make('password'), 'email_verified_at' => now(), 'created_at' => now(), 'updated_at' => now()],
        ]);

        // =============================================
        // 33. طلبات الأشعة
        // =============================================
        DB::table('rays')->insert([
            [
                'description'          => 'أشعة سينية على الصدر - إسقاط أمامي خلفي PA',
                'invoice_id'           => 1,  'patient_id' => 1,  'doctor_id' => 1, 'employee_id' => 1,
                'description_employee' => 'نتائج أشعة الصدر: حقول رئوية نظيفة من الجانبين. لا تضخم في حجم القلب. لا انصباب جنبي. المنصف طبيعي. الاستنتاج: أشعة صدر طبيعية.',
                'case' => 2, 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'description'          => 'رنين مغناطيسي للمخ بدون حقن',
                'invoice_id'           => 2,  'patient_id' => 2,  'doctor_id' => 2, 'employee_id' => 2,
                'description_employee' => 'رنين مغناطيسي للمخ: لا توجد آفات شاغلة للحجم. تمييز طبيعي بين المادة الرمادية والبيضاء. لا توجد إشارات غير طبيعية. الاستنتاج: رنين مغناطيسي طبيعي للمخ.',
                'case' => 2, 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'description'          => 'أشعة سينية على الركبة اليمنى - إسقاطان أمامي وجانبي',
                'invoice_id'           => 3,  'patient_id' => 3,  'doctor_id' => 3, 'employee_id' => 1,
                'description_employee' => 'أشعة الركبة اليمنى: تضيق خفيف في مساحة المفصل الإنسي. تصلب تحت الغضروف. نتوءات عظمية صغيرة. الاستنتاج: التهاب مفاصل تنكسي درجة ثانية.',
                'case' => 2, 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'description'          => 'سونار على البطن',
                'invoice_id'           => 5,  'patient_id' => 4,  'doctor_id' => 1, 'employee_id' => null,
                'description_employee' => null,
                'case' => 0, 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'description'          => 'رنين مغناطيسي للمخ مع حقن - متابعة',
                'invoice_id'           => 6,  'patient_id' => 6,  'doctor_id' => 2, 'employee_id' => 2,
                'description_employee' => 'رنين مغناطيسي مع الجادولينيوم: لا تعزيز لأي آفة. ضمور قشري خفيف مناسب للعمر. لا تغيرات في المادة البيضاء. الاستنتاج: لا تغير جوهري مقارنة بالرنين السابق.',
                'case' => 2, 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'description'          => 'أشعة مقطعية على الصدر بدون حقن',
                'invoice_id'           => 8,  'patient_id' => 9,  'doctor_id' => 8, 'employee_id' => 3,
                'description_employee' => 'CT صدر: لا انسداد رئوي وعائي. تغيرات انتفاخية خفيفة في الفصوص العلوية. لا تكثيف أو انصباب. حجم القلب طبيعي. الاستنتاج: انتفاخ رئوي خفيف - يُقيَّم سريرياً.',
                'case' => 2, 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'description'          => 'سونار الحوض للسيدات',
                'invoice_id'           => 9,  'patient_id' => 8,  'doctor_id' => 6, 'employee_id' => 3,
                'description_employee' => null,
                'case' => 1, 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'description'          => 'أشعة سينية على العمود الفقري القطني - إسقاطان أمامي وجانبي',
                'invoice_id'           => 10, 'patient_id' => 10, 'doctor_id' => 7, 'employee_id' => null,
                'description_employee' => null,
                'case' => 0, 'created_at' => now(), 'updated_at' => now(),
            ],
        ]);

        // =============================================
        // 34. الإشعارات
        // =============================================
        DB::table('notifications')->insert([
            ['reader_status' => false, 'user_id' => 1, 'message' => 'تم تحديد موعد جديد مع د. فورست كامينجز بتاريخ ' . Carbon::now()->addDays(2)->toDateString(),          'created_at' => now(),                           'updated_at' => now()],
            ['reader_status' => true,  'user_id' => 1, 'message' => 'تم سداد الفاتورة رقم 1 بنجاح. الإجمالي: 1086.75 ريال',                                                'created_at' => Carbon::now()->subDays(9),       'updated_at' => Carbon::now()->subDays(9)],
            ['reader_status' => false, 'user_id' => 2, 'message' => 'نتائج تحاليل المريض أحمد علي جاهزة للمراجعة',                                                         'created_at' => now(),                           'updated_at' => now()],
            ['reader_status' => false, 'user_id' => 1, 'message' => 'تذكير: موعد المراجعة للمريض أحمد علي بعد 14 يوماً',                                                   'created_at' => now(),                           'updated_at' => now()],
            ['reader_status' => true,  'user_id' => 3, 'message' => 'تم تكليفك بطلب تحليل جديد. المريض: أحمد علي حسن',                                                     'created_at' => Carbon::now()->subDays(10),      'updated_at' => Carbon::now()->subDays(10)],
            ['reader_status' => false, 'user_id' => 4, 'message' => 'طلب أشعة جديد للمريضة سارة محمد',                                                                     'created_at' => now(),                           'updated_at' => now()],
            ['reader_status' => false, 'user_id' => 2, 'message' => 'تم تأكيد موعد رانيا سامي بتاريخ ' . Carbon::now()->addDays(3)->toDateString(),                        'created_at' => now(),                           'updated_at' => now()],
            ['reader_status' => true,  'user_id' => 5, 'message' => 'تم إنشاء الفاتورة رقم 6 للمريضة هالة توفيق. الإجمالي: 1495.00 ريال',                                 'created_at' => Carbon::now()->subDays(8),       'updated_at' => Carbon::now()->subDays(8)],
            ['reader_status' => false, 'user_id' => 6, 'message' => 'تم رفع نتائج فحص الغدة الدرقية للمريض فادي إسكندر. يرجى المراجعة',                                   'created_at' => Carbon::now()->subDays(4),       'updated_at' => Carbon::now()->subDays(4)],
            ['reader_status' => false, 'user_id' => 3, 'message' => 'عاجل: طلب تحليل جديد للمريض باسم نور - سكر تراكمي وإنسولين',                                         'created_at' => Carbon::now()->subDays(2),       'updated_at' => Carbon::now()->subDays(2)],
            ['reader_status' => true,  'user_id' => 1, 'message' => 'تم استلام مبلغ 310.50 ريال سداداً لفاتورة تحليل الدم',                                                'created_at' => Carbon::now()->subDays(1),       'updated_at' => Carbon::now()->subDays(1)],
            ['reader_status' => false, 'user_id' => 7, 'message' => 'تم حجز موعد طب أطفال جديد للمريضة دينا مصطفى',                                                       'created_at' => now(),                           'updated_at' => now()],
        ]);

        // =============================================
        // 35. المحادثات
        // =============================================
        DB::table('conversations')->insert([
            ['sender_email' => 'cummings.forest@example.org', 'receiver_email' => 'patient@gmail.com',          'last_time_message' => Carbon::now()->subHours(2),  'created_at' => now(), 'updated_at' => now()],
            ['sender_email' => 'admin@gmail.com',             'receiver_email' => 'cummings.forest@example.org','last_time_message' => Carbon::now()->subHours(5),  'created_at' => now(), 'updated_at' => now()],
            ['sender_email' => 'cummings.forest@example.org', 'receiver_email' => 'test@gmail.com',             'last_time_message' => Carbon::now()->subDay(),     'created_at' => now(), 'updated_at' => now()],
            ['sender_email' => 'cummings.forest@example.org', 'receiver_email' => 'ray@gmail.com',              'last_time_message' => Carbon::now()->subHours(1),  'created_at' => now(), 'updated_at' => now()],
            ['sender_email' => 'patient@gmail.com',           'receiver_email' => 'admin@gmail.com',            'last_time_message' => Carbon::now()->subDays(2),   'created_at' => now(), 'updated_at' => now()],
            ['sender_email' => 'dr.sarah@example.org',        'receiver_email' => 'sara.lab@example.com',       'last_time_message' => Carbon::now()->subHours(3),  'created_at' => now(), 'updated_at' => now()],
            ['sender_email' => 'dr.ahmed@example.org',        'receiver_email' => 'ahmed.ray@example.com',      'last_time_message' => Carbon::now()->subHours(4),  'created_at' => now(), 'updated_at' => now()],
            ['sender_email' => 'admin2@gmail.com',            'receiver_email' => 'dr.khalid@example.org',      'last_time_message' => Carbon::now()->subDays(1),   'created_at' => now(), 'updated_at' => now()],
            ['sender_email' => 'dr.rana@example.org',         'receiver_email' => 'patient@gmail.com',          'last_time_message' => Carbon::now()->subHours(6),  'created_at' => now(), 'updated_at' => now()],
            ['sender_email' => 'dr.hana@example.org',         'receiver_email' => 'admin@gmail.com',            'last_time_message' => Carbon::now()->subDays(3),   'created_at' => now(), 'updated_at' => now()],
        ]);

        // =============================================
        // 36. الرسائل
        // =============================================
        DB::table('messages')->insert([
            // محادثة 1: الطبيب والمريض
            ['conversation_id' => 1, 'sender_email' => 'patient@gmail.com',           'receiver_email' => 'cummings.forest@example.org', 'read' => 1, 'body' => 'السلام عليكم دكتور، أعاني من ألم في الصدر منذ يومين. هل يستدعي هذا القلق؟',                                                   'type' => 'text', 'created_at' => Carbon::now()->subHours(3),                            'updated_at' => Carbon::now()->subHours(3)],
            ['conversation_id' => 1, 'sender_email' => 'cummings.forest@example.org', 'receiver_email' => 'patient@gmail.com',           'read' => 1, 'body' => 'وعليكم السلام أحمد. أنصحك بالحضور للفحص في أقرب وقت ممكن. من فضلك احجز موعداً عبر النظام.',                               'type' => 'text', 'created_at' => Carbon::now()->subHours(2)->addMinutes(30),            'updated_at' => Carbon::now()->subHours(2)->addMinutes(30)],
            ['conversation_id' => 1, 'sender_email' => 'patient@gmail.com',           'receiver_email' => 'cummings.forest@example.org', 'read' => 0, 'body' => 'شكراً دكتور. سأحجز الموعد فوراً. هل الغد متاح؟',                                                                           'type' => 'text', 'created_at' => Carbon::now()->subHours(2),                            'updated_at' => Carbon::now()->subHours(2)],
            // محادثة 2: المدير والطبيب
            ['conversation_id' => 2, 'sender_email' => 'admin@gmail.com',             'receiver_email' => 'cummings.forest@example.org', 'read' => 1, 'body' => 'دكتور كامينجز، يرجى مراجعة نتائج التحاليل المعلقة لثلاثة مرضى منذ أمس.',                                                    'type' => 'text', 'created_at' => Carbon::now()->subHours(6),                            'updated_at' => Carbon::now()->subHours(6)],
            ['conversation_id' => 2, 'sender_email' => 'cummings.forest@example.org', 'receiver_email' => 'admin@gmail.com',             'read' => 1, 'body' => 'تمام. سأراجعها بعد الظهر وأحدث النظام.',                                                                                    'type' => 'text', 'created_at' => Carbon::now()->subHours(5),                            'updated_at' => Carbon::now()->subHours(5)],
            // محادثة 3: الطبيب وموظف المختبر
            ['conversation_id' => 3, 'sender_email' => 'cummings.forest@example.org', 'receiver_email' => 'test@gmail.com',              'read' => 1, 'body' => 'من فضلك اجعل تحليل CBC للمريض أحمد علي (رقم 1) أولوية قصوى. الأمر عاجل.',                                                     'type' => 'text', 'created_at' => Carbon::now()->subDay()->addHours(2),                  'updated_at' => Carbon::now()->subDay()->addHours(2)],
            ['conversation_id' => 3, 'sender_email' => 'test@gmail.com',              'receiver_email' => 'cummings.forest@example.org', 'read' => 1, 'body' => 'حاضر دكتور. ستكون النتائج جاهزة خلال ساعتين.',                                                                              'type' => 'text', 'created_at' => Carbon::now()->subDay()->addHours(2)->addMinutes(15),  'updated_at' => Carbon::now()->subDay()->addHours(2)->addMinutes(15)],
            ['conversation_id' => 3, 'sender_email' => 'test@gmail.com',              'receiver_email' => 'cummings.forest@example.org', 'read' => 0, 'body' => 'دكتور، نتائج CBC للمريض أحمد علي جاهزة. جميع القيم ضمن المعدل الطبيعي.',                                                    'type' => 'text', 'created_at' => Carbon::now()->subDay(),                              'updated_at' => Carbon::now()->subDay()],
            // محادثة 4: الطبيب وموظف الأشعة
            ['conversation_id' => 4, 'sender_email' => 'cummings.forest@example.org', 'receiver_email' => 'ray@gmail.com',               'read' => 1, 'body' => 'من فضلك جهز تقرير أشعة الصدر للمريض أحمد علي. يحتاجه لمتابعة قسم القلب.',                                                   'type' => 'text', 'created_at' => Carbon::now()->subHours(2),                            'updated_at' => Carbon::now()->subHours(2)],
            ['conversation_id' => 4, 'sender_email' => 'ray@gmail.com',               'receiver_email' => 'cummings.forest@example.org', 'read' => 0, 'body' => 'التقرير جاهز دكتور. أشعة الصدر نظيفة ولا توجد أي تشوهات. تم رفع التقرير للنظام.',                                          'type' => 'text', 'created_at' => Carbon::now()->subHours(1),                            'updated_at' => Carbon::now()->subHours(1)],
            // محادثة 5: المريض والمدير
            ['conversation_id' => 5, 'sender_email' => 'patient@gmail.com',           'receiver_email' => 'admin@gmail.com',             'read' => 1, 'body' => 'السلام عليكم، لدي استفسار عن فاتورتي. أعتقد أن هناك خطأ في المبلغ المحسوب.',                                                 'type' => 'text', 'created_at' => Carbon::now()->subDays(2)->addHours(1),                'updated_at' => Carbon::now()->subDays(2)->addHours(1)],
            ['conversation_id' => 5, 'sender_email' => 'admin@gmail.com',             'receiver_email' => 'patient@gmail.com',           'read' => 1, 'body' => 'وعليكم السلام أحمد. راجعت فاتورتك وكل شيء صحيح. المبلغ يتضمن ضريبة القيمة المضافة 15%. إذا كان لديك استفسار آخر يسعدنا مساعدتك.', 'type' => 'text', 'created_at' => Carbon::now()->subDays(2)->addHours(3),                'updated_at' => Carbon::now()->subDays(2)->addHours(3)],
            // محادثة 6: د. سارة وموظفة المختبر
            ['conversation_id' => 6, 'sender_email' => 'dr.sarah@example.org',        'receiver_email' => 'sara.lab@example.com',        'read' => 1, 'body' => 'سارة، هل انتهيتِ من مزرعة الدم للمريضة هالة توفيق؟ الأمر معلق منذ أمس.',                                                     'type' => 'text', 'created_at' => Carbon::now()->subHours(4),                            'updated_at' => Carbon::now()->subHours(4)],
            ['conversation_id' => 6, 'sender_email' => 'sara.lab@example.com',        'receiver_email' => 'dr.sarah@example.org',        'read' => 1, 'body' => 'دكتورة سارة، العينة في مرحلة الحضانة. النتائج الأولية ستكون جاهزة صباح الغد.',                                              'type' => 'text', 'created_at' => Carbon::now()->subHours(3)->addMinutes(20),            'updated_at' => Carbon::now()->subHours(3)->addMinutes(20)],
            ['conversation_id' => 6, 'sender_email' => 'dr.sarah@example.org',        'receiver_email' => 'sara.lab@example.com',        'read' => 0, 'body' => 'شكراً سارة. أرسلي لي إشعاراً فور رفع النتيجة.',                                                                            'type' => 'text', 'created_at' => Carbon::now()->subHours(3),                            'updated_at' => Carbon::now()->subHours(3)],
            // محادثة 7: د. أحمد وفني الأشعة
            ['conversation_id' => 7, 'sender_email' => 'dr.ahmed@example.org',        'receiver_email' => 'ahmed.ray@example.com',       'read' => 1, 'body' => 'أحمد، أشعة الركبة للمريض عمر عبدالله تحتاج تقريراً عاجلاً. من فضلك أعطها أولوية.',                                         'type' => 'text', 'created_at' => Carbon::now()->subHours(5),                            'updated_at' => Carbon::now()->subHours(5)],
            ['conversation_id' => 7, 'sender_email' => 'ahmed.ray@example.com',       'receiver_email' => 'dr.ahmed@example.org',        'read' => 0, 'body' => 'تم التقرير دكتور. تم رفعه على النظام. تأكد التهاب مفاصل تنكسي درجة ثانية.',                                                  'type' => 'text', 'created_at' => Carbon::now()->subHours(4),                            'updated_at' => Carbon::now()->subHours(4)],
            // محادثة 8: المدير الثاني ود. خالد
            ['conversation_id' => 8, 'sender_email' => 'admin2@gmail.com',            'receiver_email' => 'dr.khalid@example.org',       'read' => 1, 'body' => 'دكتور خالد، تم تحديث نظام المختبر. يرجى تسجيل الدخول والتحقق من طلباتك المعلقة.',                                           'type' => 'text', 'created_at' => Carbon::now()->subDays(1)->addHours(3),                'updated_at' => Carbon::now()->subDays(1)->addHours(3)],
            ['conversation_id' => 8, 'sender_email' => 'dr.khalid@example.org',       'receiver_email' => 'admin2@gmail.com',            'read' => 1, 'body' => 'تمام. راجعت كل شيء. طلب واحد ينتظر تأكيد المريض وسأتابعه مباشرة.',                                                          'type' => 'text', 'created_at' => Carbon::now()->subDays(1)->addHours(4),                'updated_at' => Carbon::now()->subDays(1)->addHours(4)],
        ]);
    }
}
