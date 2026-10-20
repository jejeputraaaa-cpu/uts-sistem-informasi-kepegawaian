<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        $hrd = Department::where('name', 'HRD')->firstOrFail();
        $keuangan = Department::where('name', 'Keuangan')->firstOrFail();
        $it = Department::where('name', 'IT')->firstOrFail();

        $employees = [
            [
                'department_id' => $hrd->id,
                'name' => 'Andi Saputra',
                'position' => 'Staff HRD',
                'salary' => 4500000,
                'joined_at' => '2024-01-15',
            ],
            [
                'department_id' => $hrd->id,
                'name' => 'Siti Rahma',
                'position' => 'HRD Manager',
                'salary' => 7500000,
                'joined_at' => '2022-03-10',
            ],
            [
                'department_id' => $keuangan->id,
                'name' => 'Budi Santoso',
                'position' => 'Staff Keuangan',
                'salary' => 5000000,
                'joined_at' => '2023-06-01',
            ],
            [
                'department_id' => $keuangan->id,
                'name' => 'Dewi Lestari',
                'position' => 'Finance Manager',
                'salary' => 8000000,
                'joined_at' => '2021-08-20',
            ],
            [
                'department_id' => $it->id,
                'name' => 'Rizky Pratama',
                'position' => 'Programmer',
                'salary' => 6000000,
                'joined_at' => '2024-02-05',
            ],
        ];

        foreach ($employees as $employee) {
            Employee::firstOrCreate(
                [
                    'name' => $employee['name'],
                    'department_id' => $employee['department_id'],
                ],
                $employee
            );
        }
    }
}
