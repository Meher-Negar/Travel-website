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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <!-- navbar  -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dream</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="/" tabindex="-1" aria-disabled="true">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
        <!-- end of navbar  -->
<div class="container my-4">
    <br><br><br>
    <div class="row justify-content-center my-4 ">
        <div class="col-lg-8 my-3">
            <div class="card">
                <div class="card-header">
                    <div class="card-title text-center">
                        <h3>Congratulations!</h3>
                    </div>
                </div>
                <div class="card-body">
                    <h5>It was great to receive the Information about your Dream Destination.If we ever plan to travel here you will be notified by email.</h5>
                </div>
            </div>
        </div>
    </div>
</div>
         <!-- end of footer -->

        <!-- js -->
        <script src = "{{asset('frontend')}}/js/script.js"></script>
        <script>
            // play/pause video
            let video = document.querySelector('.video-wrapper video');
            document.getElementById('play-btn').addEventListener('click', () => {
                if(video.paused){
                    video.play();
                } else {
                    video.pause();
                }
            });
        </script>
    </body>
</html>
