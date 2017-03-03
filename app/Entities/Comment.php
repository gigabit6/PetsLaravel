<?php
namespace App\Entities;

use Eloquent;

class Comment extends Eloquent{
	protected $table = 'comments';

	public function product()
	{
		return $this->belongsTo('App\Entities\Pet');
	}
}