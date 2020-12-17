<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = "artikel";
    protected $primaryKey = "id";
    protected $fillable = ["judul", "gambar", "isi"];
    public $timestamps = false;

 }

