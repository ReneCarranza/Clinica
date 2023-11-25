<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'pacientes';
    protected $fillable = ['nombre', 'apellido', 'direccion','sexo', 'fecha_nacimiento', 'alergias', 'tipo_sangre'];

    public function citas()
    {
        return $this->hasMany(Cita::class);
    }
}
