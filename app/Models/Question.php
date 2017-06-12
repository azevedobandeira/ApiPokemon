<?php

namespace SON\Models;


use HipsterJazzbo\Landlord\BelongsToTenants;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Question extends Model implements Transformable
{
    use TransformableTrait;
    use BelongsToTenants;

    protected $fillable = [
        'name'
    ];

    public function category(){
        return $this->belongsTo(Language::class);
    }

}
