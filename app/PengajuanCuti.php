<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PengajuanCuti extends Model
{
    use SoftDeletes;

    protected $table = 'pengajuan_cutis';
    protected $primaryKey = 'id_pengajuan_cuti';
    protected $hidden = [
        'created_at','updated_at'
    ];
    public $timestamps = true;

    /**
     * Get the user that owns the Cuti
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'id', 'id_user');
    }
}
