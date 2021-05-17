<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/dash.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="menu" tabindex="0">
        <div class="smartphone-menu-trigger"></div>
      <header class="avatar">
            <img src="{{asset('storage/'.Auth::user()->profile->image)}}" />
        <h2>John D.</h2>
      </header>
        <ul>
        <li tabindex="0"><a href="{{route('home')}}"><i class="fas fa-home"></i> home</a></li>        
        <li tabindex="0"><a href="{{route('addNewProject')}}"><i class="fas fa-plus"></i> add new</a></li>
        <li tabindex="0"><a href="{{route('myProjects')}}"><i class="fas fa-table"></i> projects</a></li>
        <li tabindex="0"><a href="{{route('form')}}"><i class="fas fa-user"></i> profile</a></li>
        </ul>
    </nav>
    
    <main>
      <div class="mt-5">
     @yield('content')
    </div>
</main>
</body>
</html>