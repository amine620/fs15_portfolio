@extends('layouts.dashboardApp')



@section('content')

<form action="{{route('update')}}" method="post" style="margin-top:100px" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    <div class="form-group col-md-6 offset-3">
        <input type="file" class="form-control mt-2" name="avatar" value="{{$profile->image}}">
        <input type="text" class="form-control mt-2" placeholder="bio" name="bio" value="{{$profile->bio}}">
        <input type="text" class="form-control mt-2" placeholder="phone" name="phone" value="{{$profile->phone}}">
        <button class="btn btn-warning form-control mt-2">update</button>
    </div>
</form>

@endsection

