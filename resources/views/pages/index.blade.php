  @extends('layouts.layout')
    <!-- end of navbar -->
    @section('content')
        
  
       <!-- header -->
    <header class="hero">
      <div class="section-center hero-center">
        <article class="hero-info">
          <div class="underline"></div>
          <h1>i'm {{Auth::user()->name}}</h1>
          <h4>freelance web & mobile UI/UX Designer</h4>
          <a href="contact.html" class="btn hero-btn">hire me</a>
          <!-- social icons -->
          <ul class="social-icons hero-icons">
            <li>
              <a href="https://www.twitter.com" class="social-icon">
                <i class="fab fa-facebook"></i>
              </a>
            </li>
            <li>
              <a href="https://www.twitter.com" class="social-icon">
                <i class="fab fa-linkedin"></i>
              </a>
            </li>
            <li>
              <a href="https://www.twitter.com" class="social-icon">
                <i class="fab fa-squarespace"></i>
              </a>
            </li>
            <li>
              <a href="https://www.twitter.com" class="social-icon">
                <i class="fab fa-behance"></i>
              </a>
            </li>
            <li>
              <a href="https://www.twitter.com" class="social-icon">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
        </article>
        <article class="hero-img">
          <img src={{asset('storage/'.Auth::user()->profile->image)}} class="hero-photo" alt="john doe" />
        </article>
      </div>
    </header>
    <!-- end of header -->
    <!-- about -->
    <section class="section about">
      <div class="section-center about-center">
        <!-- about img -->
        <article class="about-img">
          <img
            src={{asset('projectImages/about-img.jpeg')}}
            class="hero-photo"
            alt="about img"
          />
        </article>
        <!-- about info -->
        <article class="about-info">
          <!-- section title -->
          <div class="section-title about-title">
            <h2>about</h2>
            <div class="underline"></div>
          </div>
          <!--end of section title -->
          <p>
           {{Auth::user()->profile->bio}}
          </p>

         
          <a href="about.html" class="btn">about me</a>
        </article>
      </div>
    </section>
    <!-- end of about -->
    <!-- services -->
    <section class="section bg-grey">
      <!-- section title -->
      <div class="section-title">
        <h2>services</h2>
        <div class="underline"></div>
      </div>
      <!--end of section title -->
      <div class="services-center section-center">
        <!-- single service -->
        <article class="service">
          <i class="fas fa-code service-icon"></i>
          <h4>web development</h4>
          <div class="underline"></div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates
            corrupti animi saepe quasi excepturi cupiditate voluptate dolor sed
            obcaecati vero.
          </p>
        </article>
        <!-- end of single service -->
        <!-- single service -->
        <article class="service">
          <i class="fab fa-sketch service-icon"></i>
          <h4>web design</h4>
          <div class="underline"></div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates
            corrupti animi saepe quasi excepturi cupiditate voluptate dolor sed
            obcaecati vero.
          </p>
        </article>
        <!-- end of single service -->
        <!-- single service -->
        <article class="service">
          <i class="fab fa-android service-icon"></i>
          <h4>app design</h4>
          <div class="underline"></div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates
            corrupti animi saepe quasi excepturi cupiditate voluptate dolor sed
            obcaecati vero.
          </p>
        </article>
        <!-- end of single service -->
      </div>
    </section>
    <!-- end of services -->
    <!-- projects -->
    <section class="section projects">
      <!-- section title -->
      <div class="section-title">
        <h2>latest works</h2>
        <div class="underline"></div>
        <p class="projects-text">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium
          repudiandae cupiditate ea facilis incidunt, non sapiente! Debitis
          magnam, earum assumenda obcaecati cum quaerat facere ratione molestiae
          dignissimos aliquid blanditiis architecto voluptates delectus
          voluptate animi nulla! Autem explicabo perspiciatis officia ea.
        </p>
      </div>
      <!--end of section title -->
      <div class="section-center projects-center">
        <!-- single project -->
        <a href="projects.html" class="project-1">
          <article class="project">
            <img
              src="{{asset('projectImages/project-1.jpeg')}}"
              alt="single project"
              class="project-img"
            />
            <div class="project-info">
              <h4>project title</h4>
              <p>client name</p>
            </div>
          </article>
        </a>
        <!-- end of single project -->
        <!-- single project -->
        <a href="projects.html" class="project-2">
          <article class="project">
            <img
              src="{{asset('projectImages/project-2.jpeg')}}"
              alt="single project"
              class="project-img"
            />
            <div class="project-info">
              <h4>project title</h4>
              <p>client name</p>
            </div>
          </article>
        </a>
        <!-- end of single project --><!-- single project -->
        <a href="projects.html" class="project-3">
          <article class="project">
            <img
              src={{asset('projectImages/project-3.jpeg')}}
              alt="single project"
              class="project-img"
            />
            <div class="project-info">
              <h4>project title</h4>
              <p>client name</p>
            </div>
          </article>
        </a>
        <!-- end of single project --><!-- single project -->
        <a href="projects.html" class="project-4">
          <article class="project">
            <img
              src={{asset('projectImages/project-4.jpeg')}}
              alt="single project"
              class="project-img"
            />
            <div class="project-info">
              <h4>project title</h4>
              <p>client name</p>
            </div>
          </article>
        </a>
        <!-- end of single project -->
      </div>
    </section>
    <!-- end of projects -->
    <!-- connect -->
    <section class="connect">
      <video
        controls
        autoplay
        muted
        loop
        class="video-container"
        poster="./images/project-1.jpeg"
      >
        <source src={{asset('videos/connect.mp4')}} type="video/mp4" />
        Sorry, your browser does not support embedded videos
      </video>
      <div class="video-banner">
        <!-- section title -->
        <div class="section-title">
          <h2>let's get in touch</h2>
          <div class="underline"></div>
        </div>
        <!--end of section title -->
        <p class="video-text">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ratione
          perferendis exercitationem sit. Beatae eius commodi officiis rem
          soluta ratione dignissimos quisquam tempore laudantium, porro vitae
          cupiditate dicta magni quas corrupti aperiam, rerum minus odio totam
          repellendus delectus nostrum veniam!
        </p>
        <a href="contact.html" class="btn">contact me</a>
      </div>
    </section>
    <!-- end of connect -->
    <!-- skills -->
    <section class="section skills">
      <!-- section title -->
      <div class="section-title">
        <h2>skills</h2>
        <div class="underline"></div>
      </div>
      <!--end of section title -->
      <div class="section-center skills-center">
        <article>
          <h3>front end</h3>
          <!-- single skill -->
          <div class="skill">
            <p>HTML/CSS</p>
            <div class="skill-container">
              <div class="skill-value"></div>
              <p class="skill-text">
                50%
              </p>
            </div>
          </div>
          <!--end of  single skill -->
          <!-- single skill -->
          <div class="skill">
            <p>Javascript</p>
            <div class="skill-container">
              <div class="skill-value value-70"></div>
              <p class="skill-text skill-text-70">
                70%
              </p>
            </div>
          </div>
          <!--end of  single skill -->
          <!-- single skill -->
          <div class="skill">
            <p>React</p>
            <div class="skill-container">
              <div class="skill-value value-80"></div>
              <p class="skill-text skill-text-80">
                80%
              </p>
            </div>
          </div>
          <!--end of  single skill -->
        </article>
        <article>
          <h3>back end</h3>
          <!-- single skill -->
          <div class="skill">
            <p>Node</p>
            <div class="skill-container">
              <div class="skill-value"></div>
              <p class="skill-text">
                50%
              </p>
            </div>
          </div>
          <!--end of  single skill -->
          <!-- single skill -->
          <div class="skill">
            <p>PHP</p>
            <div class="skill-container">
              <div class="skill-value value-70"></div>
              <p class="skill-text skill-text-70">
                70%
              </p>
            </div>
          </div>
          <!--end of  single skill -->
          <!-- single skill -->
          <div class="skill">
            <p>Python</p>
            <div class="skill-container">
              <div class="skill-value value-80"></div>
              <p class="skill-text skill-text-80">
                80%
              </p>
            </div>
          </div>
          <!--end of  single skill -->
        </article>
      </div>
    </section>
    <!-- end of skills -->
    <!-- timeline -->
    <section class="section timeline">
      <!-- section title -->
      <div class="section-title">
        <h2>timeline</h2>
        <div class="underline"></div>
      </div>
      <!--end of section title -->
      <div class="section-center timeline-center">
        <!-- single timeline item -->
        <article class="timeline-item">
          <h4>2020</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
            consequuntur voluptates tempore numquam? Quidem incidunt fugit quasi
            autem, ea excepturi.
          </p>
          <span class="number">
            1
          </span>
        </article>
        <!-- end of  single timeline item -->
        <!-- single timeline item -->
        <article class="timeline-item">
          <h4>2019</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
            consequuntur voluptates tempore numquam? Quidem incidunt fugit quasi
            autem, ea excepturi.
          </p>
          <span class="number">
            2
          </span>
        </article>
        <!-- end of  single timeline item -->
        <!-- single timeline item -->
        <article class="timeline-item">
          <h4>2018</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
            consequuntur voluptates tempore numquam? Quidem incidunt fugit quasi
            autem, ea excepturi.
          </p>
          <span class="number">
            3
          </span>
        </article>
        <!-- end of  single timeline item -->
        <!-- single timeline item -->
        <article class="timeline-item">
          <h4>2017</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
            consequuntur voluptates tempore numquam? Quidem incidunt fugit quasi
            autem, ea excepturi.
          </p>
          <span class="number">
            4
          </span>
        </article>
        <!-- end of  single timeline item -->
        <!-- single timeline item -->
        <article class="timeline-item">
          <h4>2016</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
            consequuntur voluptates tempore numquam? Quidem incidunt fugit quasi
            autem, ea excepturi.
          </p>
          <span class="number">
            5
          </span>
        </article>
        <!-- end of  single timeline item -->
        <!-- single timeline item -->
        <article class="timeline-item">
          <h4>2015</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
            consequuntur voluptates tempore numquam? Quidem incidunt fugit quasi
            autem, ea excepturi.
          </p>
          <span class="number">
            6
          </span>
        </article>
        <!-- end of  single timeline item -->
      </div>
    </section>
    <!--end of  timeline -->
    <!-- blog -->
    <section class="section blog">
      <!-- section title -->
      <div class="section-title">
        <h2>blog</h2>
        <div class="underline"></div>
      </div>
      <!--end of section title -->
      <div class="section-center blog-center">
        <!-- single article -->
        <div class="card">
          <!-- front of the card -->
          <div class="card-side card-front">
            <img src={{asset('projectImages/project-1.jpeg')}} alt="" />
            <div class="card-info">
              <h4>article title</h4>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et
                nisi ut a est eum tempora dolorum temporibus voluptatibus!
                Natus, provident.
              </p>
              <div class="card-footer">
                <img src={{asset('projectImages/hero-img-small.jpeg')}} alt="author image" />
                <p>7 min read</p>
              </div>
            </div>
          </div>
          <!-- card back  -->
          <div class="card-side card-back">
            <button class="btn">read more</button>
          </div>
        </div>
        <!-- end of single article -->
        <!-- single article -->
        <div class="card">
          <!-- front of the card -->
          <div class="card-side card-front">
            <img src={{asset('projectImages/project-2.jpeg')}} alt="" />
            <div class="card-info">
              <h4>article title</h4>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et
                nisi ut a est eum tempora dolorum temporibus voluptatibus!
                Natus, provident.
              </p>
              <div class="card-footer">
                <img src={{asset('projectImages/hero-img-small.jpeg')}} alt="author image" />
                <p>7 min read</p>
              </div>
            </div>
          </div>
          <!-- card back  -->
          <div class="card-side card-back">
            <button class="btn">read more</button>
          </div>
        </div>
        <!-- end of single article -->
        <!-- single article -->
        <div class="card">
          <!-- front of the card -->
          <div class="card-side card-front">
            <img src={{asset('projectImages/project-3.jpeg')}} alt="" />
            <div class="card-info">
              <h4>article title</h4>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et
                nisi ut a est eum tempora dolorum temporibus voluptatibus!
                Natus, provident.
              </p>
              <div class="card-footer">
                <img src={{asset('projectImages/hero-img-small.jpeg')}} alt="author image" />
                <p>7 min read</p>
              </div>
            </div>
          </div>
          <!-- card back  -->
          <div class="card-side card-back">
            <button class="btn">read more</button>
          </div>
        </div>
        <!-- end of single article -->
        <!-- single article -->
        <div class="card">
          <!-- front of the card -->
          <div class="card-side card-front">
            <img src={{asset('projectImages/project-4.jpeg')}} alt="" />
            <div class="card-info">
              <h4>article title</h4>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et
                nisi ut a est eum tempora dolorum temporibus voluptatibus!
                Natus, provident.
              </p>
              <div class="card-footer">
                <img src={{asset('projectImages/hero-img-small.jpeg')}} alt="author image" />
                <p>7 min read</p>
              </div>
            </div>
          </div>
          <!-- card back  -->
          <div class="card-side card-back">
            <button class="btn">read more</button>
          </div>
        </div>
        <!-- end of single article -->
      </div>
    </section>
    <!--end of  blog -->
    @endsection