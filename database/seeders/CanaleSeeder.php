<?php

namespace Database\Seeders;

use App\Models\Canale;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CanaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Canale::create([
            'nombre' => 'Página Facebook Principal',
            'plataforma' => 'messenger',
            'token' => 'FAKE_TOKEN_MESSENGER'
        ]);

        Canale::create([
            'nombre' => 'WhatsApp Business',
            'plataforma' => 'whatsapp',
            'token' => 'FAKE_TOKEN_WHATSAPP'
        ]);
    }
}
