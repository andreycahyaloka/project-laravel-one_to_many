<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
	protected $dates = ['created_at', 'updated_at'];

	protected $table = 'categories';

	protected $fillable = [
		'name',
	];

	protected $hidden = [
		// 
	];

	protected $guarded = [
		'created_at', 'updated_at',
	];

	// 
	public function posts() {
		return $this->HasMany('App\Post', 'category_id', 'id');
	}
}
