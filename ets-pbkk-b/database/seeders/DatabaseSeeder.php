<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Rekaman;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Rekaman::factory(10)->create();

        Dokter::create([
            'name' => 'Timo Salonen',
            'slug' => 'timo-salonen'
        ]);

        Dokter::create([
            'name' => 'Ilse Kunnas',
            'slug' => 'ilse-kunnas'
        ]);

        Dokter::create([
            'name' => 'Tellervo Lenho',
            'slug' => 'tellervo-lenho'
        ]);

        Dokter::create([
            'name' => 'Mika Suutari',
            'slug' => 'mika-suutari'
        ]);

        Dokter::create([
            'name' => 'Aino Paloranta',
            'slug' => 'aino-paloranta'
        ]);

        Pasien::create([
            'name' => 'Valtteri Takko',
            'slug' => 'valtteri-takko'
        ]);

        Pasien::create([
            'name' => 'Eino Waltari',
            'slug' => 'eino-waltari'
        ]);

        Pasien::create([
            'name' => 'Jussi Kortekangas',
            'slug' => 'jussi-kortekangas'
        ]);

        Pasien::create([
            'name' => 'Sonja Silvan',
            'slug' => 'sonja-silvan'
        ]);

        Pasien::create([
            'name' => 'Sirkka Pusa',
            'slug' => 'sirkka-pusa'
        ]);
    }
}
