<?php

namespace App\Http\Controllers;
use PDOException;
use Illuminate\Http\Request;
use App\Models\social;
use App\Models\logo;
use App\Models\menu;
use App\Models\mmenu;
use App\Models\service;
class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function social()
    {
        $admin_social = social::all();
        return view('admin.settings.social_media',['admin_social'=>$admin_social]);
    }
    public function social_view()
    {
        return view('admin.settings.social_media_add');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function social_store(Request $request)
    {
        $admin_social = new social();
        $admin_social->icon = request("icon");
        $admin_social->link = request("link");
        if (isset($_POST["status"])) {
            $admin_social->status = true;
        } else {
            $admin_social->status = false;
        }

        $admin_social->save();
        return redirect('/admin/social');
    }
    public function social_edit(string $id)
    {
        $admin_social =  social::find($id);
        return view('admin.settings.social_media_edit',['admin_social'=>$admin_social]);


    }

    public function social_update(Request $request, string $id)
    {
        $admin_social = social::find($id);
        $admin_social->icon = request("icon");
        $admin_social->link = request("link");
        if (isset($_POST["status"])) {
            $admin_social->status = true;
        } else {
            $admin_social->status = false;
        }
        $admin_social->save();
        return redirect('/admin/social');
    }

    public function icon()
    {
        $id=1;
        $admin_icon =  logo::find($id);

        return view('admin.settings.icon', ['admin_icon'=>$admin_icon]);
    }

    public function icon_update(Request $request, string $id)
    {
        $admin_logo = logo::find($id);
        if ($request->file('fav')) {
            $image = $request->file('fav');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $admin_logo -> fav = '/images/'.$imageName;
        }
        if ($request->file('logo_head')) {
            $image = $request->file('logo_head');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $admin_logo -> img_head = '/images/'.$imageName;
        }
        if ($request->file('logo_foot')) {
            $image = $request->file('logo_foot');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $admin_logo -> img_footer = '/images/'.$imageName;
        }
        $admin_logo->save();
        return redirect('/admin/icon');
    }
    /**
     * Store a newly created resource in storage.
     */

     public function menu()
    {
        $admin_menu = menu::all();
            return view('admin.settings.menu', ['admin_menu'=>$admin_menu]);
    }

    public function menu_add()
    {
        

        return view('admin.settings.menu_add');

    }


    public function menu_store(Request $request)
    {
        try {
            $drops = new menu();
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
            $mmenus = mmenu::all(['id', 'm_id']);
            $item1 = $mmenus[6];
            if($item1->id == 7){
                $mmenus = new mmenu();
                $mmenus->id = 8;
                $mmenus->m_id = 8;
                $mmenus->name = request("name");
                $mmenus->menus = request("name");
                $mmenus->save();
            }
            else{
                $mmenus = new mmenu();
                $mmenus->id = 7;
                $mmenus->m_id = 7;
                $mmenus->name = request("name");
                $mmenus->menus = request("name");
                $mmenus->save();
            }
            $drops->save();
            return redirect('/admin/menu');
        
        } catch (PDOException $e) {
            if ($e->errorInfo[1] == 1406) {
                // Handle the error here, e.g., by truncating the content or displaying an error message to the user.
                echo  '<script>
                alert("Data is too long");
                window.history.back();
            </script>';
            } else {
                // Handle other database errors or log them for debugging.
                return redirect('/admin/menu');
    
            }
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function menu_edit(string $id)
    {
        $data = menu::find($id);
        return view('admin.settings.menu_edit',['data'=>$data]);
    }
    public function menu_update(Request $request, string $id)
    {
        try {
            $drops =  menu::find($id);
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
            
            $mmenus = mmenu::all(['id', 'name','menus']);
            $val = menu::find($id);
            foreach($mmenus  as $item){
                if($item->name == $val->name){
                    $men = mmenu::find($item->id);
                    $men->name = request("name");
                    $men->save();
                }
                if($item->menus == $val->name){
                    $men = mmenu::find($item->id);
                    $men->menus = request("name");
                    $men->save();
                }
             }
            
            $drops->save();
            return redirect('/admin/menu');
        
        } catch (PDOException $e) {
            if ($e->errorInfo[1] == 1406) {
                // Handle the error here, e.g., by truncating the content or displaying an error message to the user.
                echo  '<script>
                alert("Data is too long");
                window.history.back();
            </script>';
            } else {
                // Handle other database errors or log them for debugging.
                return redirect('/admin/menu');
    
            }
        }
    }

    public function menu_destroy(string $id)
    {
        $menu= menu::find($id);
        $mmenu = mmenu::all(['menus', 'id']);
        
        foreach($mmenu as $men ){
            if($men->menus == $menu->name){
                $mmen = mmenu::find($men->id);
                echo $mmen;
                $mmen->delete();
            }
        }
        $menu->delete();
        return redirect('/admin/menu');
    }
     public function social_destroy(string $id)
    {
        $social= social::find($id);
        $social->delete();
        return redirect('/admin/social');
    }
    
    public function menu_view(string $id)
    {
        $drops =  menu::find($id);
        $service = service::all();
        // return view('frontend.common',['drops'=>$drops, 'service_all'=>$service]);
  if($drops !== null){
            return view('frontend.menu_content',['service'=>$drops, 'service_all'=>$service]);

        }
        else{
            return redirect('/');
        }


    }

    public function menu_change(Request $request, string $id)
    {
        $menu =  mmenu::find($id);
        $menu1 = mmenu::all(['menus', 'id']);
        $menu->name = request("position");
        if(request("position") == 'Home'){
            $menu->m_id = 1;
        }
        elseif(request("position") == 'About'){
            $menu->m_id = 2;
        }
        elseif(request("position") == 'Service'){
            $menu->m_id = 3;
        }
        elseif(request("position") == 'Projects'){
            $menu->m_id = 4;
        }
        elseif(request("position") == 'Blog'){
            $menu->m_id = 5;
        }
        elseif(request("position") == 'Contact'){
            $menu->m_id = 6;
        }
        
        elseif(request("position") == 'Disable'){
            $menu->m_id = 9;
        }
        foreach($menu1 as $men ){
            if(request("position") == $men->menus){
                $menu->m_id = $men->id;
            }
        }
        $menu->save();
        return redirect('/admin/dropdown');





    }
    
}
