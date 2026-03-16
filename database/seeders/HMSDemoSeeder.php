<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
class HMSDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('ar_SA');

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('sections')->truncate();
        DB::table('section_translations')->truncate();
        DB::table('doctors')->truncate();
        DB::table('doctor_translations')->truncate();
        DB::table('patients')->truncate();
        DB::table('admins')->truncate();
        DB::table('appointments')->truncate();
        DB::table('services')->truncate();
        DB::table('invoices')->truncate();
        DB::table('diagnostics')->truncate();
        DB::table('laboratories')->truncate();
        DB::table('rays')->truncate();
        DB::table('notifications')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        /*
        |--------------------------------------------------------------------------
        | الأدمن الأساسي
        |--------------------------------------------------------------------------
        */
        DB::table('admins')->insert([
            'name' => 'مدير النظام',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        /*
        |--------------------------------------------------------------------------
        | الأقسام
        |--------------------------------------------------------------------------
        */
        $sections = ['القلب', 'العظام', 'الأطفال', 'الجلدية', 'الأنف والأذن'];

        foreach ($sections as $sectionName) {
            $sectionId = DB::table('sections')->insertGetId([
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('section_translations')->insert([
                'section_id' => $sectionId,
                'locale' => 'ar',
                'name' => $sectionName,
                'description' => 'قسم ' . $sectionName,
            ]);
        }

        $sectionIds = DB::table('sections')->pluck('id');

        /*
        |--------------------------------------------------------------------------
        | الدكتور الأساسي
        |--------------------------------------------------------------------------
        */
        $mainDoctorId = DB::table('doctors')->insertGetId([
            'email' => 'cummings.forest@example.org',
            'password' => Hash::make('123456'),
            'section_id' => $sectionIds->random(),
            'phone' => '01000000000',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('doctor_translations')->insert([
            'doctor_id' => $mainDoctorId,
            'locale' => 'ar',
            'name' => 'د. أحمد كامينجز'
        ]);

        /*
        |--------------------------------------------------------------------------
        | 20 دكتور إضافي
        |--------------------------------------------------------------------------
        */
        for ($i = 0; $i < 20; $i++) {
            $doctorId = DB::table('doctors')->insertGetId([
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('123456'),
                'section_id' => $sectionIds->random(),
                'phone' => $faker->phoneNumber,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('doctor_translations')->insert([
                'doctor_id' => $doctorId,
                'locale' => 'ar',
                'name' => 'د. ' . $faker->name
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | المريض الأساسي
        |--------------------------------------------------------------------------
        */
        $mainPatientId = DB::table('patients')->insertGetId([
            'email' => 'patient@gmail.com',
            'password' => Hash::make('123456'),
            'Date_Birth' => '1995-05-05',
            'Phone' => '01111111111',
            'Gender' => 'ذكر',
            'Blood_Group' => 'O+',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        /*
        |--------------------------------------------------------------------------
        | 50 مريض إضافي
        |--------------------------------------------------------------------------
        */
        for ($i = 0; $i < 50; $i++) {
            DB::table('patients')->insert([
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('123456'),
                'Date_Birth' => $faker->date(),
                'Phone' => $faker->unique()->phoneNumber,
                'Gender' => 'ذكر',
                'Blood_Group' => 'A+',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $patientIds = DB::table('patients')->pluck('id');
        $doctorIds = DB::table('doctors')->pluck('id');

        /*
        |--------------------------------------------------------------------------
        | الخدمات
        |--------------------------------------------------------------------------
        */
        for ($i = 0; $i < 10; $i++) {
            DB::table('services')->insert([
                'price' => rand(200, 1000),
                'description' => 'خدمة طبية رقم ' . $i,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $serviceIds = DB::table('services')->pluck('id');

        /*
        |--------------------------------------------------------------------------
        | 150 فاتورة + تشخيص + أشعة + مختبر
        |--------------------------------------------------------------------------
        */
        for ($i = 0; $i < 150; $i++) {

            $invoiceId = DB::table('invoices')->insertGetId([
                'invoice_type' => 1,
                'invoice_date' => now(),
                'patient_id' => $patientIds->random(),
                'doctor_id' => $doctorIds->random(),
                'section_id' => $sectionIds->random(),
                'Service_id' => $serviceIds->random(),
                'price' => rand(300, 1500),
                'discount_value' => rand(10, 100),
                'tax_rate' => '14%',
                'tax_value' => rand(20, 200),
                'total_with_tax' => rand(400, 2000),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('diagnostics')->insert([
                'date' => now(),
                'diagnosis' => 'تشخيص لحالة مرضية بسيطة',
                'medicine' => 'دواء تجريبي',
                'invoice_id' => $invoiceId,
                'patient_id' => $patientIds->random(),
                'doctor_id' => $doctorIds->random(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('laboratories')->insert([
                'description' => 'تحليل دم شامل',
                'invoice_id' => $invoiceId,
                'patient_id' => $patientIds->random(),
                'doctor_id' => $doctorIds->random(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('rays')->insert([
                'description' => 'أشعة سينية',
                'invoice_id' => $invoiceId,
                'patient_id' => $patientIds->random(),
                'doctor_id' => $doctorIds->random(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | إشعارات
        |--------------------------------------------------------------------------
        */
        for ($i = 0; $i < 50; $i++) {
            DB::table('notifications')->insert([
                'reader_status' => false,
                'user_id' => 1,
                'message' => 'إشعار رقم ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
