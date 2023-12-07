@extends('layouts.admin')

@section('body')

<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">			
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body card-main-three">
                    <h5 class="m-4">Add home banner </h5>
                    <form class="form-floating" action="/admin/home/{{$admin_banner->id}}/update" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="mb-4">
                            <span class="form-floating">
                                <input value="{{$admin_banner->heading}}" type="text"  class="form-control" id="TextInput" placeholder="Name" name="heading" >
                                <label class="" for="TextInput">Banner Heading</label>
                            </span>
                        </div>
                       
                        <div class="mb-4">
                            <span class="form-floating">
                                Image size: 490X1920
                                <input type="file" class="form-control" id="emailInput"  name="image" value="{{$admin_banner->image}} accept="image/*">
                                <small class="text-muted">Max file size: 300KB</small>

                            </span>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">Add</button>
                            <a href="/admin/home" class="btn btn-outline-secondary">Cancel</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection