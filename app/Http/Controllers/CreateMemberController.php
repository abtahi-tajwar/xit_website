<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use DateTime;
class CreateMemberController extends Controller
{
    //
    function init()
    {
        return view('admin.createmember');
    }
    function addMember(Request $req)
    {
        $member = new Member;
        $member->firstname = $req->input('member-firstname');
        $member->lastname = $req->input('member-lastname');
        $member->designation = $req->input('member-designation');
        $member->facebook = $req->input('member-facebook');

        $date = new DateTime();
        $member_image = $date->getTimestamp().'-'.$req->file('member_image')->getClientOriginalName();
        $req->file('member_image')->move(public_path('../images/members'), $member_image);

        $member->image = $member_image;

        $member->save();

        return redirect()->route('admin-create-member');
    }
}
