<?php

namespace Database\Factories;

use App\Helpers\MyHelper;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $kode = MyHelper::auto_kode_users(); 
        return [
            'uuid' => Str::uuid()->toString(),
            'kode' => $kode,
            'nama' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'no_hp' => '081775412154',
            'tmp_lahir' => 'Bekasi',
            'tgl_lahir' => '2025-05-05',
            'tgl_tgl' => '05',
            'tgl_bln' => '05',
            'tgl_thn' => '2025',
            'tgl_masuk' => '2025-05-05',
            'tgl_keluar' => '',
            'level' => '202501',
            'status' => 'Deactive',
            'foto' => '',
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
