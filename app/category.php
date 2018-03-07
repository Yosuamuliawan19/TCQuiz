<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class category extends Model
{
    public $timestamps = false;
    protected $table = 'categories';
   	protected $fillable = ['id' , 'name'];
	public function items()
    {
        return $this->hasMany('App\item');
    }
   
}
