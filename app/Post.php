<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
	protected $dates = ['created_at', 'updated_at'];

	protected $table = 'posts';

	protected $fillable = [
		'title', 'body', 'category_id',
	];

	protected $hidden = [
		'category_id',
	];

	protected $guarded = [
		'created_at', 'updated_at',
	];

	// 
	public function categories() {
		return $this->belongsTo('App\Category', 'category_id', 'id');
	}
}
