<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data extends Model{
	protected $table = 'login4';
	protected $fillable = ['name','email','pincode'];
}
?>