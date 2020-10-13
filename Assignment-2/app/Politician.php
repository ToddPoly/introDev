<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Politician extends Model
{
    protected $fillable = ['name', 'gender', 'rank', 'electorate', 'image', 'party_id'];
    public function party() {
        return $this->belongsTo('App\Party');
    }
}
