@extends('layouts.admin')

@section('body')

<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
			
    <div class="card border-0 bg-transparent">
        <div class="card-header mb-4 border-bottom px-0">
            <h5 class="card-title mb-0 text-primary">Enquires</h5>
            <div class="dropdown card-action">
                <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full Screen">
                    <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M3 16m0 1a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1z"></path>
                        <path d="M4 12v-6a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-6"></path>
                        <path d="M12 8h4v4"></path>
                        <path d="M16 8l-5 5"></path>
                    </svg>
                </a>
                
            </div>
        </div>
        <div class="card-body p-0">
            <div class="row g-xl-4 g-3 mb-4">
                <div class="col-12">
                    <div class="card-header">
                        <h6 class="m-0"> </h6>
                        <div class="form-check form-switch table-toggle-one">
                            <a href="/admin/drops/{{$id}}/add" class="btn btn-primary ">Add new Dropdown</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table dataTable table-hover mb-0 w-100">
                            <thead>
                                <tr>
                                    <th>NO.</th>
                                    <th>Name</th>
                                    <th>Banner image</th>
                                    {{-- <th>Banner head</th> --}}
                                    <th>Heading</th>
                                    
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i = 0; $i < count($data); $i++)
                                @php
                                  $item = $data[$i];
                                @endphp
                                <tr>
                                    <td>{{$i+1}}</td>
                                    <td>{{$item->name}}</td>
                                    <td><img src="{{$item->banner_img}}" alt="image" style="height: 4em"></td>
                                    {{-- <td>{{$item->banner_head}}</td> --}}
                                    <td>{{$item->heading}}</td>
                                    <td><img src="{{$item->image}}" alt="image" style="height: 4em"></td>
                                    <td>
                                        <a href="/admin/drops/{{$item->id}}/edit" class="btn btn-primary">Edit</a>
                                        <a href="/admin/drops/{{$item->id}}/delete" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
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

@endsection