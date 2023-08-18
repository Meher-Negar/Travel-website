<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Live & explore</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- font awesome cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- fonts -->
        <link rel = "stylesheet" href = "{{asset('frontend')}}/font/fonts.css">
        <!-- normalize css -->
        <link rel = "stylesheet" href = "{{asset('frontend')}}/css/normalize.css">
        <!-- custom css -->
        <link rel = "stylesheet" href = "{{asset('frontend')}}/css/utility.css">
        <link rel = "stylesheet" href = "{{asset('frontend')}}/css/style.css">
        <link rel = "stylesheet" href = "{{asset('frontend')}}/css/responsive.css">
    </head>
    <body>
        <!-- navbar  -->
        <nav class = "navbar">
            <div class = "container flex">
                <a href = "index.html" class = "site-brand">
                Dream<span>Destination</span>
                </a>

                <button type = "button" id = "navbar-show-btn" class = "flex">
                    <i class = "fas fa-bars"></i>
                </button>
                <div id = "navbar-collapse">
                    <button type = "button" id = "navbar-close-btn" class = "flex">
                        <i class = "fas fa-times"></i>
                    </button>
                    <ul class = "navbar-nav">
                        <li class = "nav-item">
                            <a href = "/" class = "nav-link">Home</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "/" class = "nav-link">Gallery</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "/" class = "nav-link">Blog</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "/" class = "nav-link">About</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "/" class = "nav-link">Contact</a>

                        </li>
                        <li class="nav-item ">
          <a class="nav-link " href="#" role="button" aria-expanded="false">
           Admin
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
            <li><a class="dropdown-item" href="{{route('register')}}"> Register</a></li>
         
          </ul>
        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end of navbar  -->

        <!-- header -->
        @foreach($sliders as $slider)
        <header class = "flex bg-image"style="background-image: url({{ asset('uploads/slider/'.$slider->image)}});">
            <div class = "container">
                <div class = "header-title">
                
                    <h1>{{$slider->title}}</h1>
                   
                    <p>{{$slider->sub_title}}</p>
                </div>
                @endforeach
                <div class = "header-form">
                    <h2>Share Your Dream Destination With Us</h2>
                    <form class = "flex " action="/store" method="POST" >
                        @csrf
                        <input type = "text" name="name" class = "form-control" placeholder=" Name">
                        
                        <input type = "text" name="email" class = "form-control" placeholder="Email">
                        
                        <input type = "text" name="destination" class = "form-control" placeholder=" Destination">
                        <input type="submit" name="submit" class = "btn" value = "Submit">
                    </form>
                </div>
            </div>
        </header>
        <!-- header -->

        <!-- featured section -->
        <section id = "featured" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">know about some places before your travel</span>
                    <h2 class = "lg-title">featured places</h2>
                </div>

                <div class = "featured-row">
                    @foreach($features as $feature)
                    <div class = "featured-item my-2 shadow">
                        <img src = "{{ asset('uploads/feature/'.$feature->image)}}" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                               {{$feature->title}}
                            </span>
                            <div>
                                <p class = "text">{{$feature->sub_title}}</p>
                            </div>
                        </div>
                    </div>

              @endforeach
                </div>
            </div>
        </section>
        <!-- end of featured section -->

        <!-- services section -->
        <section id = "services" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">know about services that we offer</span>
                    <h2 class = "lg-title">Our services</h2>
                </div>

                <div class = "services-row">
                  
                    <div class = "services-item">
                        <span class = "services-icon">
                            <i class = "fas fa-map-marked-alt"></i>
                        </span>
                        <h3>Trave Guide</h3>
                        <p class = "text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quo, totam repellat velit, dignissimos sequi error a minima architecto fugit nisi dolorum repellendus?</p>
                        <a href = "#" class = "btn">Read more</a>
                    </div>

                    <div class = "services-item">
                        <span class = "services-icon">
                            <i class = "fas fa-money-bill"></i>
                        </span>
                        <h3>Suitable Price</h3>
                        <p class = "text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quo, totam repellat velit, dignissimos sequi error a minima architecto fugit nisi dolorum repellendus?</p>
                        <a href = "#" class = "btn">Read more</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of services section -->

        <!-- testimonials section -->
        <section id = "testimonials" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">what our clients say about us</span>
                    <h2 class = "lg-title">testimonials</h2>
                </div>

                <div class = "test-row">
                    @foreach($blogs as $blog)
                    <div class = "test-item">
                        <p class = "text">{{$blog->sub_title}}</p>
                        <div class = "test-item-info">
                            <img src = "{{ asset('uploads/blog/'.$blog->image)}}" alt = "testimonial">
                            <div>
                                <h3>{{$blog->title}}</h3>
                            </div>
                        </div>
                    </div>

                   @endforeach
                </div>
            </div>
        </section>
        <!-- end of testimonials section -->

        <!-- video section -->
        <section id = "video">
            <div class = "video-wrapper flex">
                @foreach($videos as $video)
                <video loop>
                    <source src = "{{ asset('uploads/video/'.$video->video)}}" type = "video/mp4">
                </video>
                @endforeach
                <button type = "button" id = "play-btn">
                    <i class = "fas fa-play"></i>
                </button>
            </div>
        </section>
        <!-- end of video section -->

        <!-- footer -->
        <footer class = "py-4">
            <div class = "container footer-row " >
                <div class = "footer-item">
                    <a href = "index.html" class = "site-brand">
                        Dream<span>Destination</span>
                    </a>
                    <p class = "text">Exploring the world can be a wonderful way to broaden your horizons, learn about diverse cultures, and gain a deeper appreciation for the beauty and complexity of our planet. But it's also important to find a balance between exploring externally and cultivating your internal world—your thoughts, emotions, and personal growth.</p>
                </div>

                <div class = "footer-item">
                    <h2>Follow us on: </h2>
                    <ul class = "social-links">
                        <li>
                            <a href = "#">
                                <i class = "fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <h2>Popular Places:</h2>
                    <ul>
                        <li><a href = "#">Thailand</a></li>
                        <li><a href = "#">Australia</a></li>
                        <li><a href = "#">Maldives</a></li>
                        <li><a href = "#">Switzerland</a></li>
                        <li><a href = "#">Germany</a></li>
                    </ul>
                </div>

                <div class = "subscribe-form footer-item">
                    <h2>Subscribe for Newsletter!</h2>
                    <form class = "flex">
                        <input type = "email" placeholder="Enter Email" class = "form-control">
                        <input type = "submit" class = "btn" value = "Subscribe">
                    </form>
                </div>
            </div>
        </footer>
        <!-- end of footer -->

        <!-- js -->
        <script src = "{{asset('frontend')}}/js/script.js"></script>
        <script>
            // play/pause video
            let video = document.querySelector('.video-wrapper video');
            document.getElementById('play-btn').addEventListener('mouseover', () => {
                if(video.paused){
                    video.play();
                } else {
                    video.pause();
                }
            });
        </script>
    </body>
</html>
