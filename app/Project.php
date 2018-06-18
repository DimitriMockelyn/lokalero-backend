<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	public function location() {
		return $this->belongsTo(Location::class);
	}
	public function equivalences() {
		return $this->hasMany(Equivalence::class);
	}
}
