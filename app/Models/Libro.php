<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = "libro";
    protected $fillable = ['titulo','isbn','autor','cantidad','editoria','foto'];
    protected $guarded = ['id'];
}
