<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;
use PDOException;
class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin_about = about::find($id = 2);
        return view('admin.about_add',['admin_about'=>$admin_about]);
    }

    public function update(Request $request, string $id)
    {
        try {
            $about = about::find($id);
            if ($request->file('banner')) {
                $image = $request->file('banner');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);

                // You can also store the image path in your database if needed
                $about -> img = '/images/'.$imageName;
            }
            $about->heading = request("heading");
            $about->discription = request("discription");

            if ($request->file('image')) {
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);

                // You can also store the image path in your database if needed
                $about -> image = '/images/'.$imageName;
            }
            $about->contents = request("contents");
            $about->save();
            return redirect('/admin/dashboard');
        } catch (PDOException ) {
           
    
            echo "Somthing Wrong";
            
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
