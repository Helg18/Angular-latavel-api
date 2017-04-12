<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libros extends Model
{
	protected $table = 'libros';
 
    protected $fillable = ['author', 'name', 'description', 'price'];
 
    protected $guarded = ['id'];
}
