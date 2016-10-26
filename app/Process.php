<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    protected $table = 'processes';
    public $timestamps = false;
    protected $fillable = ['code','name','category_id'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function perspective()
    {
        return $this->belongsTo('App\Perspective');
    }

    public function its()
    {
        return $this->belongsToMany('App\It');
    }
}
