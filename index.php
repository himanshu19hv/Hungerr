<?php
session_start();
ob_start();
$register_error=False;
?><!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hungerr.in</title>
    <meta chaRs.et="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="images/favicon.jpg"/>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    

    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
  .rv1, .rv1:focus, .rv1:hover, .rv1:active{    width: -webkit-fill-available;
    height: -webkit-fill-available;
    text-align: center;
    margin-left: 12px;
  border:none;
  outline:none;}
  
  .dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
  </style>
  <body class="animsition">
  <script type="text/javascript">
  function passwordError(){
    alert("Error:- Password does not match.");
  }
  function phoneError(){
    alert("Error:- Invalid phone number.");
  }
  function emailError(){
    alert("Error:- Invalid Email address.");
  }
  function modal(){
      // Get the modal
      var modal = document.getElementById('error_Modal');
      // When the user clicks the button, open the modal
      modal.style.display = "block";
      function show_modal(){modal.style.display = "none";} 
      setTimeout(show_modal, 3000);
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
    }

  </script>
  <style>
  .imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

  </style>
  </head>
  <body data-spy="scroll" data-target="#site-navbar" data-offset="200">
    
    <nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img class="navbar-brand" src="images/favicon.PNG" alt="IMG-LOGO">Hungerr</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span>Menu 
        </button>

        <div class="collapse navbar-collapse" id="site-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="#section-home" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#section-offer" class="nav-link">OfferS</a></li>
            <li class="nav-item"><a href="#section-menu" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="#section-gallery" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="#section-contact" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
            <li class="nav-item"><?php authStatus();?></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="site-cover" style="background-image: url(images/bg_3.jpg);" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center site-vh-100">
          <div class="col-md-12">
            <h1 class="site-heading site-animate mb-3">Welcome To Hungerr</h1>
            <?php UsernameHeader()?>
            <h2 class="h5 site-subheading mb-5 site-animate">Wanna eat out without waiting?? Book a table right away and grab your dishes on your convenient time.!!</h2>    
            <p><a href="https://hungerr.com/" target="_blank" class="btn btn-outline-white btn-lg site-animate" data-toggle="modal" data-target="#reservationModal">BOOK TABLE</a></p>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="site-section" id="section-about">
      <div class="container">
        <div class="row">
          <div class="col-md-5 site-animate mb-5">
            <h4 class="site-sub-title">Our Story</h4>
            <h2 class="site-primary-title display-4">Welcome</h2>
            <p>We at Hungerr.co.in are one of the Delhi based startups, who have a vision of providing home based services to those who strugle for time to run out and look out for places to have fine dinning restaurants, pubs, and clubs. Our aim is to provide our customers a completely digital and home based experience of dinning and catering services without any hussles.</p>

            <p class="mb-4">We are currently growing in Delhi/NCR, soon we will be expanding our services to other metropolitan cities as well. Any suggestions or complaints are welcome.</p>
            <p><a href="about us.html" class="btn btn-secondary btn-lg">Learn More About Us</a></p>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 site-animate img" data-animate-effect="fadeInRight">
            <img src="images/about.jpg" alt="Hungerr_resources" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    

    <section class="site-section bg-light" id="section-offer">
      <div class="container">
        
        <div class="row">
          <div class="col-md-12 text-center mb-5 site-animate">
            <h4 class="site-sub-title">Our OffeRs.</h4>
            <h2 class="display-4">Our Offer This Summer</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">BOOM!!! Here comes another set of Indian masala dishes from our most famous restaurants. Now you can make pre-bookings for your orders on your favorite restaurants at your convenient time.</p>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel site-owl">

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/offer_1.jpg" alt="Hungerr_resources" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary">Rs.190.50</h5>
                    <h5 class="mt-0 h4">Masala Chicken with Sausage</h5>
                    <p class="mb-4">Loves the smell of chicken?? Give it a try!!!.</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/offer_2.jpg" alt="Hungerr_resources" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary">Rs.29.50</h5>
                    <h5 class="mt-0 h4">Egg with Garlic </h5>
                    <p class="mb-4">Now get Egg dishes @ just Rs. 29.50.</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                  </div>
                </div>
              </div>
              
              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/offer_3.jpg" alt="Hungerr_resources" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary">Rs.11.50</h5>
                    <h5 class="mt-0 h4">Special Chowmein</h5>
                    <p class="mb-4">What to expect in just @11.50.?? Now, get Special Chawmeen from our best restaurant at such a low cost.</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/offer_1.jpg" alt="Hungerr_resources" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary">Rs.133.50</h5>
                    <h5 class="mt-0 h4">Mix Veg Special Dish</h5>
                    <p class="mb-4">There's a special cheff named **** who cooks a special dish named ****. Reveal the info @ just rs.133.50</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/offer_2.jpg" alt="Hungerr_resources" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary">Rs.102.50</h5>
                    <h5 class="mt-0 h4">Fresh Salmon Fish</h5>
                    <p class="mb-4">Superr fresh fish @ just Rs 102.50 at your favorite restaurant.</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/offer_1.jpg" alt="Hungerr_resources" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary">Rs.220.50</h5>
                     <h5 class="mt-0 h4">Masala Chicken with Sausage</h5>
                    <p class="mb-4">Loves the smell of chicken?? Give it a try!!!.</p>
                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/offer_2.jpg" alt="Hungerr_resources" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary">Rs.102.50</h5>
                    <h5 class="mt-0 h4">Fresh Salmon Fish</h5>
                    <p class="mb-4">Superr fresh fish @ just Rs 102.50 at your favorite restaurant.</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                  </div>
                </div>
              </div>
              
              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/offer_3.jpg" alt="Hungerr_resources" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary">Rs.133.50</h5>
                    <h5 class="mt-0 h4">Mix Veg Special Dish</h5>
                    <p class="mb-4">There's a special cheff named **** who cooks a special dish named ****. Reveal the info @ just rs.133.50</p>

                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                  </div>
                </div>
              </div>

            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section" id="section-menu">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Delicious Menu</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
              	<h2>Do you often get confused while ordering your food at your favorite restaurant??</h2>
                <p class="lead">Now you have all the time in the world to choose your favorite dishes from the menu of your favorite restaurant.</p>
              </div>
            </div>
          </div>

          <div class="col-md-12 text-center">

            <ul class="nav site-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
              <li class="nav-item site-animate">
                <a class="nav-link active" id="pills-breakfast-tab" data-toggle="pill" href="#pills-breakfast" role="tab" aria-controls="pills-breakfast" aria-selected="true">Breakfast</a>
              </li>
              <li class="nav-item site-animate">
                <a class="nav-link" id="pills-lunch-tab" data-toggle="pill" href="#pills-lunch" role="tab" aria-controls="pills-lunch" aria-selected="false">Lunch</a>
              </li>
              <li class="nav-item site-animate">
                <a class="nav-link" id="pills-dinner-tab" data-toggle="pill" href="#pills-dinner" role="tab" aria-controls="pills-dinner" aria-selected="false">Dinner</a>
              </li>
            </ul>

            <div class="tab-content text-left">
              <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab">
                <div class="row">
                  <div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Hungerr_resources">
                      <div class="media-body">
                        <h5 class="mt-0">Salted Fried Chicken</h5>
                        <p>Can you smell the odor of that yummy chicken?? Well you need to book a table first.</p>
                        <h6 class="text-primary menu-price">Rs.350.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Hungerr_resources">
                      <div class="media-body">
                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                        <p>Bored of Indian food?? try Italian .</p>
                        <h6 class="text-primary menu-price">Rs.204.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Hungerr_resources">
                      <div class="media-body">
                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                        <p>Wanna try Fried Potato from the famous XYZ restaurant??</p>
                        <h6 class="text-primary menu-price">Rs.60.50</h6>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Hungerr_resources">
                      <div class="media-body">
                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                        <p>Bored of Indian food?? try Italian .</p>
                        <h6 class="text-primary menu-price">Rs.204.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Hungerr_resources">
                      <div class="media-body">
                        <h5 class="mt-0">Salted Fried Chicken</h5>
                        <p>Can you smell the odor of that yummy chicken?? Well you need to book a table first.</p>
                        <h6 class="text-primary menu-price">Rs.350.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Hungerr_resources">
                      <div class="media-body">
                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                        <p>Wanna try Fried Potato from the famous XYZ restaurant??</p>
                        <h6 class="text-primary menu-price">Rs.60.50</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab">
                <div class="row">
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Hungerr_resources">
                      <div class="media-body">
                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                        <p>Wanna try Fried Potato from the famous XYZ restaurant??</p>
                        <h6 class="text-primary menu-price">Rs.60.50</h6>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-dinner" role="tabpanel" aria-labelledby="pills-dinner-tab">
                <div class="row">
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Hungerr_resources">
                      <div class="media-body">
                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                        <p>Bored of Indian food?? try Italian .</p>
                        <h6 class="text-primary menu-price">Rs.204.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Hungerr_resources">
                      <div class="media-body">
                        <h5 class="mt-0">Salted Fried Chicken</h5>
                        <p>Can you smell the odor of that yummy chicken?? Well you need to book a table first.</p>
                        <h6 class="text-primary menu-price">Rs.350.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Hungerr_resources">
                      <div class="media-body">
                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                        <p>Wanna try Fried Potato from the famous XYZ restaurant??</p>
                        <h6 class="text-primary menu-price">Rs.60.50</h6>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Hungerr_resources">
                      <div class="media-body">
                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                        <p>Wanna try Fried Potato from the famous XYZ restaurant??</p>
                        <h6 class="text-primary menu-price">Rs.60.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Hungerr_resources">
                      <div class="media-body">
                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                        <p>Bored of Indian food?? try Italian .</p>
                        <h6 class="text-primary menu-price">Rs.204.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Hungerr_resources">
                      <div class="media-body">
                        <h5 class="mt-0">Salted Fried Chicken</h5>
                        <p>Can you smell the odor of that yummy chicken?? Well you need to book a table first.</p>
                        <h6 class="text-primary menu-price">Rs.350.50</h6>
                      </div>
                    </div>

                    
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section" id="section-gallery">
      <div class="container">
        <div class="row site-custom-gutteRs.">

          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Gallery</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Are you kind of foody and moody at the same time?? Try the most beautiful dinning destinations for your food.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 site-animate">
            <a href="images/menu_1.jpg" class="site-thumbnail image-popup">
              <img src="images/menu_1.jpg" alt="Hungerr_resources" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="images/menu_2.jpg" class="site-thumbnail image-popup">
              <img src="images/menu_2.jpg" alt="Hungerr_resources" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="images/menu_3.jpg" class="site-thumbnail image-popup">
              <img src="images/menu_3.jpg" alt="Hungerr_resources" class="img-fluid">
            </a>
          </div>

          <div class="col-md-4 site-animate">
            <a href="images/menu_2.jpg" class="site-thumbnail image-popup">
              <img src="images/menu_2.jpg" alt="Hungerr_resources" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="images/menu_3.jpg" class="site-thumbnail image-popup">
              <img src="images/menu_3.jpg" alt="Hungerr_resources" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="images/menu_1.jpg" class="site-thumbnail image-popup">
              <img src="images/menu_1.jpg" alt="Hungerr_resources" class="img-fluid">
            </a>
          </div>

        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section bg-light" id="section-contact">
      <div class="container">
        <div class="row">

          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Get In Touch</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">if you own a restaurant and wanna tie up with us, please write us at business@hungerr.co.in, or make a call @971732005. Please feel free to reach us out in case of any enquiries or any complaints.</p>
              </div>
            </div>
          </div>

          <div class="col-md-7 mb-5 site-animate">
            <form action="" method="post">
              <div class="form-group">
                <label for="name" class="sr-only">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="email" class="sr-only">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="message" class="sr-only">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write your message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" value="Send Message">
              </div>
            </form>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-4 site-animate">
            <p><img src="images/about.jpg" alt="" class="img-fluid"></p>
            <p class="text-black">
              Address: <br> L-1/43 Mohan Garden Uttam Nagar<br> New Delhi - 110059 <br> <br>
              Phone: <br> +91 971 732 7005 <br> <br>
              Email: <br> <a href="mailto:info@hungerr.co.in">info@hungerr.in</a>
            </p>

          </div>
          
        </div>
      </div>
    </section>
    <div id="map"></div>
    <!-- END section -->
    

    <footer class="site-footer site-bg-dark site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-4 site-animate">
                <h2 class="site-heading-2">About Us</h2>
                <p>We at Hungerr.co.in are one of the Delhi based startups, who have a vision of providing home based services to those who strugle for time to run out and look out for places to have fine dinning restaurants, pubs, and clubs. Our aim is to provide our customers a completely digital and home based experience of dinning and catering services without any hussles.</p>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3 site-animate">
                <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2">The Restaurant</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">About Us</a></li>
                    <li><a href="#" class="py-2 d-block">Chefs</a></li>
                    <li><a href="#" class="py-2 d-block">Events</a></li>
                    <li><a href="#" class="py-2 d-block">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-2 site-animate">
                 <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2">Useful links</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">Foods</a></li>
                    <li><a href="#" class="py-2 d-block">Drinks</a></li>
                    <li><a href="#" class="py-2 d-block">Breakfast</a></li>
                    <li><a href="#" class="py-2 d-block">Brunch</a></li>
                    <li><a href="#" class="py-2 d-block">Dinner</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-2 site-animate">
                 <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2">Useful links</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">Foods</a></li>
                    <li><a href="#" class="py-2 d-block">Drinks</a></li>
                    <li><a href="#" class="py-2 d-block">Breakfast</a></li>
                    <li><a href="#" class="py-2 d-block">Brunch</a></li>
                    <li><a href="#" class="py-2 d-block">Dinner</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
         
        </div>
        <div class="row site-animate">
           <div class="col-md-12 text-center">
            <div class="site-footer-widget mb-4">
              <ul class="site-footer-social list-unstyled ">
                <li class="site-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="site-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="site-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12 text-center">
            <p>&copy;
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |</p>
          </div>
        </div>
      </div>
    </footer>

    
    

    <!--Reservation Modal -->
    <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="bg-image" style="background-image: url(images/reservation_1.jpg);"></div>
              </div>
              <div class="col-lg-12 p-5">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <small>CLOSE </small><span aria-hidden="true">&times;</span>
                </button>
                <h1 class="mb-4">Reserve A Table</h1>  
                <form action="#" method="post">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_fname">First Name</label>
                      <input type="text" class="form-control" id="m_fname">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_lname">Last Name</label>
                      <input type="text" class="form-control" id="m_lname">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_email">Email</label>
                      <input type="email" class="form-control" id="m_email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_people">How Many People</label>
                      <select name="" id="m_people" class="form-control">
                        <option value="1">1 People</option>
                        <option value="2">2 People</option>
                        <option value="3">3 People</option>
                        <option value="4+">4+ People</option>
                      </select>
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_phone">Phone</label>
                      <input type="text" class="form-control" id="m_phone">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_date">Date</label>
                      <input type="text" class="form-control" id="m_date">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_time">Time</label>
                      <input type="text" class="form-control" id="m_time">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_message">Message</label>
                      <textarea class="form-control" id="m_message" cols="30" rows="7"></textarea>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="submit" class="btn btn-primary btn-lg btn-block" value="Reserve Now">
                    </div>
                  </div>

                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <!-- END Modal -->
<!----------------------- CUSTOMER REGISTRATION / LOGIN FORM -------------------------->

     <div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="registrationModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="bg-image" style="background-image: url(images/reservation_1.jpg);"></div>
              </div>
              <div class="col-lg-12 p-5">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <small>CLOSE </small><span aria-hidden="true">&times;</span>
                </button>
                <h1 class="mb-4">Registration</h1>  
                <form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_fname">Name</label>
                      <input name="name" type="text" class="form-control" id="m_fname">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_email">Email</label>
                      <input name="email" type="email" class="form-control" id="m_email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_phone">Phone</label>
                      <input name="phone" type="text" class="form-control" id="m_phone">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_phone">Password</label>
                      <input name="password" type="password" class="form-control" id="m_phone">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_phone">Confirm Password</label>
                      <input name="cnfpassword" type="password" class="form-control" id="m_phone">
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="submit" class="btn btn-primary btn-lg btn-block" value="Register Now!!">
                    </div>
                  </div>

                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <!-- END Modal -->

    <!--Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="bg-image" style="background-image: url(images/bg-17.jpg);"></div>
              </div>
              <div class="col-lg-12 p-5">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <small>CLOSE </small><span aria-hidden="true">&times;</span>
                </button>
                <h1 class="mb-4">Login</h1>  
                <form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>>
                  <div class="imgcontainer">
                  <img src="favicon.png" class="avatar">
                  </div>

                  <div class="container">
                  <label for="uname"><b>E-mail/mobile no.</b></label>
                  <input name="username" type="text" class="form-control" id="m_email">

                  <label for="psw"><b>Password</b></label>
                  <input name="pswd" type="password" class="form-control" id="m_name">
  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="submit" class="btn btn-primary btn-lg btn-block" value="LOGIN">
                      <input href="https://hungerr.com/" target="_blank" data-toggle="modal" data-target="#registrationModal" data-dismiss="modal" type="button" class="btn btn-primary-reg btn-lg btn-block" value="REGISTER">
                    </div>
                  <div class="col-md-6 form-group">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Member Login">
                  <small><br><a href="" target="_blank" data-toggle="modal" data-target="#clientloginModal"><font color="red"><b>Member Login</b></font></a></small>
                  </button>
                  </div>
                  <div>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Member Register">
                  <small><br><a href="" target="_blank" data-toggle="modal" data-target="#clientregistrationModal"><font color="red"><b>Member Registration</b></font></a></small>
                  </button>
                  </div>
                  </div>
                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <!-- END Modal -->
    <!-------------------------------------    Client REGISTRATION/LOGIN   ---------------------------------------------->

     <div class="modal fade" id="clientregistrationModal" tabindex="-1" role="dialog" aria-labelledby="clientregistrationModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="bg-image" style="background-image: url(images/reservation_1.jpg);"></div>
              </div>
              <div class="col-lg-12 p-5">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <small>CLOSE </small><span aria-hidden="true">&times;</span>
                </button>
                <h1 class="mb-4">Member Registration</h1>  
                <form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_fname">Name</label>
                      <input name="client_name" type="text" class="form-control" id="m_fname">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_email">Email</label>
                      <input name="client_email" type="email" class="form-control" id="m_email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_phone">Phone</label>
                      <input name="client_phone" type="text" class="form-control" id="m_phone">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_phone">Password</label>
                      <input name="client_password" type="password" class="form-control" id="m_phone">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_phone">Confirm Password</label>
                      <input name="client_confirmed_password" type="password" class="form-control" id="m_phone">
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="submit" class="btn btn-primary btn-lg btn-block" value="Register Now!!">
                    </div>
                  </div>

                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <!-- END Modal -->

    <!--Login Modal -->
    <div class="modal fade" id="clientloginModal" tabindex="-1" role="dialog" aria-labelledby="clientloginModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="bg-image" style="background-image: url(images/bg-17.jpg);"></div>
              </div>
              <div class="col-lg-12 p-5">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <small>CLOSE </small><span aria-hidden="true">&times;</span>
                </button>
                <h1 class="mb-4">Member Login</h1>  
                <form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_email"><b>E_mail/Mobile:-</b></label>
                      <input name="client_username" type="text" class="form-control" id="m_email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_name"><b>Password</b></label>
                      <input name="client_pswd" type="password" class="form-control" id="m_name">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="submit" class="btn btn-primary btn-lg btn-block" value="LOGIN">
                      <input href="" target="_blank" data-toggle="modal" data-target="#clientregistrationModal" data-dismiss="modal" type="button" class="btn btn-primary-reg btn-lg btn-block" value="REGISTER">
                    </div>
                  <div class="col-md-6 form-group">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Member Login">
                  <small><br><a href="" target="_blank" data-toggle="modal" data-target="#loginModal"><font color="red"><b>Customer Login</b></font></a></small>
                  </button>
                  </div>
                  <div>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Member Register">
                  <small><br><a href="" target="_blank" data-toggle="modal" data-target="#registrationModal"><font color="red"><b>Customer Registration</b></font></a></small>
                  </button>
                  </div>
                  </div>
                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <!-------------------------------------    END Modal   ---------------------------------------------->
    <!-- loader -->
    <div id="site-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    
    <script src="js/jquery.animateNumber.min.js"></script>
    

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>

    <script src="js/main.js"></script>
    <?php       
// ######################
   ##  LOGIN PROCESS   ##
   ######################

if (isset($_POST["username"]) && isset($_POST["pswd"])){
  $username=check_input($_POST["username"]);
  $pswd=check_input($_POST["pswd"]);
    $con = mysqli_connect("localhost","sam","password@hai","hungerr");
    // if($con){echo "connected";}
    $sqlCommand = "SELECT * FROM cx_userinfo WHERE Email='".$username."' OR Phone='".$username."'";
    $query=mysqli_query($con,$sqlCommand);
    $result = mysqli_fetch_assoc($query);
    if (password_verify($_POST['pswd'], $result['Password']))
    {
    $_SESSION['Name'] = $result['Name'];
    $_SESSION['Email'] = $result['Email'];
    $_SESSION['Phone'] = $result['Phone'];
    exit(header('Location:index.php'));
    }
    else{
       echo '<div id="error_Modal" class="modal">',
      '<!-- Modal content -->',
      '<div style="color: red;" class="modal-content">',
      '<span class="close">&times;</span>',
      '<p><center>Incorrect username or password.<center></p>',
      '</div>',
      '<script type="text/javascript">',
      'modal();',
      '</script>';
    }
    if(mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL DB: " . mysqli_connect_error();
    }
  }
      ?>
    <?php
// ##############################
//                              #
//     Customer REGISTRATION    #
//                              #
// ##############################


// ####################################
   ##  REGISTER VALIDATION PROCESS   ##
   ####################################

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["password"]) && isset($_POST["cnfpassword"])){
  if ($_POST["password"]!=$_POST["cnfpassword"]){
    echo '<script type="text/javascript">',
     'passwordError();',
     '</script>';
     $register_error=True;
  }
  if (!preg_match("/^[6-9]{1}[0-9]{9}$/",$_POST["phone"])){
    echo '<script type="text/javascript">',
    'phoneError();',
    '</script>';
     $register_error=True;
  }
  if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    echo '<script type="text/javascript">',
     'emailError();',
     '</script>';
     $register_error=True;
  }

//   ###########################
//   ##       REGISTER        ##
//   ###########################

  if ($register_error==False){
    $name=check_input($_POST["name"]);
    $email=check_input($_POST["email"]);
    $phone=check_input($_POST["phone"]);
    $password=check_input($_POST["password"]);
    $cnfpassword=check_input($_POST["cnfpassword"]);
      $con = mysqli_connect("localhost","sam","password@hai","hungerr");
      $sqlCommand = "SELECT * FROM cx_userinfo WHERE Email='".$email."'";
      $query=mysqli_query($con,$sqlCommand);
      $result = mysqli_fetch_assoc($query);
      $sqlCommand2 = "SELECT * FROM cx_userinfo WHERE Phone='".$phone."'";
      $query2=mysqli_query($con,$sqlCommand2);
      $result2 = mysqli_fetch_assoc($query2);
      if (!is_null($result)){      
      // echo "found email";
      echo '<div id="error_Modal" class="modal" data-keyboard="true">',
      '<!-- Modal content -->',
      '<div style="color: red;" class="modal-content">',
      '<span class="close">&times;</span>',
      '<p><center>The e-mail you entered is already registered with us, kindly enter another e-mail address or login.</center></p>',
      '</div>',
      '<script type="text/javascript">',
      'modal();',
      '</script>';
      }
      if (!is_null($result2)){      
      // echo "found phone";
      echo '<div id="error_Modal" class="modal" data-keyboard="true">',
      '<!-- Modal content -->',
      '<div style="color: red;" class="modal-content">',
      '<span class="close">&times;</span>',
      '<p><center>The phone number you entered is already registered with us, kindly enter another phone number or try logging in with e-mail.</center></p>',
      '</div>',
      '<script type="text/javascript">',
      'modal();',
      '</script>';
      }
      if (is_null($result) && is_null($result2)){
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        // echo "Available";
        $sqlCommand = "INSERT INTO cx_userinfo VALUES(DEFAULT,'".$name."','".$email."','".$phone."','".$hashed_password."',DEFAULT)";
        echo $sqlCommand;
        $query=mysqli_query($con,$sqlCommand);
        if ($query){
          echo '<div id="error_Modal" class="modal" data-keyboard="true">',
          '<!-- Modal content -->',
          '<div class="modal-content" style="color: green;">',
          '<span class="close">&times;</span>',
          '<center><p><span>You have successfully registered with us.<span><br><strong>Thank you for being a part of hungerrr...</center></strong><br></p>',
          '</div>',
          '<script type="text/javascript">',
          'modal();',
          '</script>';
          ######REDIRECT IF SIGNED IN############
          if (isset($_POST['signedInCheck']))
              {
              $_SESSION['Name'] = $name;
              $_SESSION['Email'] = $email;
              $_SESSION['Phone'] = $phone;
              if (!headers_sent()) {
                header("Location: index.php");
              exit();
            }
            }
        }
      }
  // Check connection
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL DB: " . mysqli_connect_error();
  }
  }
  }

// ##############################
//                              #
//    CLIENT REGISTRATION       #
//                              #
// ##############################

// ######################
   ##  LOGIN PROCESS   ##
   ######################

if (isset($_POST["client_username"]) && isset($_POST["client_pswd"])){
    $client_username=check_input($_POST["client_username"]);
    $client_pswd=check_input($_POST["client_pswd"]);
    $con = mysqli_connect("localhost","sam","password@hai","hungerr");
    // if($con){echo "connected";}
    $sqlCommand = "SELECT * FROM client_userinfo WHERE Restaurant_ID='".$client_username."' OR Phone='".$client_username."' OR Email='".$client_username."'";
    $query=mysqli_query($con,$sqlCommand);
    $result = mysqli_fetch_assoc($query);
    if (password_verify($_POST['client_pswd'], $result['Password']))
    {
    $_SESSION['Name'] = $result['Name'];
    $_SESSION['Email'] = $result['Email'];
    $_SESSION['Phone'] = $result['Phone'];
    $_SESSION['RID'] = $result['Restaurant_ID'];
    exit(header('Location:index.php'));
    }
    else{
       echo '<div id="error_Modal" class="modal">',
      '<!-- Modal content -->',
      '<div style="color: red;" class="modal-content">',
      '<span class="close">&times;</span>',
      '<p><center>Incorrect username or password.<center></p>',
      '</div>',
      '<script type="text/javascript">',
      'modal();',
      '</script>';
    }
    if(mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL DB: " . mysqli_connect_error();
    }
  }

// ####################################
   ##  REGISTER VALIDATION PROCESS   ##
   ####################################

if (isset($_POST["client_name"]) && isset($_POST["client_email"]) && isset($_POST["client_phone"]) && isset($_POST["client_password"]) && isset($_POST["client_confirmed_password"])){
  if ($_POST["client_password"]!=$_POST["client_confirmed_password"]){
    echo '<script type="text/javascript">',
     'passwordError();',
     '</script>';
     $register_error=True;
  }
  if (!preg_match("/^[6-9]{1}[0-9]{9}$/",$_POST["client_phone"])){
    echo '<script type="text/javascript">',
    'phoneError();',
    '</script>';
     $register_error=True;
  }
  if (!filter_var($_POST["client_email"], FILTER_VALIDATE_EMAIL)){
    echo '<script type="text/javascript">',
     'emailError();',
     '</script>';
     $register_error=True;
  }

//   ###########################
//   ##       REGISTER        ##
//   ###########################

  if ($register_error==False){
    $client_name=check_input($_POST["client_name"]);
    $client_email=check_input($_POST["client_email"]);
    $client_phone=check_input($_POST["client_phone"]);
    $client_password=check_input($_POST["client_password"]);
    $client_confirmed_password=check_input($_POST["client_confirmed_password"]);
      $con = mysqli_connect("localhost","sam","password@hai","hungerr");
      // if ($con){
      //   // echo "CONNECTED";
      // }
      $sqlCommand = "SELECT * FROM client_userinfo WHERE Email='".$client_email."'";
      $query=mysqli_query($con,$sqlCommand);
      $result = mysqli_fetch_assoc($query);
      $sqlCommand2 = "SELECT * FROM client_userinfo WHERE Phone='".$client_phone."'";
      $query2=mysqli_query($con,$sqlCommand2);
      $result2 = mysqli_fetch_assoc($query2);
      if (!is_null($result)){      
      // echo "found email";
      echo '<div id="error_Modal" class="modal" data-keyboard="true">',
      '<!-- Modal content -->',
      '<div style="color: red;" class="modal-content">',
      '<span class="close">&times;</span>',
      '<p><center>The e-mail you entered is already registered with us, kindly enter another e-mail address or login.</center></p>',
      '</div>',
      '<script type="text/javascript">',
      'modal();',
      '</script>';
      }
      if (!is_null($result2)){      
      // echo "found phone";
      echo '<div id="error_Modal" class="modal" data-keyboard="true">',
      '<!-- Modal content -->',
      '<div style="color: red;" class="modal-content">',
      '<span class="close">&times;</span>',
      '<p><center>The phone number you entered is already registered with us, kindly enter another phone number or try logging in with e-mail.</center></p>',
      '</div>',
      '<script type="text/javascript">',
      'modal();',
      '</script>';
      }
      ###### GENERATE RESTAURANT ID########
      $sqlCommand3 = "SELECT * FROM client_userinfo ORDER BY `Restaurant_ID` DESC LIMIT 1";
      $query3=mysqli_query($con,$sqlCommand3);
      $result3 = mysqli_fetch_assoc($query3);
    echo $result3['Email'];
    echo $result3['Restaurant_ID'];
    if ($result3){
      $RID = $result3['Restaurant_ID']+1;
    }
    else{
      $RID = 7662000;
    }
    #####################################
      if (is_null($result) && is_null($result2)){
        $hashed_password = password_hash($client_password, PASSWORD_BCRYPT);
        // echo "Available";
        $sqlCommand = "INSERT INTO client_userinfo VALUES(DEFAULT,'".$RID."','".$client_name."','".$client_email."','".$client_phone."','".$hashed_password."',DEFAULT)";
        $query=mysqli_query($con,$sqlCommand);
        if ($query){
          echo '<div id="error_Modal" class="modal" data-keyboard="true">',
          '<!-- Modal content -->',
          '<div class="modal-content" style="color: green;">',
          '<span class="close">&times;</span>',
          '<center><p><span>You have successfully registered with us.<span><br><strong>Thank you for being a part of hungerrr...</center></strong><br></p>',
          '</div>',
          '<script type="text/javascript">',
          'modal();',
          '</script>';
          ######REDIRECT IF SIGNED IN############
          if (isset($_POST['signedInCheck']))
              {
              $_SESSION['Name'] = $name;
              $_SESSION['Email'] = $email;
              $_SESSION['Phone'] = $phone;
              $_SESSION['RID'] = $RID;
              if (!headers_sent()) {
              header("Location: index.php");
              exit();
            }
            }
        }
      }
  // Check connection
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL DB: " . mysqli_connect_error();
  }
  }
  }

  #############################
  #                           #
  #   AUTH FUNCTIONS          #
  #                           #
  #############################

  function UsernameHeader(){
    if (isset($_SESSION['Name']))
      {echo'<h2 class="site-heading site-animate mb-3">'.$_SESSION['Name'].'</h2>';}
      }
  function authStatus(){
    if (isset($_SESSION['Name']))
      {echo '<a class="nav-link" href="'.htmlspecialchars($_SERVER['PHP_SELF']).'?logout=True">Logout</a>';}
    else
      {echo '<a href="" target="_blank" data-toggle="modal" data-target="#loginModal" class="nav-link">Log in</a>';
      $notLoggedIN=True;}
    if (isset($_GET['logout']))
      {
      session_destroy();
      $_SESSION=array();
      header("Location:".htmlspecialchars($_SERVER['PHP_SELF']));
            }
      }
  // #######################
//     UTIL FUNCTIONS   #
//                      #
// #######################

  function check_input($data)
    {
    trim($data);
    stripcslashes($data);
    htmlspecialchars($data);
    return $data;
    }
  ob_flush();
  ob_end_flush();
  ?>
  </body>
</html>