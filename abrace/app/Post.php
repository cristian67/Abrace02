<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = 'posts';


    protected $fillable = ['nosotros', 'empresa', 'empresa_uno', 'empresa_dos', 'servicios'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
