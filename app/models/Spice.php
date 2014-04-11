<?php

class Spice extends \Eloquent {
	protected $fillable = ['upc', 'name', 'manufacturer'];

	public function users()
	{
		return $this->belongsToMany('User')->withPivot('expiration', 'amount');
	}
}