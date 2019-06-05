<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title','start_date','end_date','user','kids_under_two','kids_under_six','adults','bags','comments'];
}
