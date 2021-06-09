<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="img/favicon.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('/vendor/iconly/bold.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/layout.css') }}">
    <title>Document</title>
</head>
<body>
    <?php
        $url_prefix = "http://localhost/xit_website/";
        $dashboard = $projects = $members = $website_info = ""; 
        $projects_submenu = array(
            'all-projects' => "",
            'create-projects' => "",
            'featured-images' => "",
            'slideshows' => "",
            'videos' => "",
            'faqs' => ""
        );
        $members_submenu = array(
            "all-members" => "",
            "add-members" => "",
            "change-rolls" => ""
        );
        if(strpos(url()->current(), '/admin/dashboard')) {
            $dashboard = 'active';
        } else if(strpos(url()->current(), '/admin/projects')) {
            $projects = 'active';
            if(strpos(url()->current(), '/all')) {
                $projects_submenu['all-projects'] = 'active';
            } 
            if(strpos(url()->current(), '/create')) {
                $projects_submenu['create-projects'] = 'active';
            }  
            if(strpos(url()->current(), '/images')) {
                $projects_submenu['featured-images'] = 'active';
            }
            if(strpos(url()->current(), '/slideshows')) {
                $projects_submenu['slideshows'] = 'active';
            }
            if(strpos(url()->current(), '/videos')) {
                $projects_submenu['videos'] = 'active';
            }
            if(strpos(url()->current(), '/faqs')) {
                $projects_submenu['faqs'] = 'active';
            }
        } else if(strpos(url()->current(), '/admin/members')) {
            $members = 'active';
            if(strpos(url()->current(), '/all')) {
                $members_submenu['all-members'] = 'active';
            }  
            if(strpos(url()->current(), '/add')) {
                $members_submenu['add-members'] = 'active';
            }
            if(strpos(url()->current(), '/rolls')) {
                $members_submenu['change-rolls'] = 'active';
            }
        } else if(strpos(url()->current(), '/admin/info')) {
            $website_info = "active";
        }
        
          
    ?>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="/xit_website/">XIT Bangladesh</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item {{$dashboard}}">
                            <a href="{{route('admin-dashboard')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Projects</span>
                            </a>
                            <ul class="submenu {{$projects}}">
                                <li class="submenu-item {{ $projects_submenu['all-projects'] }}">
                                    <a href="component-alert.html">All Projects</a>
                                </li>
                                <li class="submenu-item {{ $projects_submenu['create-projects'] }}">
                                    <a href="{{ route('admin-create-project') }}">Create Projects</a>
                                </li>
                                <li class="submenu-item {{ $projects_submenu['featured-images'] }}">
                                    <a href="component-breadcrumb.html">Featured Images</a>
                                </li>
                                <li class="submenu-item {{ $projects_submenu['slideshows'] }}">
                                    <a href="component-button.html">Slideshows</a>
                                </li>
                                <li class="submenu-item {{ $projects_submenu['videos'] }}">
                                    <a href="component-card.html">Videos</a>
                                </li>
                                <li class="submenu-item {{ $projects_submenu['faqs'] }}">
                                    <a href="component-carousel.html">FAQs</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Members</span>
                            </a>
                            <ul class="submenu {{ $members }}">
                                <li class="submenu-item {{ $members_submenu['all-members'] }}">
                                    <a href="extra-component-avatar.html">All Members</a>
                                </li>
                                <li class="submenu-item {{ $members_submenu['add-members'] }}">
                                    <a href="extra-component-sweetalert.html">Add Member</a>
                                </li>
                                <li class="submenu-item {{ $members_submenu['change-rolls'] }}">
                                    <a href="extra-component-toastify.html">Change Roll</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item {{ $website_info }}">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Website info</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
    
        

    