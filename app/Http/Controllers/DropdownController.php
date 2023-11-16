<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\drops;
use App\Models\service;
use App\Models\mmenu;
class DropdownController extends Controller
{
    public function open(string $id)
    {
        $data = drops::where('hed_id', $id)->get();
        return view('admin.dropdown_add',['data'=>$data, 'id'=>$id]);
    }

    public function store(Request $request, string $id)
    {
        $drops = new drops();
        $drops->hed_id = $id;
        $drops->name = request("name");
        if ($request->file('banner_image')) {
            $banner_image = $request->file('banner_image');
            $imageName = time().'.'.$banner_image->getClientOriginalExtension();
            $banner_image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $drops -> banner_img = '/images/'.$imageName;
        }
        $drops->banner_hed = request("banner_heading");
        $drops->heading = request("heading");
        $drops->content = request("content");

        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $drops -> image = '/images/'.$imageName;
        }
        $drops->save();
        return redirect('/admin/drop-down/'.$id);
    }
    public function add(string $id)
    {
        $data = drops::where('hed_id', $id)->get();
        return view('admin.dropdown_add',['data'=>$data, 'id'=>$id]);
    }

    public function show(string $id)
    {
        $data = drops::where('hed_id', $id)->get();
        return view('admin.dropdown_content',['id'=>$id]);
    }

    public function view(string $id)
    {
        $data = drops::find($id);
        return view('admin.dropdown_edit',['data'=>$data]);
    }
    public function update(Request $request, string $id)
    {
        $drops = drops::find($id);
        $drops->name = request("name");
        if ($request->file('banner_image')) {
            $banner_image = $request->file('banner_image');
            $imageName = time().'.'.$banner_image->getClientOriginalExtension();
            $banner_image->move(public_path('banner_image'), $imageName);

            // You can also store the image path in your database if needed
             $drops -> banner_img = '/images/'.$imageName;
        }
        $drops->banner_hed = request("banner_heading");
        $drops->heading = request("heading");
        $drops->content = request("content");

        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $drops -> image = '/images/'.$imageName;
        }
        $drops->save();
        return redirect('/admin/dropdown');
    }
    public function common(string $id)
    {
        $drops = drops::find($id);
        $service_all = service::all();
        return view('frontend.common',['drops'=>$drops, 'service_all'=>$service_all]);
    }

    public function distroy(string $id)
    {
        $drops = drops::find($id);
        $drops->delete();
        return redirect('/admin/dropdown');
    }

    public function mmenu()
    {
        $menu = mmenu::all();
        return view('admin.dropdown',['menu'=>$menu]);
    }
}
