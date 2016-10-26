<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    protected $table = 'enterprises';
    public $timestamps = false;
    protected $fillable = ['name','perspective_id','aligned','user_id'];

    public function perspective()
    {
        return $this->belongsTo('App\Perspective');
    }

    public function corporatives()
    {
        return $this->belongsToMany('App\Corporative');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
