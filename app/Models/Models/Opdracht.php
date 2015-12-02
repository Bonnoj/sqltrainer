<?php

namespace Models\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Opdracht extends Eloquent
{
    protected $fillable = array('beschrijving', 'antwoord');
    protected $table = 'opdrachten';

}