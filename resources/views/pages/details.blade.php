@extends('layouts.layout')


@section('content')
    
<header class="projects-hero">
  <!-- section title -->
  <div class="section-title">
    <h1>my project details</h1>
    <div class="underline"></div>
  </div>
  <!--end of section title -->
</header>
<section class="section">
  <div class="section-center projects-page-center">
    <!-- single project -->

    
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
    <p>
      {{$project->description}}
    </p>
    <p>
     owner: {{$project->user->name}}
    </p>
    <div class="project-footer">
      <span>
        <i class="fab fa-github"></i>
      </span>
      <span>
        <a href="{{$project->github_url}}" style='margin-right:10px' target="_blank">source code</a>
      </span>
    </div>
  </div>

</article>  


<div>
 <form action="{{route('feed')}}" method="post">
  @csrf
   <div class="form-group">
     <input type="text" class="form-control" name="content">
     <input type="hidden" class="form-control"  value="{{$project->id}}" name="project_id">
     <button class="btn btn-info form-control mt-2">feed</button>
    </div>
 </form>
   
 <div class="card mt-5" style="width: 50rem;" >
  <div class="card-header">
   feedback
  </div>

  @forelse ($feeds as $feed)
  <ul class="list-group list-group-flush">
    <li class="list-group-item"> by  <strong> {{$feed->user->name}} </strong></li>
    <li class="list-group-item">{{$feed->content}}</li>
  </ul>
  @empty
      <h1 class="text-secondary text-center mt-5">no feedback ❕</h1>
  @endforelse
</div>
</div>

    <!-- end of single project -->
  </div>
</section>
@endsection
   