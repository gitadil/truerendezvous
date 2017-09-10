<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartnerInformation extends Model
{
    //

   // protected $fillable = ['series_id','team_id'];

    //Excluded Attributes

    protected $hidden = [];

    public $timestamps = null;

    protected $table = 'partner_information';
}
