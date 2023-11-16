@extends('layouts.admin')

@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">			
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body card-main-three">
                    <h5 class="m-4">Add home banner </h5>
                    <form class="form-floating" action="/admin/testimonial/store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <span class="">
                                <textarea class="form-control" id="TextArea" required rows="8" cols="30" placeholder="Comment" name="discription" value=""></textarea>
                                
                            </span>
                        </div>

                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="text" class="form-control" required id="TextInput" placeholder="Name" name="name" >
                                <label class="form-label" for="TextInput">Name</label>
                            </span>
                        </div>
                       
                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="text" class="form-control" required id="TextInput" placeholder="Name" name="role" >
                                <label class="form-label" for="TextInput">Role</label>
                            </span>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">Add</button>
                            <a href="#" class="btn btn-outline-secondary">Cancel</a>

                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection