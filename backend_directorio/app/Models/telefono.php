<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telefono extends Model
{
    use HasFactory;
    public function Contacto() {
        return $this->belongsTo(contacto::class);
    }
}
