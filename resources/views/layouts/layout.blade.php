<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>John Doe || About</title>
    <!-- css -->
    <link rel="stylesheet" href={{asset('css/styles.css')}} />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="./fontawesome-free-5.12.1-web/css/all.min.css"
    />
  </head>

  <body>
    <!-- navbar -->
    <nav class="nav" id="nav">
      <div class="nav-center">
        <!-- nav header -->
        <div class="nav-header">
          <img src="{{asset('storage/'.Auth::user()->profile->image)}}" class="nav-logo" alt="" style="width: 100px;height:100px" />
          <button class="nav-btn" id="nav-btn">
            <i class="fas fa-bars"></i>
          </button>
        </div>
        <!-- nav links -->
        <ul class="nav-links">
          <li><a href={{route('home')}}>Home</a></li>
          <li><a href="{{route('projects')}}">Projects</a></li>
          <li><a href="{{route('myProjects')}}">Dashboard</a></li>
        </ul>
      </div>
    </nav>



@yield('content');




    <footer class="footer">
        <ul class="social-icons " >
          <!-- single item -->
          <li>
            <a href="https://www.twitter.com" class="social-icon" >
              <i class="fab fa-facebook"></i>
            </a>
          </li>
          <!-- end of single item -->
          <!-- single item -->
          <li>
            <a href="https://www.twitter.com" class="social-icon">
              <i class="fab fa-linkedin"></i>
            </a>
          </li>
          <!-- end of single item -->
          <!-- single item -->
          <li>
            <a href="https://www.twitter.com" class="social-icon">
              <i class="fab fa-squarespace"></i>
            </a>
          </li>
          <!-- end of single item -->
          <!-- single item -->
          <li>
            <a href="https://www.twitter.com" class="social-icon">
              <i class="fab fa-behance"></i>
            </a>
          </li>
          <!-- end of single item -->
          <!-- single item -->
          <li>
            <a href="https://www.twitter.com" class="social-icon">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <!-- end of single item -->
        </ul>
  
        <p>&copy; <span id="date"></span> John Doe. All rights reserved.</p>
      </footer>
      <script src="./js/app.js"></script>
    </body>
  </html>
  <style>
      a{
          text-decoration: none;
      }
  </style>