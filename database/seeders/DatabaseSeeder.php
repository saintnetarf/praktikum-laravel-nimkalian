<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        {
            Mahasiswa::create([
                'nama' => 'Arifin Asyikin',
                'nim' => 'C050425997',
                'prodi' => 'SIKC',
                'angkatan' => '20251',
                'jenis_kelamin' => 'Laki-laki',
                'email' => '25999@arif.inas',
                'alamat' => 'Pontianak',
                'no_telepon' => '081234567890',
                'no_ktp' => '1234567890123459',
                'foto_profil' => 'arifin.png',
            ]);
            Mahasiswa::create([
                'nama' => 'Arifin Asyikin2',
                'nim' => 'C050425998',
                'prodi' => 'SIKC',
                'angkatan' => '20251',
                'jenis_kelamin' => 'Laki-laki',
                'email' => '25999@arifina6.com',
                'alamat' => 'Pontianak',
                'no_telepon' => '081234567890',
                'no_ktp' => '1234567890123456',
                'foto_profil' => 'arifin.png',
            ]);
        }

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
