<?php

namespace SON\Models;


use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Language extends Model implements Transformable
{
    use TransformableTrait;


    protected $fillable = [
        'choes',
        'votes',
        'question_id'
    ];


}
