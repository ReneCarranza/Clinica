<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = 'medicos';
    protected $fillable = ['nombre', 'apellido', 'especialidad', 'numero_colegiado'];

    public function citas()
    {
        return $this->hasMany(Cita::class);
    }
}
