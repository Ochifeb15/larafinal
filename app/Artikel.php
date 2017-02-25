<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
   protected $table = 'artikel';
   protected $primarykey = 'id';
    protected $fillable = ['judul_artikel', 'isi_artikel'];
    public $timestamps = true;//
}
