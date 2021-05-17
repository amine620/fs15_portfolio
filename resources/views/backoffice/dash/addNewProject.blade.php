@extends('layouts.dashboardApp')
@section('content')
  
  <h1 class="text-center m-5">add new project</h1>
<div class="form-group">
    
    <form class="container col-6 " action="{{route('store')}}" method="post" enctype="multipart/form-data">
        @csrf
        
    <input class="form-control m-3" type="text" placeholder="title" name="title">
    <input class="form-control m-3" type="text" placeholder="Description"  name="description">
    <input class="form-control m-3" type="file" placeholder="image"  name="image">
    <input class="form-control m-3" type="url" placeholder="github url"  name="github_url">
    <button class="btn btn-secondary  m-2 "   style="width: 200px;"  >Submit</button>
    </form>

</div>
@endsection
