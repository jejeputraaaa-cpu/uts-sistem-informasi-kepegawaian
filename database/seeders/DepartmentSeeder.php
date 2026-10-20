<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        $departments = [
            'HRD',
            'Keuangan',
            'IT',
        ];

        foreach ($departments as $department) {
            Department::firstOrCreate([
                'name' => $department,
            ]);
        }
    }
}
