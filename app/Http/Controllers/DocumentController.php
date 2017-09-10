<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\Models\Document;


class DocumentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    Public static function store($params = '')
    {
        $document = new Document;

        $document->title         = (!empty($params->title)) ? $params->title : '';
        $document->document_type = (!empty($params->document_type)) ? $params->document_type : '';
        $document->document_guid = (!empty($params->document_guid)) ? $params->document_guid : '';
        $document->user_id       = (!empty($params->user_id)) ? $params->user_id : '';
        $document->path          = (!empty($params->path)) ? $params->path : '';
        $document->save();

        return $document->id;
    }

}
