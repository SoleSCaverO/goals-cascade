<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CorporativeEnterprise extends Model
{
    protected $table = 'corporative_enterprise';
    public $timestamps = false;
    protected $fillable = ['corporative_id','enterprise_id','aligned_goal'];

    public function corporative()
    {
        return $this->belongsTo('App\Corporative');
    }
    public function enterprise()
    {
        return $this->belongsTo('App\Enterprise');
    }

}
