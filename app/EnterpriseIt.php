<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnterpriseIt extends Model
{
    protected $table = 'enterprise_its';
    public $timestamps = false;
    protected $fillable = ['name','perspective_id','it_id','user_id'];

    public function perspective()
    {
        return $this->belongsTo('App\Perspective');
    }

    public function it()
    {
        return $this->belongsTo('App\It');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
