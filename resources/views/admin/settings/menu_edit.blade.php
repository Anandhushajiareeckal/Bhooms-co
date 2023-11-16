@extends('layouts.admin_head')

@section('body')
<link href="{{asset('all/css/style.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<div class="ps-md-4 pe-md-3 px-2 py-3 page-body" >
			
    <div class="ps-md-4 pe-md-3 px-2 py-3 page-body">			
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body card-main-three">
                        <h5 class="m-4">Menu </h5>
                        <form class="form-floating" action="/admin/menu/{{$data->id}}/update" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="mb-4">
                                <span class="form-floating">
                                    <input type="text" class="form-control" id="TextInput" placeholder="Name" required name="name" value="{{$data->name}}">
                                    <label class="" for="TextInput">Name</label>
                                </span>
                            </div>
                            <div class="mb-4">
                                <img src="{{$data->banner_img}}" alt="image" style="height: 4em"><br><br>
                                <span class="form-floating">
                                    <input type="file" class="form-control" id="emailInput" placeholder="password"  name="banner_image" value="{{$data->banner_img}}">
                                    <small class="text-muted">Max file size: 300KB</small>
    
                                </span>
                            </div>

                            <!--<div class="mb-4">-->
                            <!--    <span class="form-floating">-->
                            <!--        <input type="text" class="form-control" id="TextInput" placeholder="Name" required name="banner_heading" value="{{$data->banner_hed}}" >-->
                            <!--        <label class="" for="TextInput">Banner heading</label>-->
                            <!--    </span>-->
                            <!--</div>-->

                            <div class="mb-4">
                                <span class="form-floating">
                                    <input type="text" class="form-control" id="TextInput" placeholder="Name" required name="heading" value="{{$data->heading}}">
                                    <label class="" for="TextInput">Heading</label>
                                </span>
                            </div>

                            <div class="mb-4">
                                <span class="form-floating">
                                    <img src="{{$data->image}}" alt="image" style="height: 4em"><br><br>
                                    <input type="file" class="form-control" id="emailInput" placeholder="password"  name="image" value="{{$data->image}}" >
                                    <small class="text-muted">Max file size: 300KB</small>
    
                                </span>
                            </div>
                           
                            <div class="row">
                                  
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header border-bottom">
                                            </div>
                                            <div class="card-body">
                                                <textarea name="content" id="summernote" >{!! $data->content !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                            
                            </div>
                       
                            
                            <div class="mb-4">
                                <button type="submit" class="btn btn-primary">Add</button>
                                <a href="/admin/menu" class="btn btn-outline-secondary">Cancel</a>
    
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('all/jquery.min.js')}}"></script>
    <script src="{{asset('all/popper.min.js')}}"></script>
    <script src="{{asset('all/bootstrap.min.js')}}"></script>
    <script src="{{asset('all/summernote1.js')}}"></script>
    <script src="{{asset('all/summernote.js')}}"></script>
@endsection