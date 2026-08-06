<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. إنشاء الأدوار
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $doctorRole = Role::firstOrCreate(['name' => 'doctor']);
        $patientRole = Role::firstOrCreate(['name' => 'patient']);

        // 2. إنشاء حساب Admin وإعطائه الدور
        $admin = User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            ['name' => 'Admin User', 'password' => bcrypt('password')]
        );
        $admin->assignRole($adminRole);

        // 3. إنشاء حساب Doctor وإعطائه الدور
        $doctor = User::firstOrCreate(
            ['email' => 'doctor@gmail.com'],
            ['name' => 'Doctor User', 'password' => bcrypt('password')]
        );
        $doctor->assignRole($doctorRole);

        // 4. إنشاء حساب Patient وإعطائه الدور
        $patient = User::firstOrCreate(
            ['email' => 'patient@gmail.com'],
            ['name' => 'Patient User', 'password' => bcrypt('password')]
        );
        $patient->assignRole($patientRole);
    }
}