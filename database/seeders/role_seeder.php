<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('role')->insert([
            [
                'role' => 'admin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
             [
                'role' => 'ketua',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'role' => 'divisi keuangan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'role' => 'divisi upja',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'role' => 'anggota',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
