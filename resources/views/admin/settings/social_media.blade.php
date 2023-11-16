@extends('layouts.admin')

@section('body')

<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
    <div class="card border-0 bg-transparent">
        <div class="card-header">
            <h6 class="m-0">Home</h6>
            <div class="form-check form-switch table-toggle-one">
                <a href="/admin/social/view" class="btn btn-primary">Add </a>
            </div>
        </div>
        
                <div class="table-responsive">
                    <table class="table dataTable table-hover mb-0 w-100">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Icon</th>
                                <th>Link</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for($i=0;$i<count($admin_social);$i++)
                            @php
                                $item = $admin_social[$i]
                            @endphp
                            <tr>
                                <td class="sorting_1">{{$i+1}}</td>
                                <td><i class="{{$item->icon}}"></i></td>
                                <td>{{$item->link}}</td>
                                @if ($item->status == 1)
                                    <td><span class="badge bg-success">Active</span></td>
                                @else
                                    <td><span class="badge bg-warning">Disable</span></td>
                                @endif
                                <td><a href="/admin/social/{{$item->id}}/edit" class="btn btn-primary" >Edit </a> 
                                    <a href="/admin/social/{{$item->id}}/delete" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete </a></td>

                            </tr>
                            @endfor
                           
                        </tbody>
                    </table>
                </div>
          
    </div>
</div>

@endsection