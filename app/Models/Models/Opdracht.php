<?php

namespace Models\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Opdracht extends Eloquent
{
	public function getOpdracht()
	{
		return $this->beschrijving;
	}
}