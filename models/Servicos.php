<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Servicos extends Model {
    protected $table = 'servicos';
    protected $fillable = [
        'texto',
        'imagem'
    ];
    public $timestamps = false;
}