<?php

namespace SON\Models;



use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Pokemons extends Model implements Transformable
{
    use TransformableTrait;


    protected $fillable = [
        'name',
        'tipo',
        'poderatack',
        'poderdefesa',
        'agilidade',

];


}
