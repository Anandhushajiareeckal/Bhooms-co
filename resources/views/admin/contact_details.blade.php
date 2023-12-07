@extends('layouts.admin')

@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">			
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body card-main-three">
                    <h5 class="m-4">Add home banner </h5>
                    <form class="form-floating" action="/admin/contact/content/update" method="POST" >
                        @method("PUT")
                        @csrf
                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="text" class="form-control" id="TextInput" placeholder="Name" name="number"  value="{{$contact_details->number}}">
                                <label class="" for="TextInput">Heading</label>
                            </span>
                        </div>
                       
                        <span class="">
                            <textarea class="form-control" id="TextArea" rows="8" cols="3" placeholder="Comment"  name="email" value="">{{$contact_details->email}}</textarea>
                            <label class="" for="TextArea">Description</label><br>
                        </span>
                        
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">Update</button>
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