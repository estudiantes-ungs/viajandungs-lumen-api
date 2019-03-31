<?php

use Illuminate\Database\Seeder;
use App\Viaje;

class ViajeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Viaje::create([
            'name' => 'JAIIO 48 2019',
            'destination' => 'Salta',
            'career' => 'Sistemas',
            'shortDescription' => 'Jornadas argentinas de informatica',
            'description' => '48° edicion de las Jornadas argentinas de informatica en la UNSAL (Salta) 2019.',
            'eventUrl' => 'http://48jaiio.sadio.org.ar/'
        ]);
    }
}
