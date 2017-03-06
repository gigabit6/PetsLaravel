<?php
namespace App\Entities;

use Eloquent;

class Comment extends Eloquent{
	protected $table = 'pet_comment';

	public function product()
	{
		return $this->belongsTo('App\Entities\Pet');
	}
}