<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class It extends Model
{
    protected $table = 'its';
    public $timestamps = false;
    protected $fillable = ['name','perspective_id'];

    public function perspective()
    {
        return $this->belongsTo('App\Perspective');
    }

    public function corporatives()
    {
        return $this->belongsToMany('App\Corporative');
    }

    public function processes()
    {
        return $this->belongsToMany('App\Process');
    }
}
