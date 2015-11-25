<?php

namespace Models\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Post extends Eloquent
{
	public function getPost()
	{
		if (empty($this->first_name) || empty($this->last_name)) {
			return $this->username;
		}

		return "{$this->first_name} {$this->last_name}";
	}

}