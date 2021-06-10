<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Sidebar;

class AdminFooter extends Controller
{
    //
    public static function init()
    {
        return view('admin.footer', [
            'dashboard' => Sidebar::$dashboard,
            'projects' => Sidebar::$projects,
            'members' => Sidebar::$members,
            'website_info' => Sidebar::$website_info,
            'projects_submenu' => Sidebar::$projects_submenu,
            'members_submenu' => Sidebar::$members_submenu
        ]);
    }
}
