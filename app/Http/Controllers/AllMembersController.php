<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Member;

class AllMembersController extends Controller
{
    //
    function init()
    {
        $members = Member::all();
        return view('admin.allmembers', ['members' => $members]);
    }
    function deleteMember($id)
    {
        Member::where('id', $id)->delete();
        return redirect(route('admin-all-members'));
    }
    static function searchMembers($title) {
        $members = Data::searchData('members', 'title', $title);
        return $members;
    }
    function asyncSearchProject(Request $request)
    {
        $req = json_decode($request->getContent(), true);
        $members = AllMembersController::searchMembers($req['title']);
        return json_encode($members);
    }
}
