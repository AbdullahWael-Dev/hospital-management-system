<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PatientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Patients = new Patient();
        $Patients->email = 'patient@gmail.com';
        $Patients->password = Hash::make('12345678');
        $Patients->Date_Birth = '2006-11-26';
        $Patients->Phone = '123456789';
        $Patients->Gender = 1;
        $Patients->Blood_Group = 'o+';
        $Patients->save();

        //insert trans
        $Patients->name = 'عبدالله وائل';
        $Patients->Address = 'القاهرة';
        $Patients->save();
    }
}
