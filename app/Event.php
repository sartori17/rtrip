<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;
    protected $fillable = ['title','start_date','end_date','user','kids_under_two','kids_under_six','adults','bags','comments'];
}
