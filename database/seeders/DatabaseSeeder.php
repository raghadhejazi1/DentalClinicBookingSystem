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
        $adminRole   = Role::firstOrCreate(['name' => 'admin']);
        $doctorRole  = Role::firstOrCreate(['name' => 'doctor']);
        $patientRole = Role::firstOrCreate(['name' => 'patient']);

        // 2. إنشاء حساب Admin
        $admin = User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name'     => 'Admin User',
                'password' => bcrypt('password'),
                'role'     => 'admin',
            ]
        );
        $admin->assignRole($adminRole);

        // 3. إنشاء أطباء بأول وأسماء حقيقية
        $doctors = [
            [
                'name'  => 'Ahmad Hassan',
                'email' => 'ahmadhassan@gmail.com',
            ],
            [
                'name'  => 'Sarah Ali',
                'email' => 'sarahali@gmail.com',
            ],
        ];

        foreach ($doctors as $docData) {
            $doc = User::firstOrCreate(
                ['email' => $docData['email']],
                [
                    'name'     => $docData['name'],
                    'password' => bcrypt('password'),
                    'role'     => 'doctor',
                ]
            );
            $doc->assignRole($doctorRole);
        }

        // 4. إنشاء حساب Patient
        $patient = User::firstOrCreate(
            ['email' => 'patient@gmail.com'],
            [
                'name'     => 'Patient User',
                'password' => bcrypt('password'),
                'role'     => 'patient',
            ]
        );
        $patient->assignRole($patientRole);
    }
}