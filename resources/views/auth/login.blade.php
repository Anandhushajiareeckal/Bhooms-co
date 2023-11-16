@php
    namespace App\Models;
    use App\Models\logo;
    $id =1;
    $logo = logo::find($id);
@endphp
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center  " style="padding-left:4em;" >
        <div class="col-md-7 " >
            <div class="card col-lg-7 col-xl-9 col-sm-12 " >
                <div class="card-body col-lg-9 col-xl-11" style="padding-left:5em;" >
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        {{-- <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                
                            </div>
                        </div> --}}



                        <main class="container-fluid px-0">

                            
                    
                            <!-- start: page menu link -->
                            {{-- <aside class="px-xl-5 px-4 auth-aside" data-bs-theme="none" style="align:center; ">
                                <img class="login-img" src="{{$logo->img_head}}" alt="">
                            </aside>
                     --}}


                        <div class="text-center" >
                            <img src="{{$logo->img_head}}" alt="Your Image" class="img-fluid" style="max-height: 8em; width: auto;">
                        </div><br>

                            <!-- start: page body area -->
                            <div class="px-xl-5 px-4 auth-body">
                                <form>
                                    <ul class="row g-3 list-unstyled li_animate">
                                        <li class="col-12 text-center">
                                            <h1 class="h2 title-font">Bhooms co Admin</h1>
                                        </li>
                                        <li class="col-12">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control form-control-lg" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror


                          
                                        </li>
                                        <li class="col-12">
                                            <div class="form-label">
                                                <span class="d-flex justify-content-between align-items-center">
                                                    Password
                                                </span>
                                            </div>
                                            <input type="password" class="form-control form-control-lg" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        
                                        
                                        
                                        
                                        </li>
                                        <li class="col-12">
                                            <div class="form-check fs-5">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label fs-6" for="Rememberme">Remeber this Device</label>
                                            </div>
                                        </li>
                                        <li class="col-8 my-lg-8 " style="margin-left:3.5em;">
                                            <button type="submit" class="btn btn-m w-100 btn-primary text-uppercase mb-2 ">
                                                {{ __('SIGN IN') }}
                                            </button>
                                        </li>
                                       
                                    </ul><!--[ ul.row end ]-->
                                </form>
                            </div>
                    
                           
                            
                        </main>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
