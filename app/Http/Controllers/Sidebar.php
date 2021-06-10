<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sidebar extends Controller
{
    //
    public static $dashboard = "";
    public static $projects = "";
    public static $members = "";
    public static $website_info = ""; 

    public static $projects_submenu = array(
        'all-projects' => "",
        'create-projects' => "",
        'edit-project' => "",
        'featured-images' => "",
        'slideshows' => "",
        'videos' => "",
        'faqs' => ""
    );
    public static $members_submenu = array(
        "all-members" => "",
        "add-members" => "",
        "change-rolls" => ""
    );
    static function init()
    {        
        if(strpos(url()->current(), '/admin/dashboard')) {
            Sidebar::$dashboard = 'active';
        } else if(strpos(url()->current(), '/admin/projects')) {
            Sidebar::$projects = 'active';
            if(strpos(url()->current(), '/all')) {
                Sidebar::$projects_submenu['all-projects'] = 'active';
            } 
            if(strpos(url()->current(), '/create')) {
                Sidebar::$projects_submenu['create-projects'] = 'active';
            }  
            if(strpos(url()->current(), '/edit')) {
                Sidebar::$projects_submenu['edit-project'] = 'active';
            }
            if(strpos(url()->current(), '/images')) {
                Sidebar::$projects_submenu['featured-images'] = 'active';
            }
            if(strpos(url()->current(), '/slideshows')) {
                Sidebar::$projects_submenu['slideshows'] = 'active';
            }
            if(strpos(url()->current(), '/videos')) {
                Sidebar::$projects_submenu['videos'] = 'active';
            }
            if(strpos(url()->current(), '/faqs')) {
                Sidebar::$projects_submenu['faqs'] = 'active';
            }
        } else if(strpos(url()->current(), '/admin/members')) {
            Sidebar::$members = 'active';
            if(strpos(url()->current(), '/all')) {
                Sidebar::$members_submenu['all-members'] = 'active';
            }  
            if(strpos(url()->current(), '/add')) {
                Sidebar::$members_submenu['add-members'] = 'active';
            }
            if(strpos(url()->current(), '/rolls')) {
                Sidebar::$members_submenu['change-rolls'] = 'active';
            }
        } else if(strpos(url()->current(), '/admin/info')) {
            Sidebar::$website_info = "active";
        }
        return view('admin.sidebar', [
            'dashboard' => Sidebar::$dashboard,
            'projects' => Sidebar::$projects,
            'members' => Sidebar::$members,
            'website_info' => Sidebar::$website_info,
            'projects_submenu' => Sidebar::$projects_submenu,
            'members_submenu' => Sidebar::$members_submenu
        ]);
    }
}
