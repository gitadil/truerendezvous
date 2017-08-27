<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    //

    protected $guarded = ['user_id'];

    //Excluded Attributes

    protected $hidden = [];

    public $timestamps = null;

    protected $table = 'personal_information';
}
