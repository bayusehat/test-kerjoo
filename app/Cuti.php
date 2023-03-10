<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cuti extends Model
{
    use SoftDeletes;

    protected $table = 'cutis';
    protected $primaryKey = 'id_cuti';
    protected $hidden = [
        'created_at','updated_at'
    ];
    public $timestamps = true;

    public function userCuti()
    {
        return $this->belongsTo('App\User','id');
    }
}
