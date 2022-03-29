<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = 'profils';
    protected $fillable = [
        'nik',
    	'nama'
    ];
    protected $primaryKey = 'id';

}
