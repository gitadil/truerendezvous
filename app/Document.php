<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    //

    protected $guarded = ['user_id','document_guid'];


    //Excluded Attributes

    protected $hidden = [];

    public $timestamps = null;

    protected $table = 'documents';
}
