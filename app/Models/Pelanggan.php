<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table      = 'pelanggan';
    protected $primaryKey = 'pelanggan_id';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable   = [
        'first_name',
        'last_name',
        'birthday',
        'gender',
        'email',
        'phone',
    ];
}
