<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    protected $fillable = ['name', 'image'];
    public function politician() {
        return $this->hasMany('App\Politician');
    }
}
