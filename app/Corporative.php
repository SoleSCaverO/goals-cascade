<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corporative extends Model
{
    protected $table = 'corporatives';
    public $timestamps = false;
    protected $fillable = ['name','perspective_id','benefit','risk','resource'];

    public function perspective()
    {
        return $this->belongsTo('App\Perspective');
    }

    public function its()
    {
        return $this->belongsToMany('App\It');
    }

    public function enterprises()
    {
        return $this->belongsToMany('App\Enterprise');
    }
}
