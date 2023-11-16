<?php

namespace App\Http\Controllers;
use App\Mail\EnquiryMail;
use Illuminate\Http\Request;
use App\Models\contact;
use App\Models\map;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin_contact = contact::all();
        $map = map::find($id=1);
        return view('admin.contact', ['admin_contact'=>$admin_contact ,'map'=>$map]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $contact = new contact();
        $contact->name = request("name");
        $contact->number = request("number");
        $contact->email = request("email");
        $contact->subject = request("subject");
        $contact->comment = request("comment");
        $contact->save();
        Mail::to('info@bcsopc.in')->send(new EnquiryMail($contact));
        return redirect('/');

        
    }

    /**
     * Display the specified resource.
     */
    public function location(Request $request)
    {
        $id = 1;
        $map  = map::find($id);
        if ($request->file('banner')) {
            $image = $request->file('banner');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
            $map -> banner = '/images/'.$imageName;
        }
        $map->map = request("location");
        $map->save();    
        return redirect('/admin/contact');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin_project = contact::find($id);
        $admin_project->delete();
        return redirect('/admin/contact');
    }
}
