<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Protocolo extends Model
{
    protected $table = "protocolos";

    protected $fillable = ['titulo', 'objetivo_pro', 'descripcion', 'requerimientos', 'recursos'];
}
