@extends('layouts.dashboardApp')

@section('content')

<h1 class="text-center m-5">Update Project</h1>
<div class="form-group">
    
    <form class="container col-6 " action="{{route('edit',[$project->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
    <input class="form-control m-3" type="text" placeholder="title" name="title" value="{{$project->title}}">
    <input class="form-control m-3" type="text" placeholder="Description"  name="description" value="{{$project->description}}">
    <input class="form-control m-3" type="file" placeholder="image"  name="image" value="">
    <input class="form-control m-3" type="url" placeholder="github url"  name="github_url" value="{{$project->github_url}}">
    <button class="btn btn-secondary  m-2 "   style="width: 200px;"  >Submit</button>
    </form>

</div>

@endsection