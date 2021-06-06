<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Data;

class SingleProject extends Controller
{
    //
    function initSinglePage()
    {
        $data = Data::fetchJSONData('info.json');
        $faq = Data::fetchFaq();
        return view('single-project', ['data' => $data, 'faq' => $faq]);
    }
}
