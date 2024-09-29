<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equi="X-UA-Compatible" content="IE=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>SUGAR Daddy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Translucent Navbar Example</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: rgba(255, 255, 255, 0.5); /* Translucent white */
        }
    </style>
      <style>
          *{
              font-family: 'Poppins' , sans-serif;
          }
          .h-font{
              font-family: 'Merienda', cursive;
          }
          input: :-webkit-outer-spin-button,
          input: :-webkit-inner-spin-button {

              -webkit-appearance: none;
              margin: 0;
          
          }

          input[type=number] {
              -moz-appearance: textfield;
          }
          .custom-bg{
              background: color #2ec1ac;
          }

          .custom-bg:hover{
              background: color #279e8c;
          }
      </style>    



</head>
<body>

<!--NAVBAR-->

<nav class="navbar navbar-expand-lg navbar-light px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">SUGAR Daddy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="#">Home-page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="#">Insulin Schedule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="#">Lifestyle</a>
                </li>
                <li class="nav-item">
                    <!--<a class="nav-link me-2" href="#"><div class="button-container">
                        <a href="https://www.youtube.com" target="_blank" class="btn btn-primary">Awareness</a>
                    </div></a>-->
                    <div class="button-container">
                        <a href="https://www.youtube.com/watch?v=YOUR_VIDEO_ID" target="_blank" class="btn btn-primary">Awareness</a>
                    </div>

                    

                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="#">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profile
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Register</a></li>
                        <div class="d-flex">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Register 
                </button>

                        <li><a class="dropdown-item" href="#">Patient Log-In</a></li>


                        <li><a class="dropdown-item" href="#">Doctor Log-In</a></li>


                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>

            <div class="d-flex">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Log-in 
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">
                    Register 
                </button>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    </nav> 

    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="">
        <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-hearts" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M11.5 1.246c.832-.855 2.913.642 0 2.566-2.913-1.924-.832-3.421 0-2.566M9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4m13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276ZM15 2.165c.555-.57 1.942.428 0 1.711-1.942-1.283-.555-2.281 0-1.71Z"/>
        </svg>
            User Log-in

        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">login number</label>
        <input type="test" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Gentle reminder to always maintain acadmic honesty .Any kind of malpractice will not be tolerated under any circumstances.

        </div>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div>
            <button type="submit" class="btl b">Log-In</button>
            <a href="javascript: void(0)">Forgot Password</a>

        </div>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal_lg">
    <div class="modal-content">
        <form action="">
        <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-hearts" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M11.5 1.246c.832-.855 2.913.642 0 2.566-2.913-1.924-.832-3.421 0-2.566M9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4m13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276ZM15 2.165c.555-.57 1.942.428 0 1.711-1.942-1.283-.555-2.281 0-1.71Z"/>
        </svg>
            User Registration

        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" id="name" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" class="form-control" id="phone" required>
        </div>
        <div class="form-group">
            <label for="diabetesType">Diabetes Type</label>
            <select class="form-control" id="diabetesType" required>
                <option value="" disabled selected>Select Type</option>
                <option value="type1">Type 1</option>
                <option value="type2">Type 2</option>
            </select>
        </div>
        <div class="form-group">
            <label for="sinceWhen">Since When (Year)</label>
            <input type="text" class="form-control" id="sinceWhen" placeholder="e.g., 2020" required>
        </div>
        <div class="form-group">
            <label for="doctors">Current/Past Doctors</label>
            <textarea class="form-control" id="doctors" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="medicalHistory">Medical History</label>
            <textarea class="form-control" id="medicalHistory" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" class="form-control" id="age" required>
        </div>
        <div class="form-group">
            <label>Gender</label>
            <div>
                <label class="form-check-label mr-3">
                    <input type="radio" name="gender" value="male" required> Male
                </label>
                <label class="form-check-label">
                    <input type="radio" name="gender" value="female" required> Female
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="diet">Diet Preference</label>
            <select class="form-control" id="diet" required>
                <option value="" disabled selected>Select Preference</option>
                <option value="veg">Vegetarian</option>
                <option value="non-veg">Non-Vegetarian</option>
            </select>
        </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
      

        </div>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

        </div>
        <div>
            <button type="submit" class="btl b">Register</button>
            <a href="javascript: void(0)">Confirm Password</a>

        </div>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- images -->
<!--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://i.pinimg.com/564x/00/ea/65/00ea658228ba99e3a23d8a517da2d8e7.jpg" class="d-block w-100" alt="Slide 1">
            <div class="carousel-caption d-none d-md-block">
                <h5>First Slide</h5>
                <p>Description for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://via.placeholder.com/800x400?text=Slide+2" class="d-block w-100" alt="Slide 2">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second Slide</h5>
                <p>Description for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://via.placeholder.com/800x400?text=Slide+3" class="d-block w-100" alt="Slide 3">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third Slide</h5>
                <p>Description for the third slide.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>-->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2500">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://images.pexels.com/photos/5469165/pexels-photo-5469165.jpeg?auto=compress&cs=tinysrgb&w=800&h=400&dpr=2" class="d-block w-100" alt="Slide 1">
            <div class="carousel-caption d-none d-md-block">
                <h5>First Slide</h5>
                <p>Description for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://images.pexels.com/photos/17072086/pexels-photo-17072086/free-photo-of-a-person-holding-a-blood-glucose-meter-on-a-table.jpeg" class="d-block w-100" alt="Slide 2">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second Slide</h5>
                <p>Description for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://images.pexels.com/photos/6823410/pexels-photo-6823410.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="d-block w-100" alt="Slide 3">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third Slide</h5>
                <p>Description for the third slide.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!--<div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="https://diabesmart.in/cdn/shop/articles/what-is-the-price-of-insulin-injection_1024x.png?v=1715191576" class ="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="https://i.ytimg.com/vi/prFYht1NwmU/maxresdefault.jpg" class ="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="https://www.breakthrought1d.org/wp-content/uploads/2023/08/insulin-injection-tips.jpg" class ="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="https://thumbs.dreamstime.com/z/diabetes-hospital-isometric-composition-medical-treatment-nurse-giving-insulin-injection-to-patient-girl-vector-120273906.jpg" class ="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="https://www.drwf.org.uk/media/wdcofqsq/injection-pen-with-needle.jpg?center=0.673146441088387,0.489979936985788&mode=crop&width=1200&height=630&rnd=133644018985000000" class ="w-100 d-block" />
          </div>
        </div>
      </div>
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
      <script>
        var swiper = new Swiper(".swiper-container", {
          spaceBetween: 30,
          effect: "fade",
          loop: true,
          autoplay: {
            delay: 3500,
            disableOnInteraction: false,
          }
        });
      </script>

<div class= "container availability-form">
</div>-->



<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

<div class="container">
  <div class="row justify_content_evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/wifi.svg" width="80px">
      <h5 class="mt-3">Sugar tracking System</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/wifi.svg" width="80px">
      <h5 class="mt-3">Insulin schedule</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/wifi.svg" width="80px">
      <h5 class="mt-3">Community</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/wifi.svg" width="80px">
      <h5 class="mt-3">Customized diet plans</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/wifi.svg" width="80px">
      <h5 class="mt-3"> </h5>
    </div>
  </div>
</div>

<!--Our Rooms-->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR PLANS</h2>
<div class="container">
  <div class="row justify_content_evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-4 col-md-6 text-center bg-white rounded shadow py-4 my-3">
        <div class="card border-0 shadow " style="max-width: 350px; margin: auto;">
      <img src="https://i.pinimg.com/564x/f6/d9/7c/f6d97cd053caafe7274f22279c0f8a53.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">STANDARD</h5>


        
        <p class="card-text">Health plans</p>
        <p class="card-text">Booking Appointments</p>
        <p class="card-text">Life-style suggestions</p>
        <a href="#" class="btn btn-primary">FREE</a>
      </div>
    </div>
      <h5 class="mt-3">PLAN 1</h5>
    </div>
        <div class="col-lg-4 col-md-6 text-center bg-white rounded shadow py-4 my-3">
        <div class="card border-0 shadow " style="max-width: 350px; margin: auto;">
            <img src="https://i.pinimg.com/564x/6c/2e/a6/6c2ea639e2ca59bded7d91e56c27aec0.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">PREMIUM</h5>
        <div class ="featrures mb-4"> <h6 class = "mb-1"> features</h6>
        <span class ="badge rounded-spill bg-light text-dark text-wrap"> 
            ALL STANDARD FEATURES 
        </span>
        <span class ="badge rounded-spill bg-light text-dark text-wrap"> 
            Personalised Tests 
        </span>
        <span class ="badge rounded-spill bg-light text-dark text-wrap"> 
           Access to community 
        </span>

    
        <h6 class="featrures mb-4">
        <p class="card-text"></p>
        <a href="#" class="btn btn-primary">PAY($9.99)</a>
      </div>
    </div>
      <h5 class="mt-3">PLAN 2</h5>
    </div>
    
  </div>

</div>

<br><br><br>
<br><br><br>


<!--check avaiability form -->
<div class = "container">
    <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5>Schedule your doctor's Appointment</h5>
        <form>
            <div class="row">
                <div class ="col-lg-3">
                    <label class = "form-label" style="font-weight: 500 ;"> Check-in </label>
                    <input type="date" class = "form-control shadow-none">
                </div>
                <div class ="col-lg-3">
                    <label class = "form-label" style="font-weight: 500 ;"> Check-out </label>
                    <input type="date" class = "form-control shadow-none">
                </div>

                <!--<div class="col-lg-3">
                    <label class="form-label" style="font-weight: 500;">Students</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>-->

                <div class="col-lg-1">
                    <button type="submit" class="btn text-black shadow-none custom-bg">Submit</button>
                </div>
            </div>
        </form>      
    </div>
</div>


div class="container-fluid bg-white mt-5">
    <div class="row">
      <div class="col-lg-4 p-4">
  
      </div>
      <div class="col-lg-4 p-4">
        <h3 class="h-font fw-bold fs-3 mb=2 ">VENUE Booking</h3>
        <p>
          Gentle reminder to always maintain acadmic honesty .Any kind of malpractice will not be tolerated under any circumstances.
        </p>
      </div>
      <div class="col-lg-4 p-4">
        <h5class= "mb-3">Links</h5>
        <a href="#"class="d-inline-block mb-2 text-dark text-decoration-none">Home-page</a>
        <a href="#"class="d-inline-block mb-2 text-dark text-decoration-none">Venue</a>
        <a href="#"class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a>
        <a href="#"class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a>
        <a href="#"class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
  
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>    
</html>   