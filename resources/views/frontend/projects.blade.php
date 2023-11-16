
@extends('layouts.frontend')

@section('body')
<!--banner Section starts Here -->
<ul>
    <li data-transition="random" data-slotamount="1">
            <div class="image-container">
                <img src="{{$project_cont->banner}}" alt="" class="banner-image" />
                <div class="image-text"><h1>Projects</h1></div>
            </div>
    </li>
</ul>
<br><br><br>


  <section id="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="">
                    <h2>Our IT Solutions & Services for Your Business</h2><br><br>
                </div>
            </div>
        </div>

        <!-- Content without the loop -->
        
        <div class="row mt-4 mb-4 justify-content-end">
            @foreach($project as $project)
                <div class="col-sm-4 zoom pad-bottom blog-items col-xs-12 col-sm-8 col-md-4 col-lg-4"><br><br><br><br>
                    <div class="slides-tab zoom" style="height: 400px;">
                    <figure>
                       <img src="{{ $project->image }}" alt="" />
                    </figure>
                    <div class="slides-text">
                        <h4>{{ $project->heading }}</h4>
                        <p>
                            <!--{{ Illuminate\Support\Str::limit(implode(' ', array_slice(str_word_count($project->content, 1), 0, 10)), 200) }}-->
                            {{ substr($project->content, 0, 45) }}
                        </p>
                        <a href="/project/{{ $project->id }}" class="read-more">read more <span>></span></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div><br><br><br><br><br>
    </div><br><br
    
    <div class="container">
        @if ($project_cont)
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12 col-xl-12">
                     {!!$project_cont->contents!!}
            </div>
        </div>
        @endif  
    </div>
</section>

<!--Section box ends Here -->

      
      
  
  <!-- Achivement Section --> 
  @endsection