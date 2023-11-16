@extends('layouts.frontend')
@section('body')
<link href="{{asset('all/css/style.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


<div class="page-header">
    <div>
        <h1 class="page-title">Form Editor</h1>
    </div>
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Editors</li>
        </ol>
    </div>
</div>
<div class="row">
    <form action="/fr/val" method="POST">
        @csrf
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                </div>
                <div class="card-body">
                    <textarea name="text" id="summernote" ></textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" value="Submit"></button>

    </form>
</div>
<script src="{{asset('all/jquery.min.js')}}"></script>
<script src="{{asset('all/popper.min.js')}}"></script>
<script src="{{asset('all/bootstrap.min.js')}}"></script>
<script src="{{asset('all/summernote1.js')}}"></script>
<script src="{{asset('all/summernote.js')}}"></script>
@endsection