<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name', 'email', 'staff_id', 'days_present', 'days_early', 'days_late', 'date'];
}
