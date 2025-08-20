<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model {
    protected $table = 'banners';
    protected $fillable = [
        'banner_home_desktop', 
        'banner_home_mobile',
        'banner_sobre_desktop',
        'banner_sobre_mobile',
        'banner_servicos_desktop',
        'banner_servicos_mobile',
        'banner_contato_desktop',
        'banner_contato_mobile',
    ];
    public $timestamps = false;
}