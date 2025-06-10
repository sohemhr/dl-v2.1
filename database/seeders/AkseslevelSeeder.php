<?php

namespace Database\Seeders;

use App\Models\Akseslevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AkseslevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $akseslevel = [
            ['akses_id' => '202500', 'akses_level' => 'Administrator'],
            ['akses_id' => '202501', 'akses_level' => 'Admin'],
            ['akses_id' => '202502', 'akses_level' => 'Manajemen'],
            ['akses_id' => '202503', 'akses_level' => 'Finance'],
            ['akses_id' => '202504', 'akses_level' => 'Sales'],
            ['akses_id' => '202505', 'akses_level' => 'Operasional'],
            ['akses_id' => '202506', 'akses_level' => 'Publisher'],
        ];
        foreach ($akseslevel as $akses) {
            Akseslevel::create($akses);
        }
    }
}
