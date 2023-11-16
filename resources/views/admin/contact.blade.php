@extends('layouts.admin')

@section('body')

<!-- start: page body area -->
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
    <div class="card border-0 bg-transparent ">  
    <div class="card-header">
        <div class="form-check form-switch table-toggle-one">
            <form action="/admin/location" method="POST" enctype="multipart/form-data">
                @csrf
                <div class=" d-flex" >


                    <div class="col-6 d-inline-block">
                        <img src="{{$map->banner}}" alt="" style="height: 50px;width:100px;"><br>
                        <input type="file" class="form-control" id="TextInput" required placeholder="Name"  name="banner" value="{{$map->banner}}">
                        <label>Banner image</label>
                    </div>


                    <div class="col-6 d-inline-block">
                        <br><br>
                        <input type="text" class="form-control" id="TextInput" required placeholder="Name"  name="location" value="{{$map->map}}">
                        <label>Embeded map link</label>
                    </div>
                    <div class="col-12 d-inline-block ">
                        <br><br>
                        <button type="submit" class="btn btn-primary">Update  </button>
                    </div>
                
                    
                    
                </div>
            </form>
        </div>
    </div>

        <div class="card-body p-0 table-responsive">
            <div class="row g-xl-4 g-3 mb-4">
                <div class="col-12">
                    <table class="table dataTable table-hover mb-0 w-100 ">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Number</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Comment</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for($i=0;$i<count($admin_contact);$i++)
                            @php
                                $item = $admin_contact[$i]
                            @endphp
                            <tr>
                                <td class="sorting_1">{{$item->name}}</td>
                                <td>{{$item->number}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->subject}}</td>
                                <td>{{$item->comment}}</td>
                                <td><a href="/admin/contact/{{$item->id}}/delete" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete </a></td>

                            </tr>
                            @endfor
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>

</div>


</main>
@endsection