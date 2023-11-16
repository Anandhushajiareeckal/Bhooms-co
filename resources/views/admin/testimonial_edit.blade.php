@extends('layouts.admin')

@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">			
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body card-main-three">
                    <h5 class="m-4">Add home banner </h5>
                    <form class="form-floating" action="/admin/testimonial/{{$admin_testimonial->id}}/edit" method="POST" enctype="multipart/form-data">
                        @method("PUT")
                        @csrf
                       
                        <div class="mb-4">
                            <span class="">
                                <label class="form-label" for="TextArea">Content</label><br>
                                <textarea class="form-control" id="TextArea" rows="8" cols="30" required placeholder="Comment" name="discription" value="">{{$admin_testimonial->content}}</textarea>
                            </span>
                        </div>
                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="text" class="form-control" id="TextInput" required placeholder="Name" name="name" value="{{$admin_testimonial->name}}">
                                <label class="" for="TextInput">Name</label>
                            </span>
                        </div>
                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="text" class="form-control" id="TextInput" required placeholder="Name" name="role" value="{{$admin_testimonial->role}}">
                                <label class="" for="TextInput">Role</label>
                            </span>
                        </div>
                        
                   
                        
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">Add</button>
                            <a href="/admin/project" class="btn btn-outline-secondary">Cancel</a>

                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection