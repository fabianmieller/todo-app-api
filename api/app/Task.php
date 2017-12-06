<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	protected $fillable = ['title', 'checked'];

	public function categories()
	{
		return $this->belongsToMany('App\Category');
	}
}
