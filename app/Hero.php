<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    public function hero()
    {

        return $this->hasMany('App\Image', 'hero_image');
    }

}
