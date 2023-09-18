<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobRoles = [
            ['name' => 'Executive'],
            ['name' => 'Managerial'],
            ['name' => 'Individual Contributor'],
        ];

        DB::table('job_roles')->insert($jobRoles);
    }
}
