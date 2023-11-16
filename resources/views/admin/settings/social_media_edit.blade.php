@extends('layouts.admin')

@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">			
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body card-main-three">
                    <form class="form-floating" action="/admin/social/{{$admin_social->id}}/update" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col">
                                <h5 class="m-4">Update social media</h5>
                            </div>
                            <div class="col-2 ">
                                <h5 class="m-4">Status:</h5>
                            </div>
                            <div class="col-1">
                                <div class="form-check form-switch">
                                    {{-- <label class="form-check-label" for="flexSwitchCheckChecked">Status</label><br> --}}
                                   <br> <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="status" @if($admin_social->status == 1) checked @endif >
                                </div>
                            </div>
                        </div>
                        @csrf
                        @method("PUT")
                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="text" class="form-control" id="TextInput" placeholder="Eg: fa fa-facebook" name="icon"  value="{{$admin_social->icon}}" >
                                <label class="" for="TextInput">Icon class</label>
                            </span>
                        </div>
                       
                        <span class="form-floating">
                            <textarea class="form-control" id="TextArea" rows="5" cols="30" placeholder="Eg: www.facebook.com" name="link" value="">{{$admin_social->link}}</textarea>
                            <label class="" for="TextArea">URL</label><br>
                        </span>
                   
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="/admin/social" class="btn btn-outline-secondary">Cancel</a>

                        </div>
                        
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection