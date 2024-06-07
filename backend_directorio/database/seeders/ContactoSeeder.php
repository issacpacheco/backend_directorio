<?php

namespace Database\Seeders;

use App\Models\contacto;
use App\Models\correo;
use App\Models\direccion;
use App\Models\telefono;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        contacto::factory(5000)->create()->each(function ($contact) {
            $contact->phones()->saveMany(telefono::factory(rand(1, 3))->make());
            $contact->emails()->saveMany(correo::factory(rand(1, 3))->make());
            $contact->addresses()->saveMany(direccion::factory(rand(1, 3))->make());
        });
    }
}
