<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteInfoController extends Controller
{
    //
    function init()
    {
        $data = Data::getWebsiteInfo();
        return view('admin.websiteinfo', ['data' => $data]);
    }
    function updateWebsiteInfo(Request $req)
    {
        $data = array();
        $data['name'] = $req->input('website-name');
        $data['services'] = [];
        for($i = 0; $i < count($req->input('project-services-title')); $i++) {
            if($req->input('project-services-title')[$i] !== null && $req->input('project-services-subtitle')[$i] !== null) {
                array_push($data['services'], [$req->input('project-services-title')[$i], $req->input('project-services-subtitle')[$i]]);
            }            
        }
        $data['about'] = $req->input('website-about');
        $data['about_services'] = [];
        foreach($req->input('about-services') as $service)
        {
            if($service !== null) {
                array_push($data['about_services'], $service);
            }            
        }
        $data['service_measure'] = [
            "web_development" => $req->input('web_development_skill'),
            "android_application" => $req->input('android_application_skill'),
            "web_design" => $req->input('web_design_skill')
        ];
        $data['contact'] = [
            "phone" => [],
            "time" => $req->input('available-time'),
            "email" => $req->input('website-email'),
            "web" => $req->input('website-address'),
            "location" => $req->input('company-location'),
            "social_media" => [
                "facebook" => $req->input('facebook')
            ]
        ];
        foreach($req->input('phone-numbers') as $phone) {
            if($phone !== null) {
                array_push($data['contact']['phone'], $phone);
            }            
        }
        Data::updateWebsiteInfo($data);
        return redirect()->route('admin-website-info');
    }
}
