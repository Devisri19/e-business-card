<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8T94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMbZhN6O8fRfFjwEAq6LvXTJ91HD4Jb8HPC3JzR" crossorigin="anonymous">

</head>


<body>
    
<nav class="navbar navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
      <img class="logo" src="assets/images/logo.png" alt="Logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"> 
                <i class="fa fa-home" aria-hidden="true"></i>Home</a>
            </li>
           
            <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa fa-user" aria-hidden="true"></i> User
  </a>
  <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
    <li><a class="dropdown-item" href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
    <li><a class="dropdown-item" href="register.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a></li>
    <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
  </ul>
</li>
        </div>
      </div>
    </div>
  </nav>


  <section id="home">
    <div class="container">
        <h1><b>Digital Business Card</b></h1>
        <h4>A smart business card is the best & easy solution to share your contact information instantly!</h4>
        <br>
        <a href="login.php">
          <button class="create-card-btn"style="background-color: coral; /* Green color, change it as needed */
    color: white;">Create A Digital Business Card</button>
        </a>
        <a href="#">
        <button class="template-btn"  style=" background-color: transparent; 
    color: black; 
    border: 2px solid #000;">Start with A Template</button>
        </a>
    </div>
</section>


<section id="featured" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5">
        <h2>Steps to Create Electronic Business Card</h2>
        <br>
        <h5>Here’s how you can make a digital business card with the help of this free-to-use DIY tool.</h4>
    </div>
    <div class="row mx-auto container-fluid">
        <div class="product col-lg-4 col-md-12 col-sm-12">
            <img class="img-fluid mb-3 d-block mx-auto" src="assets/images/1.webp" />
            <div style="text-align: center; "> <h4 class="p-name">01. Start by choosing a suitable template</h4>
        </div>
        </div>
        <div class="product col-lg-4 col-md-12 col-sm-12">
            <img class="img-fluid mb-3 d-block mx-auto" src="assets/images/2.webp" />
            <div style="text-align: center; ">  <h4 class="p-name">02. Add your details & contact options</h4>
        </div>
        </div>
        <div class="product col-lg-4 col-md-12 col-sm-12">
            <img class="img-fluid mb-3 d-block mx-auto" src="assets/images/3.webp" />
            <div style="text-align: center; ">  <h4 class="p-name">03. Publish or share with people</h4>
        </div>
        </div>
    </div>
    <div style="text-align: center;">
      <a href="login.php">
        <button class="buy-btn">CREATE A DIGITAL BUSINESS CARD</button>
      </a>
    </div>
</section>

<section style="background: linear-gradient(135deg,rgb(2, 9, 88),rgb(21, 3, 88)); padding: 50px 0;">
 
      <div style="text-align: center;">
     <h2 style="color: white;"><b>Check out our trending digital business card templates</b></h2>
      </div>
   <hr>
    </div>
    <div class="container text-center mt-5 py-5">
    <div class="container">
        <br>
        <div class="row mx-auto container-fluid">
            <div class="product col-lg-12 col-md-12 col-sm-12">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <!-- First Slide with 3 images -->
          <div class="carousel-item active">
            <div class="row">
              <div class="col-4">
                <img src="assets/images/card1.png" class="d-block w-100 img-size" alt="Image 1" style="width: 200px; height: auto;">
                <div class="carousel-caption">
                  <a href="login.php">
                    <button>Use this template</button>
                  </a>
                </div>
              </div>
              <div class="col-4">
                <img src="assets/images/Screenshot (266).png" class="d-block w-100 img-size" alt="Image 2" style="width: 200px; height: auto;">
                <div class="carousel-caption">
                  <a href="login.php">
                    <button>Use this template</button>
                  </a>
                </div>
              </div>
              <div class="col-4">
                <img src="assets/images/card2.png" class="d-block w-100 img-size" alt="Image 3"style="width: 200px; height: auto;">
                <div class="carousel-caption">
                  <a href="login.php">
                    <button>Use this template</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Second Slide with 3 images -->
          <div class="carousel-item">
            <div class="row">
              <div class="col-4">
                <img src="assets/images/card1.png" class="d-block w-100 img-size" alt="Image 1"style="width: 200px; height: auto;">
                <div class="carousel-caption">
                  <a href="login.php">
                    <button>Use this template</button>
                  </a>
                </div>
              </div>
              <div class="col-4">
                <img src="assets/images/Screenshot (266).png" class="d-block w-100 img-size" alt="Image 2"style="width: 200px; height: auto;">
                <div class="carousel-caption">
                  <a href="login.php">
                    <button>Use this template</button>
                  </a>
                </div>
              </div>
              <div class="col-4">
                <img src="assets/images/card2.png" class="d-block w-100 img-size" alt="Image 3"style="width: 200px; height: auto;">
                <div class="carousel-caption">
                  <a href="login.php">
                    <button>Use this template</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="Watches" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5">
        <h2>Best Digital Business Card Maker</h2>
        <br>
        <h5>Create virtual business cards easily for yourself or your team using digital business card maker online tool, and impress your contacts to capture more leads</h5>
   
    </div>
    <div class="row mx-auto container-fluid">
        <div class="product col-lg-6 col-md-6 col-sm-12">
            <h4><b>What is a digital business card</b></h4>
            <p>Virtual business cards are more than just a tool to help people reach you. It works as your personal brand builder. Every time you hand it out to a potential client, prospect, or customer, it informs them who you are or what business you’re involved in.</p>
            <p>But how do digital business cards do that? It carries all the required information one needs to contact you. Unlike physical cards, these cards are affordable, convenient, and sustainable. Explore a library of pre-created digital business card templates, adjust the elements like background save, and share.</p>
            <p>The process is simple for all. And when you share the digital business card, it starts building your brand identity.</p>
        </div>
        <div class="product col-lg-6 col-md-6 col-sm-12">
            <img class="img-fluid mb-3" src="assets/images/4.webp" />
        </div>
    </div>
   <div style="text-align: center; "> 
    <a href="login.php">
    <button class="buy-btn">DESIGN YOUR BUSINESS CARD</button>
    </a>
</div>
</section>
<section id="banner" class="my-5 py-5">
    <div class="container">
        <h1>Create Your Custom Digital Card For Free!</h1>
        <h4>Use this free tool to make your custom and ready to use digital card for your professional use</h1>
        <button class="text-uppercase">Make a Digital Business card</button>
    </div> 
</section>
<section id="Watches" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5">
        <h2>A digital business card has many benefits!</h2>
        <h6>Designhill digital business card is a professional & modern way to connect</h6>
    </div>

    <div class="row justify-content-end">
        <div class="col-lg-4 col-md-4 col-sm-12">
      
            <img class="img-fluid mb-3 d-block mx-auto" src="assets/images/5.webp" style="width: 200px; height: auto;" />
            <div style="text-align: center; "> <h4 class="p-name"> Create & customize</h4>
            </div>   
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <img class="img-fluid mb-3 d-block mx-auto" src="assets/images/6.webp" style="width: 200px; height: auto;" />
            <div style="text-align: center; "><h4 class="p-name">Share anywhere, anytime</h4>
        </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <img class="img-fluid mb-3 d-block mx-auto" src="assets/images/7.webp" style="width: 200px; height: auto;" />
            <div style="text-align: center; "> <h4 class="p-name">Save money & environment</h4>
        </div>
        </div>
    </div>
</section>


<footer class="mt-5 py-5">
    <div class="row container mx-auto pt-5">
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <img class="logo" src="assets/images/logo.png" alt="Logo">
            <p class="pt-3">We provide the best products for the most affordable prices</p>
        </div>
        <div class="footer-one col-lg-3 col-md-4 col-sm-12">
            <h5 class="pb-2">Featured</h5>
            <ul class="text-uppercase">
                <li><a href="#">Business Card Maker</a></li>
                <li><a href="#">Email Signature Generator</a></li>
                <li><a href="#">Logo Maker</a></li>
                <li><a href="#">Gift Cards</a></li>
            </ul>
        </div>
        <div class="footer-one col-lg-3 col-md-4 col-sm-12">
            <h5 class="pb-2">Helpful Links</h5>
            <ul class="text-uppercase">
                <li><a href="#">Cookies</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Copyright</a></li>
                <li><a href="#">Terms</a></li>
            </ul>
        </div>
        <div class="footer-one col-lg-3 col-md-4 col-sm-12">
            <h5 class="pb-2">Follow Us</h5>
            <ul class="social-links">
                <a href="#"> <i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                <a href="#"> <i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                <a href="#"> <i class="fa fa-instagram-square" aria-hidden="true"></i></a>
                <a href="#"> <i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
                <a href="#"> <i class="fa fa-github-square" aria-hidden="true"></i></a>
                <a href="#"> <i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
            </ul>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb7lK8kh6gFhOHfG9XyQllhBNoP4f5cpk/tf5sM6oYpUQ6R5lh" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-FTW0tVZ09BBDBH5tygqAp4Ht8Yw2eYdpS5EMO6q2lhm5jw5r5jQ1z3rZ3DQKhkq6" crossorigin="anonymous"></script>

</body>
</html>