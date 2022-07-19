<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
                ['id' => 1, 'name' => 'admin'],
                ['id' => 2, 'name' => 'librarian'],
                ['id' => 3, 'name' => 'student']
        ]);
    }
}
