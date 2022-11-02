<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignUp extends Model
{
    use HasFactory;

    protected $fillable=['name','ssc_roll','ssc_reg','ssc_gpa', 'ssc_passing_year','ssc_group', 'hsc_roll', 'hsc_reg', 'hsc_gpa', 'hsc_passing_year','hsc_group'];
}
