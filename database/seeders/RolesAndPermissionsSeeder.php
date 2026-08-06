<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // إعادة تعيين الكاش الخاص بالصلاحيات والأدوار
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // 1. إنشاء الأدوار الرئيسية
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $doctorRole = Role::firstOrCreate(['name' => 'doctor']);
        $patientRole = Role::firstOrCreate(['name' => 'patient']);

        // 2. إنشاء الصلاحيات الأساسية (اختياري للربط المستقبلي)
        Permission::firstOrCreate(['name' => 'manage appointments']);
        Permission::firstOrCreate(['name' => 'view medical records']);

        // إعطاء صلاحيات محددة للأدوار إن أردتِ
        $doctorRole->givePermissionTo('view medical records');
    }
}