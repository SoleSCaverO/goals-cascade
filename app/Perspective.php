<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perspective extends Model
{
    protected $table = 'perspectives';
    public $timestamps = false;
    protected $fillable = ['name'];

    public function enterprises()
    {
        $this->hasMany('App\Enterprise');
    }

    public function corporatives()
    {
        return $this->hasMany('App\Corporative');
    }

    public function its()
    {
        return $this->hasMany('App\It');
    }
}
