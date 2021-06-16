<?php

namespace App\Http\Controllers;
use DateTime;

use Illuminate\Http\Request;
use App\Member;
class EditMemberController extends Controller
{
    function init($id)
    {
        $member = Member::find($id);
        return view('admin.editmember', ['member' => $member]);
    }
    //
    function editmember(Request $req)
    {
        
        $member = Member::find($req->input('id'));
        //dd($req->input('member-firstname'));
        $member->firstname = $req->input('member-firstname');
        $member->lastname = $req->input('member-lastname');
        $member->designation = $req->input('member-designation');
        $member->facebook = $req->input('member-facebook');

        if($req->file('member_image') !== null) {
            $date = new DateTime();
            $member_image = $date->getTimestamp().'-'.$req->file('member_image')->getClientOriginalName();
            $req->file('member_image')->move(public_path('../images/members'), $member_image);
            $member->image = $member_image;
        }        

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
