<?php

namespace Database\Seeders;

use App\Models\contacto;
use App\Models\correo;
use App\Models\direccion;
use App\Models\telefono;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Definir la cantidad de contactos que deseas crear
        $numberOfContacts = 100;

        // Bucle para crear y asociar contactos con sus números de teléfono, correos electrónicos y direcciones
        for ($i = 0; $i < $numberOfContacts; $i++) {
            // Crear un contacto
            $contact = contacto::create([
                'name' => 'Contacto ' . ($i + 1)
            ]);

            // Crear números de teléfono asociados al contacto
            for ($j = 0; $j < rand(1, 3); $j++) {
                $contact->Telefonos()->create([
                    'phone_number' => '123456789' . rand(0, 9)
                ]);
            }

            // Crear correos electrónicos asociados al contacto
            for ($j = 0; $j < rand(1, 2); $j++) {
                $contact->Correos()->create([
                    'email' => 'contacto' . ($i + 1) . '@example.com'
                ]);
            }

            // Crear direcciones asociadas al contacto
            $contact->Direcciones()->create([
                'direccion' => 'Calle ' . ($i + 1),
                'ciudad' => 'Ciudad',
                'estado' => 'Estado',
                'cp' => '12345'
            ]);
        }
    }
}
