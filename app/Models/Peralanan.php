<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peralanan extends Model
{
    protected $table = 'peralanans';
    protected $fillable = [
        'tgl_perjalanan',
    	'jam',
        'lokasi',
        'suhu_tubuh',
        'id_user'
    ];
    protected $primaryKey = 'id';

    public function User()
    {
        return $this->belongTo('App\User');
    }
}
