@extends('layouts.layout')


@section('content')
    
<header class="projects-hero">
  <!-- section title -->
  <div class="section-title">
    <h1>my projects</h1>
    <div class="underline"></div>
  </div>
  <!--end of section title -->
</header>
<section class="section">
  <div class="section-center projects-page-center">
    <!-- single project -->

@foreach ($projects as $project)
    
{{-- for each here --}}
<article class="single-project">
  <div class="project-container">
    <img src={{asset('storage/'.$project->image)}} alt="single project" height='300' />
    <a href="https://www.johnsmilga.com" class="project-icon">
      <i class="fas fa-home"></i>
    </a>
  </div>
  <div class="project-details">
    <h4>{{$project->title}}</h4>
    {{-- <p>
      {{$project->description}}
    </p> --}}
    <p>
     owner: {{$project->user->name}}
    </p>
    <div class="project-footer">
      <span>
        <i class="fab fa-github"></i>
      </span>
      <span>

        <a href="{{$project->github_url}}" style='margin-right:10px' target="_blank">source code</a>
        <a href="{{route('show',['id'=>$project->id])}}" style='margin-right:10px'>details</a>
      </span>
    </div>
  </div>
</article>  
@endforeach
      {{-- end foreach --}}

   


    <!-- end of single project -->
  </div>
</section>
@endsection
   