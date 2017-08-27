<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationInformation extends Model
{
    //

    protected $fillable = ['series_id','team_id'];

    //Excluded Attributes

    protected $hidden = [];

    public $timestamps = null;

    protected $table = 'education_information';
}
