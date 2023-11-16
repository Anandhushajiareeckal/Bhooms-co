@extends('layouts.frontend')

@section('body')




<ul>
    <li data-transition="random" data-slotamount="1">
            <div class="image-container">
                <img src="{{$service_cont->banner}}" alt="" class="banner-image" />
                <div class="image-text"><h1>Service</h1></div>
            </div>
    </li>
</ul>
<br><br><br>



<!-- Section area starts Here -->
<section id="section" class="">
    <!-- Section box starts Here -->
    <div>
        <div class="container" >
            <div class="row">
                <div class="col-xs-12">
                    <div class="text-center">
                        <h2 class="my-4">Our IT Solutions & Services for Your Business</h2>
                    </div>
                </div>
            </div>
            <!-- Content without loop -->
            <div class="row mt-4 mb-5 justify-content-end ">
                @foreach($service as $service)
                <div class="col-sm-4 zoom pad-bottom blog-items col-xs-12 col-sm-8 col-md-4 col-lg-4"><br>
                    <div class="slides-tab zoom" style="height: 400px;">
                        <figure>
                            <img src="{{ $service->image }}" alt="" />
                        </figure>
                        <div class="slides-text">
                            <h4>{{ $service->heading }}</h4>
                            <p>
                                <!--{{ Illuminate\Support\Str::limit(implode(' ', array_slice(str_word_count($service->content, 1), 0, 15)), 200) }}-->
                                {{ substr($service->content, 0, 45) }}
                            </p>
                            <a href="/service/{{ $service->id }}" class="read-more">read more <span>></span></a>
                        </div>
                    </div>
                </div>
                @endforeach 
        </div><br><br><br><br><br>
    </div>
    <!-- Section box ends Here -->
    <div class="container">
        @if ($service_cont)
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12 col-xl-12">
                     {!!$service_cont->contents!!}
            </div>
        </div>
        @endif  
    </div>
</div>
</section>

<!--Section area ends Here -->
<br><br><br>
@endsection