@extends('layouts.frontend')

@section('body')

<!--banner Section starts Here -->
  <!--banner Section ends Here --> 
  <ul>
    <li data-transition="random" data-slotamount="1">
            <div class="image-container">
                <img src="{{$blog_cont->banner}}" alt="" class="banner-image" />
                <div class="image-text"><h1>Blog</h1></div>
            </div>
    </li>
</ul>
<br><br><br>
  <!--Section area starts Here -->
  <section id="section"> 
    <!--Section box starts Here -->
    <div class="container">
      <div class="row">
          <div class="col-12">
              <div class="text-center">
                  <h2>Our Blog</h2><br><br>
              </div>
          </div>
      </div>
    </div>
    <div class="section">
      @if($blog)
      
        <div class="container">
          <div class="row">
            <div class="masonry-section">
              @foreach($blog as $blog)
              <div class="col-sm-4 zoom pad-bottom blog-items col-xs-12 col-sm-12 col-md-12 col-lg-4"> 
                <figure style="width: 100%; height: 220px; overflow: hidden;"> 
                    <img src="{{$blog->image}}" alt="" style="width: 100%; height: 100%; object-fit: cover;"> 
                </figure>
                <div class="blog-text">
                  <div class="user-blog ">
                    <h2 class="h5">{{$blog->heading}}</h2>
                    <ul>
                    </ul>
                    <p>
                      {{ Illuminate\Support\Str::limit(implode(' ', array_slice(str_word_count($blog->content, 1), 0, 10)), 200) }}
                  </p>
                    <a class="button  button-hover" href="/blog/{{ $blog->id}}">read more</a> </div>
                </div>
              </div>
              @endforeach

              


              
              <!--Blog box-->
              
              <div class="container">
                @if ($blog_cont)
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-lg-12 col-xl-12">
                             {!!$blog_cont->contents!!}
                    </div>
                </div>
                @endif  
            </div>
             
              
            
              
        
              
              <!--Blog box--> 
              
            </div>
           
          </div>
        </div>
      </div>
      @endif
      <div class="query ">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-10">
              <h5>DO YOU STILL HAVE A QUESTION REGARING OUR SERVICES?</h5>
            </div>
            <div class="col-xs-12 col-sm-2"> <a href="/contact" class="button contact-us">contact us</a> </div>
          </div>
        </div>
      
    </div>

    
    <!--Section box ends Here --> 
  </section>
  <!--Section area ends Here --> 
  @endsection