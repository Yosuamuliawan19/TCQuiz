<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
	public $timestamps = false;
    protected $table = 'item';
   	protected $fillable = ['id' , 'category_id', 'name' , 'price' , 'stock'];
}