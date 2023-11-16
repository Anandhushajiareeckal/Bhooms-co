@extends('layouts.admin')

@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">			
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body card-main-three">
                    <h5 class="m-4">Add service </h5>
                    <form class="form-floating" action="/admin/service/store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="text" class="form-control" required id="TextInput" placeholder="Name" name="heading" >
                                <label class="=" for="TextInput">Heading</label>
                            </span>
                        </div>
                        <div class="mb-4">
                            <span class="">
                                <textarea class="form-control" id="TextArea" rows="8" required cols="30" placeholder="Comment" name="discription" value=""></textarea>
                                <label class="" for="TextArea">Description</label><br>
                            </span>
                        </div>
                        
                   
                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="file" class="form-control" id="emailInput" required placeholder="password" name="image" >
                                <small class="text-muted">Max file size: 300KB</small>

                            </span>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header border-bottom">
                                    </div>
                                    <div class="card-body">
                                        <textarea name="detail_content" required id="summernote" ></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">Add</button>
                            <a href="/admin/service" class="btn btn-outline-secondary">Cancel</a>

                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection