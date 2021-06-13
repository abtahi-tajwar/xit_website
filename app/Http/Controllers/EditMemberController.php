<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
class EditMemberController extends Controller
{
    //
    function editmember(Request $req)
    {
        
        $member = Member::find($req->input('id'));
        //dd($member);
        $member->firstname = $req->input('member-firstname');
        $member->lastname = $req->input('member-lastname');
        $member->designation = $req->input('member-designation');
        $member->category = $req->input('member-category');
        $member->date = $req->input('member-date');
        $member->update(); 

        return redirect(route('admin-all-members'));
    }
    function editActiveStatus(Request $request) {
        $req = json_decode($request->getContent(), true);
        $member = Member::find($req['id']);       
        $member->current = intval($req['checked']);
        
        $log = $member->update();
        //$req = json_decode($request->getContent(), true);
        // $member = member::find($req['id']);
        // $member->active = $req['checked'];
        return $log;
    }
}
