<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Gigs extends Model
{
    //
    protected $guarded = [];

    public function getCreatedAtAttribute($value)
    {
        $dt = Carbon::createFromDate($value);

        return $dt->diffForHumans();
    }
}
