
    @extends('layouts.dashboardApp')

    @section('content')
        
    <table class="table table-light table-striped mt-5">


     
            <thead>
              <tr>
                <th scope="col">#project id</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
                
              </tr>
            </thead>
            <tbody>
                @foreach ($projects as $item)
                    
                <tr>
                  <th scope="row">{{$item->id}}</th>
                  <td>{{$item->title}}</td>
                  <td>{{$item->description}}</td>
                  <td><form action="{{route('delete',[$item->id])}}" method="post">  @method('DELETE') @csrf <button class="btn btn-danger"><i class="fas fa-trash"></i></button></form></td>
                  <td>
                    <a class="btn btn-warning" href="{{route('update',[$item->id])}}"><i class="fas fa-edit"></i></a>
                  </td>
                 
                </tr>
                @endforeach
          

              
            </tbody>
         



    </table>
   

    @endsection


