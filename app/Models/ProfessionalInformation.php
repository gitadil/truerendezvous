<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfessionalInformation extends Model
{
    //

    protected $guarded = ['user_id'];

    //Excluded Attributes

    protected $hidden  = [];

    public $timestamps = null;

    protected $table   = 'professional_information';
}
