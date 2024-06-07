<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacto extends Model {
    use HasFactory;
    public function Telefonos() {
        return $this->hasMany(telefono::class);
    }

    public function Correos() {
        return $this->hasMany(correo::class);
    }

    public function Direcciones() {
        return $this->hasMany(direccion::class);
    }
}