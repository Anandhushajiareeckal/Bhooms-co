<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contents;
use PDOException;
class ContentsController extends Controller
{
    public function service_view()
    {
        $id= 1;
        $service_content = contents::find($id);
        return view('admin.service_content', ['service_content'=>$service_content]);
    }
    public function service_update(Request $request)
    {
        try {
            $id= 1;
            $service = contents::find($id);
            if ($request->file('banner')) {
                $image = $request->file('banner');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);

                // You can also store the image path in your database if needed
                $service -> banner = '/images/'.$imageName;
            }
            $service->contents = request("contents");
            $service->save();
            return redirect('/admin/service');
        } catch (PDOException ) {
           
    
            echo "Somthing Wrong";
            
        }
    }

    public function project_view()
    {
        $id= 2;
        $project_content = contents::find($id);
        return view('admin.project_content', ['project_content'=>$project_content]);
    }
    public function project_update(Request $request)
    {
        try {
            $id= 2;
            $service = contents::find($id);
            if ($request->file('banner')) {
                $image = $request->file('banner');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);

                // You can also store the image path in your database if needed
                $service -> banner = '/images/'.$imageName;
            }
            $service->contents = request("contents");
            $service->save();
            return redirect('/admin/project');
        } catch (PDOException ) {
           
    
            echo "Somthing Wrong";
            
        }
    }

    public function blog_view()
    {
        $id= 3;
        $blog_content = contents::find($id);
        return view('admin.blog_content', ['blog_content'=>$blog_content]);
    }
    public function blog_update(Request $request)
    {
        try {
            $id= 3;
            $blog = contents::find($id);
            if ($request->file('banner')) {
                $image = $request->file('banner');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);

                // You can also store the image path in your database if needed
                $blog -> banner = '/images/'.$imageName;
            }
            $blog->contents = request("contents");
            $blog->save();
            return redirect('/admin/blog');
        } catch (PDOException ) {
           
    
            echo "Somthing Wrong";
            
        }
    }
}
