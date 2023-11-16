@extends('layouts.admin')

@section('body')

<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
			
    <div class="card border-0 bg-transparent">
        <div class="card-body p-0">
            <div class="row g-xl-4 g-3 mb-4">
                <div class="col-12">
                    @if (count($admin_menu)<2 )
                    <div class="card-header">
                        <h6 class="m-0"> </h6>
                        <div class="form-check form-switch table-toggle-one">
                            <a href="/admin/menu/add" class="btn btn-primary ">Add new Menu</a>
                        </div>
                    </div>
                    @else
                    <div class="card-header">
                        <h6 class="m-0"> </h6>
                        <div class="form-check form-switch table-toggle-one">
                           <p class="text-danger">You have reached maximum item lmit</p>
                        </div>
                    </div>
                    @endif
                    <div class="card-body table-main-one">
                    <div class="table-responsive">
                        <table class="myDataTable table table-hover align-middle mb-0">
                            <thead>
                                <tr>
                                    <th>NO.</th>
                                    <th>Name</th>
                                    <th>Banner image</th>
                                    <!--<th>Banner head</th>-->
                                    <th>Heading</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i = 0; $i < count($admin_menu); $i++)
                                @php
                                  $item = $admin_menu[$i];
                                @endphp
                                <tr>
                                    <td>{{$i+1}}</td>
                                    <td>{{$item->name}}</td>
                                    <td><img src="{{$item->banner_img}}" alt="image" style="height: 4em; width:8em;"></td>
                                    <!--<td>{{$item->banner_hed}}</td>-->
                                    <td>{{$item->heading}}</td>
                                    <td><img src="{{$item->image}}" alt="image" style="height: 4em"></td>
                                    <td>
                                        <a href="/admin/menu/{{$item->id}}/edit" class="btn btn-primary">Edit</a>
                                        <a href="/admin/menu/{{$item->id}}/delete" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
                                    </td>
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>

</div>

@endsection