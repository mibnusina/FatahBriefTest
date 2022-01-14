<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'tabel_paket';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
