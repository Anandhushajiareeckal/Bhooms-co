@extends('layouts.admin')

@section('body')

<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
			
    <div class="row g-3">
        <div class="col-lg-12 col-md-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="m-0">Home </h6>
                    <div class="form-check form-switch table-toggle-one">
                        <a href="/admin/testimonial/add" class="btn btn-primary ">Add new testimonial</a>
                    </div>
                </div>
                <div class="card-body table-main-one">
                    <div class="table-responsive">
                    <table class="myDataTable table table-hover align-middle mb-0" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Content</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @for($i=0;$i<count($admin_testimonial);$i++)
                            @php
                              $item = $admin_testimonial[$i]  
                            @endphp
                            <tr>
                                <td>{{$i+1}}</td>
                                <td style="width: 400px"> {{ substr($item->content, 0, 100) }} ...</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->role}}</td>
                                <td>
                                    <a href="/admin/testimonial/{{$item->id}}" class="btn btn-primary">Edit</a>
                                    <a href="/admin/testimonial/{{$item->id}}/delete" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')" >Delete </a>
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

@endsection