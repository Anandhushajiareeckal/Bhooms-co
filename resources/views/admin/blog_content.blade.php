@extends('layouts.admin')
@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">			
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body card-main-three">
                    <h5 class="m-4">Blog content</h5>
                    <form class="form-floating" action="/admin/contents/blog-add" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <span class="form-floating">
                                <p>Banner  image</p>
                                <img src="{{$blog_content->banner}}" alt="image" style="height: 4em"><br><br>
                                <input type="file" class="form-control" id="emailInput"  placeholder="password" name="banner" value="{{$blog_content->banner}}">
                                <small class="text-muted">Max file size: 300KB</small>

                            </span>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header border-bottom">
                                    </div>
                                    <div class="card-body">
                                        <textarea name="contents" required id="summernote" >{!!$blog_content ->contents!!}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">Add</button>
                            <a href="/admin/dashboard" class="btn btn-outline-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
   
@endsection