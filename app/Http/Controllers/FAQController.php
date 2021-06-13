<?php

namespace App\Http\Controllers;
use App\FAQ;

use Illuminate\Http\Request;

class FAQController extends Controller
{
    //
    function init($id)
    {
        $faqs = null;
        if(intval($id) !== 0) {
            $faqs = FAQ::where('project_id', $id)->get();
        }
        return view('admin.faq', ['id' => intval($id), 'faqs' => $faqs]);
    }
    function addFAQ(Request $req)
    {
        $faq = new FAQ();
        $faq->question = $req->input('faq_question');
        $faq->answer = $req->input('faq_answer');
        $faq->project_id = $req->input('faq_id');
        $faq->save();

        $faqs = FAQ::where('project_id', $req->input('faq_id'))->get();
        return view('admin.faq', ['id' => $req->input('faq_id'), 'faqs' => $faqs]);
    }
}
