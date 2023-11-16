@extends('layouts.admin')
@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">			
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body card-main-three">
                    <h5 class="m-4">Edit about Us </h5>
                    <form class="form-floating" action="/admin/about/2/add" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <span class="form-floating">
                                <p>Banner  image</p>
                                <img src="{{$admin_about->img}}" alt="image" style="height: 4em"><br><br>
                                <input type="file" class="form-control" id="emailInput"  placeholder="password" name="banner" value="{{$admin_about->img}}">
                                <small class="text-muted">Max file size: 300KB</small>

                            </span>
                        </div>
                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="text" class="form-control" id="TextInput" required placeholder="Name" name="heading" value="{{$admin_about->heading}}">
                                <label class="" for="TextInput">Heading</label>
                            </span>
                        </div>
                       
                        <span class="">
                            <label class="form-label" for="TextInput">Content</label>
                            <textarea class="form-control" id="TextArea" rows="8" cols="30" required placeholder="Comment" name="discription" value="">{{$admin_about->discription}}</textarea>
                            <label class="form-label" for="TextArea">Description</label><br>
                        </span>
                   
                        <div class="mb-4">
                            <span class="form-floating">
                                <img src="{{$admin_about->image}}" alt="image" style="height: 4em"><br><br>
                                <input type="file" class="form-control" id="emailInput"  placeholder="password" name="image" value="{{$admin_about->image}}">
                                <small class="text-muted">Max file size: 300KB</small>

                            </span>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header border-bottom">
                                    </div>
                                    <div class="card-body">
                                        <label class="form-label" for="TextArea">Content</label><br>
                                        <textarea name="contents" required id="summernote" >{!!$admin_about->contents!!}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">Add</button>
                            <a href="/admin/dashboard" class="btn btn-outline-secondary">Cancel</a>

                        </div>
                      
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
   
@endsection