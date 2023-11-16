<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;

use App\Models\home;
use App\Models\about;
use App\Models\service;
use App\Models\project;
use App\Models\blog;
use App\Models\contents;
use App\Models\testimonial;
use Illuminate\Http\Request;
use App\Models\map;

class FrontendController extends Controller
{
    
    public function home()
    {
        $home_banner = home::all();
        $home = home::all();
        $service = service::all();
        $blog = blog::all();
        $testimonial = testimonial::all();
        return view("frontend.index", ['home_banner'=>$home_banner,'home'=>$home, 'service'=>$service, 'blog'=>$blog, 'testimonial'=>$testimonial ]);

    }
    public function about()
    {
        $about = about::all();
        $testimonial = testimonial::all();

        return view('frontend.about', ['about'=>$about, 'testimonial'=>$testimonial]);

    }

    public function service()
    {
        $id = 1;
        $service = service::all();
        $service_cont = contents::find($id);
        return view('frontend.service', ['service'=> $service,'service_cont'=>$service_cont]);

    }
    
    public function service_details(string $id)
    {
        
        $service=service::find($id);
        $service_all = service::all();
        if($service !== null){
            return view('frontend.service_detail', ['service'=> $service, 'service_all'=>$service_all]);

        }
        else{
            return redirect('/');
        }

    }

    public function project()
    {
        $id = 2;
        $project_cont = contents::find($id);
        $project = project::all();
        return view('frontend.projects', ['project'=>$project,'project_cont'=>$project_cont ]);

    }

    public function project_details(string $id)
    {
        $project=project::find($id);
        $service_all = service::all();
        if($project !== null){
            return view('frontend.project_detail', ['project'=> $project, 'service_all'=>$service_all]);

        }
        else{
            return redirect('/');

        }

    }

    public function blog()
    {
        $id = 3;
        $blog_cont = contents::find($id);
        $blog = blog::all();
        return view('frontend.blog', ['blog'=>$blog, 'blog_cont'=>$blog_cont]);

    }

    public function blog_details(string $id)
    {
        $blog_details=blog::find($id);
        $service_all = service::all();
        if($blog_details !== null){
            return view('frontend.project_detail', ['project'=> $blog_details, 'service_all'=>$service_all]);

        }
        else{
            return redirect('/');
        }

    }

    public function text(Request $request)
    {
        $ad= request("text");
        echo $ad;
    }
    public function  contact(){
        $map = map::find($id=1);
        return view('frontend.contact',['map'=>$map]);

    }
}