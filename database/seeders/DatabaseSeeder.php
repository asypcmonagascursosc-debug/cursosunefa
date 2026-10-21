<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Municipio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Administrador',
           
            'email' => 'administrador@gmail.com',
            'password'=>Hash::make('12345678'),
        ]);
        $municipios = [
            ['municipio' => 'Piar'],
            ['municipio' => 'Maturin'],
            ['municipio' => 'Acosta'],
            ['municipio' => 'Aguasay'],
            ['municipio' => 'Bolívar'],
            ['municipio' => 'Caripe'],
            ['municipio' => 'Cedeño'],
            ['municipio' => 'Libertador'],
            ['municipio' => 'Ezequiel Zamora'],
            ['municipio' => 'Punceres'],
            ['municipio' => 'Santa Bárbara'],
            ['municipio' => 'Sotillo'],
            ['municipio' => 'Uracoa']
            // todos los países que quieras introducir
        ];

        foreach ($municipios as $municipio) {
            DB::table('municipios')->insert([
                'municipio' => $municipio['municipio']
            ]);
        }
    }
}
