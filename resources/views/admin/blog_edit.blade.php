@extends('layouts.admin')

@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">			
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body card-main-three">
                    <h5 class="m-4">Add home banner </h5>
                    <form class="form-floating" action="/admin/blog/{{$admin_blog->id}}/edit" method="POST" enctype="multipart/form-data">
                        @method("PUT")
                        @csrf
                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="text" class="form-control" id="TextInput" placeholder="Name" name="heading"  value="{{$admin_blog->heading}}">
                                <label class="form-label" for="TextInput">Heading</label>
                            </span>
                        </div>
                       
                        <span class="">
                            <textarea class="form-control" id="TextArea" rows="8" cols="30" placeholder="Comment"  name="discription" value="">{{$admin_blog->content}}</textarea>
                            <label class="form-label" for="TextArea">Description</label><br>
                        </span>
                   
                        <div class="mb-4">
                            <span class="form-floating">
                                <img src="{{$admin_blog->image}}" alt="image" style="height: 4em"><br><br>
                                <input type="file" class="form-control" id="emailInput" placeholder="password"  name="image" value="{{$admin_blog->image}}">
                                <small class="text-muted">Max file size: 300KB</small>

                            </span>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header border-bottom">
                                    </div>
                                    <div class="card-body">
                                        <textarea name="detail_content"  id="summernote" >{{$admin_blog->detail_content}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">Add</button>
                            <a href="/admin/blog" class="btn btn-outline-secondary">Cancel</a>

                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection