<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="images/icon.png">
    <link rel="stylesheet" type="text/css"  href="assets/css/style.css">
    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>amemeee</title> 
</head>  

<body style="background-color: #edf2f8;"> 
    <nav class="navbar navbar-dark bg-dark  fixed-top ">
        <div class="container-fluid " id="sourceDiv"  >
          <a class="navbar-brand" href="#"><b>AMEMEEE</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"></h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
              </ul>
              <form class="d-flex mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </div>
      </nav>
      <br><br><br><br><br><br>
      
      <div class="container container-space align-items-center " >
        <div class="row animate__animated animate__zoomIn">
            <div class="col-md-5">
                <!-- Image on the left -->
                <img src="images/amemeee.png" class="img-fluid rounded" alt="...">
            </div>
            <div class="col-md-7 d-flex align-items-center justify-content-center">
                <!-- Text on the right -->
                <div >
                    <h1><b>HELLO!</b></h1>
                    <span style="color:rgb(143, 12, 12);"><h2><b>I'M A SELF TAUGHT DEVELOPER. CURRENTLY, I'M FOCUSED ON THE BACKEND.</b></h2></span>
                    <p>An inclusive platform that promotes adoption and empowers the ecosystem with innovative solutions and tools. Powered by BNB Chain and Tezos.</p>
                    <button type="button" class="btn btn-danger">RESUME <i class="fa fa-download" aria-hidden="true"></i></button>
                    <button type="button" class="btn btn-danger">CV <i class="fa fa-download" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
    </div>

     <div class="container container-space">
      <h1 class="text-center"><b>MY PROJECT</b></h1>
      <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"><b>Home</b></button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false"><b>Arts</b></button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false"><b>Contact</b></button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
          <br>
          <div class="row row-cols-1 row-cols-md-6 g-4 justify-content-center">
            <div class="col">
              <div class="card">
                <img src="images/images1.gif" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p >xxx</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="images/images1.gif" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p >xxx</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="images/images1.gif" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p >xxx</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="images/images1.gif" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p >xxx</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
          <br>
          <div class="row row-cols-1 row-cols-md-6 g-4 justify-content-center">
            <div class="col">
              <div class="card">
                <img src="images/images1.gif" class="card-img-top" alt="...">
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="images/seishin.gif" class="card-img-top" alt="...">
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="images/seishin1.png" class="card-img-top" alt="...">
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="images/seishin3.png" class="card-img-top" alt="...">
              </div>
            </div>

            <div class="col">
              <div class="card">
                <img src="images/gumpunk.png" class="card-img-top" alt="...">
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="images/samurai.png" class="card-img-top" alt="...">
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="images/rabbit.jpg" class="card-img-top" alt="...">
              </div>
            </div>
            

          </div>
        </div>
        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
      </div>
    </div>
    
    {{-- <div class="container container-space">
      
    </div>
    <div class="container-fluid" style=" background-color:blue;">
    </div> --}}
    
    <!-- Add more containers as needed -->
    

      {{-- <div class="container-fluid">
        <img src="images/images1.gif" class="rounded mx-auto d-block shadow-lg" alt="...">
        <br>
        <h1><b><span style="color:rgb(0, 0, 0)">Hello!  I'm Amemeee</b></h1>
       
        <div style="margin:5px;text-align:center;padding:10px;" >
            <p>I'm a self taught developer. Currently. I'm focused on the frontend.</h1>
        <div>
      </div> --}}

      
      <div class="container-fluid" style="background-color:black">
        <br><br>
        <h1 class="text-center" style="color:white;"><b>TECNHOLOGIES I'VE BEEN WORKING WITH</b></h1>
        {{-- <h1><b><span style="color:rgb(143, 12, 12)">Technologies</span>  I’ve Been Working With</h1> --}}
          <br>
            <div class="d-flex justify-content-center" >
              <img src="https://companyurlfinder.com/marketing/assets/img/logos/laravel.com.png" style="max-width:50px;height:auto;margin:0px 5px 0px 5px;" class="rounded img-fluid" alt="...">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/React-icon.svg/1150px-React-icon.svg.png" style="max-width:50px;height:auto;margin:0px 5px 0px 5px;" class="rounded img-fluid" alt="...">
              <img src="https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-png-transparent.png" style="max-width:50px;height:auto;margin:0px 5px 0px 5px;" class="rounded img-fluid" alt="...">
              <img src="https://cdn.pixabay.com/photo/2017/08/05/11/16/logo-2582748_640.png" style="max-width:50px;height:auto;margin:0px 5px 0px 5px;" class="rounded img-fluid" alt="...">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6a/JavaScript-logo.png/640px-JavaScript-logo.png" style="max-width:50px;height:auto;margin:0px 5px 0px 5px;" class="rounded img-fluid" alt="...">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Github-desktop-logo-symbol.svg/2048px-Github-desktop-logo-symbol.svg.png" style="max-width:50px;height:auto;margin:0px 5px 0px 5px;" class="rounded img-fluid" alt="...">
            </div>
            <br><br>
      </div>
      <br><br>

      {{-- <div class="container">
        <br><br>
        <h3 class="text-center" ><b>LET'S CONNECT</b></h3>
          <br>
            <div class="d-flex justify-content-center" >
              <img src="https://companyurlfinder.com/marketing/assets/img/logos/laravel.com.png" style="max-width:50px;height:auto;margin:0px 5px 0px 5px;" class="rounded img-fluid" alt="...">
              <img src="https://companyurlfinder.com/marketing/assets/img/logos/laravel.com.png" style="max-width:50px;height:auto;margin:0px 5px 0px 5px;" class="rounded img-fluid" alt="...">
              <img src="https://companyurlfinder.com/marketing/assets/img/logos/laravel.com.png" style="max-width:50px;height:auto;margin:0px 5px 0px 5px;" class="rounded img-fluid" alt="...">
            </div>
            <br><br>
      </div>
      <br><br> --}}
      
      
    
</body>

<footer>
    <div class="container-fluid" >
      <p class="text-center" ><b>Muhammad Amin</b><br>[Backend Developer]</p>
      <div class="d-flex justify-content-center" >
        <i class="fa fa-envelope" aria-hidden="true" style="margin:0px 5px 0px 5px;" ></i>
        <i class="fa fa-linkedin" aria-hidden="true" style="margin:0px 5px 0px 5px;"></i>
        <i class="fa fa-github" aria-hidden="true" style="margin:0px 5px 0px 5px;" ></i>
      </div>
      <br>
      <p class="text-center" >&copy; {{ date('Y') }} Copyright Amemeee. All Rights Reserved</p>
      <br>
    </div>
</footer>
</html>

{{-- <script>
$(document).ready(function() {
    var sourceContent = $('#sourceDiv').html(); // Store the sourceDiv content

    $(window).scroll(function() {
        var scroll = $(window).scrollTop(); // Get the scroll position
        var targetPosition = $('#targetDiv').offset().top;

        if (scroll >= targetPosition) {
            $('#targetDiv').append(sourceContent); // Move content to targetDiv
            $('#sourceDiv').hide();
        } else {
            $('#sourceDiv').show();
            $('#targetDiv').empty(); // Remove content from targetDiv
        }
    });
});

</script> --}}