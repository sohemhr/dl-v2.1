<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'uuid' => Str::uuid()->toString(),
            'kode' => 'USR00000000',
            'nama' => 'Sahrul Khumedi',
            'email' => 'sahrul@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'no_hp' => '081775412154',
            'tmp_lahir' => 'Bekasi',
            'tgl_lahir' => '2025-05-05',
            'tgl_tgl' => '05',
            'tgl_bln' => '05',
            'tgl_thn' => '2025',
            'tgl_masuk' => '2025-05-05',
            'tgl_keluar' => '',
            'foto' => '',
            'level' => '202500',
            'status' => 'Active',
            'remember_token' => Str::random(10)
        ]);
        
        User::factory(1)->create();
    }
}