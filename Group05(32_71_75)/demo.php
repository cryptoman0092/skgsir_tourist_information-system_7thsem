<?php
include("connection.php");
error_reporting(0);
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Tri-tourism</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"href="main.css">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@400;500;700&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  
    <nav class="navbar navbar-expand-lg navbar-light main-navbar
      bg m-navbar-light" id="main-navbar">
      <div class="container">
          <a class="navbar-brand"href="signin.php">Trio-Tourism</a>
          <button class="navbar-toggler"type="button"data-toggle="collapse"
          data-target="#my-nav" aria-controls="p-nav"aria-expanded="false"
          aria-label="toggle-navigation">
        <span>Menu</span>
        </button>
        <div class="collapse navbar-collapse"id="my-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a href="demo.php"class="nav-link">Home</a>
                </li>
                <li class="nav-item dropdown ">
                    <a href="#"class="nav-link dropdown-toggle" id="navbarDropdown"
                     role="button" data-toggle="dropdown">Services</a>
                     <div class="dropdown-menu" ariel-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="signin.php">Travels</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="signin.php">Hotels</a>
                     </div>
                </li>
                <li class="nav-item">
                    <a href="signin.php"class="nav-link">Historical Places</a>
                </li>
                <li class="nav-item">
                    <a href="signin.php"class="nav-link">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="signin.php"class="nav-link">Contact</a>
                </li>
                <li class="nav-item dropdown">
                <a href="#"class="nav-link dropdown-toggle" id="navbarDropdown"
                     role="button" data-toggle="dropdown">Register here</a>
                     <div class="dropdown-menu" ariel-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="regsig.php">Sign Up</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="signin.php">SignIn as user</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="signin1.php">SignIn as admin</a>
                     </div>
                     
                </li>
            </ul>
        </div>
      </div>
    </nav>
 
    <!---Hero-Image-->
    <section class="hero-wrap"
    style="background-image:url('images/cs7.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters main-text align-items-center">
            <div class="col-lg-7 col-md-6 d-flex align-items-end">
                <div class="text">
                    <h1 class="mb-4 text-capitalize">find a perfect deal<br>
                        for your next trip
                      </h1>
                      <p style="font-size:18px;">
                    Welcome to Trio-Tourism to find the adventures and exciting deals.We are here to help you out.</p>
                    <a href="#" class="btn btn-hero py-2 px-3">View all</a>
                </div>
            </div>
        </div>
    </div>
</section>
    <!---End of cs7-Image-->
<!---Welcome/about section-->
<section class="about-section mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center heading-section mb-5">
                <h2 class="text-black mb-2">Welcome To Trio-Tourism</h2>
                <p>Welcome to Trio-Tourism to find the adventures and exciting deals.We are here to help you out.</p>
            </div>
        </div>
        <div class="row img-wrap mb-5 mb-lg-0">
            <div class="col-12">
                <div class="row">
                    <div class="mb-4 margin-lg-0 col-lg-6 order-lg-2">
                        <a href="https://knowindia.gov.in/culture-and-heritage/ancient-history.php"" class="effect">
                            <img src="images/c2.jpg"alt=""
                            class="img-fluid">
                        </a>
                    </div>
                    <div class="col-lg-5 mr-auto text-lg-right align-self-center order-lg-1">
                        <h2 class="text-black">Culture</h2>
                        <p class="mb-4">
                        The culture of India refers to a collection of minor unique cultures. The culture of India comprises of clothing,
                         festivals, languages, religions, music, dance, architecture, food, and art in India
                        </p>
                        <a href="https://knowindia.gov.in/culture-and-heritage/ancient-history.php" class="btn btn-about">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!------->
        <div class="row img-wrap mb-5 mb-lg-0">
            <div class="col-12">
                <div class="row">
                    <div class="mb-4 margin-lg-0 col-lg-6">
                        <a href="https://knowindia.gov.in/culture-and-heritage/ancient-history.php" class="effect">
                            <img src="images/c1.jpg"alt=""
                            class="img-fluid">
                        </a>
                    </div>
                    <div class="col-lg-5 ml-auto align-self-center order-lg-1">
                        <h2 class="text-black">History</h2>
                        <p class="mb-4">
                        The History of India begins with the Indus Valley Civilization and the coming of the Aryans. These two phases are generally described as the pre-Vedic and Vedic periods. The earliest literary source that sheds light on India's past is the Rig Veda. It is difficult to date this work with any accuracy on the basis of tradition and ambiguous astronomical information contained in the hymns. Indus valley civilization, which flourished between 2800 BC and 1800 BC, had an advanced and flourishing economic system. The Indus valley people practiced agriculture, domesticated animals, made tools and 
                        weapons from copper, bronze, and tin and even traded with some Middle East countries
                        </p>
                        <a href="https://knowindia.gov.in/culture-and-heritage/ancient-history.php"class="btn btn-about">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!------->
        <div class="row img-wrap mb-5 mb-lg-0">
            <div class="col-12">
                <div class="row">
                    <div class="mb-4 margin-lg-0 col-lg-6 order-lg-2">
                        <a href="https://www.thrillophilia.com/blog/beautiful-places-in-india/" class="effect">
                            <img src="images/c3.jpg"alt=""
                            class="img-fluid">
                        </a>
                    </div>
                    <div class="col-lg-5 mr-auto text-lg-right align-self-center order-lg-1">
                        <h2 class="text-black">Nature</h2>
                        <p class="mb-4">
                        As a region that supports more than 8% of the Earth's biodiversity, its natural 
                        beauty is unparalleled, and wildlife unique and endemic. India is also the second most populous country on Earth, and 
                        its high population density poses unique environmental and developmental challenges.
                        </p>
                        <a href="https://www.thrillophilia.com/blog/beautiful-places-in-india/"class="btn btn-about">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!------->
    </div>
</section>
<!------------->
    
<!---Customers Section-->
<section class="testimonial-section mt-5">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2>Happy Customers</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="testimonial-item">
                    <div class="test-date">
                        26/02/2021
                    </div>
                    <h4>services of trio-tourism is too good.
                    </h4>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>their services are too nice . they provide cars at low cost and having facilities of hotels booking.</p>
                    <div class="customer">
                        <div class="customer-photo">
                            <img src="images/sourav.jpg"alt="">
                        </div>
                        <div class="test-text">
                            <h6>sourav chatterjee<span>India</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <!----->
            <div class="col-lg-6">
                <div class="testimonial-item">
                    <div class="test-date">
                        26/02/2021
                    </div>
                    <h4>hotel facilities are nice.

                    </h4>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>they provide a lots of options for hotels booking and their hotels are very much clean and affordable.</p>
                    <div class="customer">
                        <div class="customer-photo">
                            <img src="images/arif1.jpg"alt="">
                        </div>
                        <div class="test-text">
                            <h6>akash gupta <span>India</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <!----->
        </div>
    </div>
</section>
<!---End of Customers Section-->
<!--- Blog Section-->
<section class="blog-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="section-title">
                    <h2 class="text-center pb-2">
              Recent Blog
                    </h2>
               </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                  <img src="images/img-1.jpg" class="img-fluid" alt="">
                    <div class="blog-detail">
                      <div class="blog-date">
                            February 25,2021
                        </div>
                        <a href="https://www.intermiles.com/blog/top-20-famous-historical-
                        monuments-in-india-to-visit-in-2020"class="tag"><b  class="text-success">#Mustvisit</b></a>
                    </div>
                    <h4><a href="https://www.intermiles.com/blog/top-20-famous-historical-
                        monuments-in-india-to-visit-in-2020">Top 20 Famous Historical Monuments in
                         India to Visit in 2020</a></h4>
                </div>
            </div>
            <!----->
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <img src="images/img-2.jpg" class="img-fluid" alt="">
                    <div class="blog-detail">
                        <div class="blog-date">
                        February 25,2021
                        </div>
                        <a href="https://www.tourmyindia.com/blog/"class="tag"><b class="text-success">
                        #Mustvisit</b></a>
                    </div>
                    <h4><a href="https://www.tourmyindia.com/blog/">India Travel & Tourism Blog</a></h4>
                </div>
            </div>
            <!----->
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <img src="images/img-3.jpg" class="img-fluid" alt="">
         <div class="blog-detail">
                             <div class="blog-date">
                                                February 25,2021
                        </div>
                        <a href="https://www.enchantingtravels.com/travel-blog/top-10-travel-blogs-india/
                        "class="tag"><b class="text-success">#Mustvisit</b></a>
                    </div>
                    <h4><a href="https://www.enchantingtravels.com/travel-blog/top-10-travel-blogs-india/
                    ">Top 10 Travel Blogs of India</a></h4>
                </div>
            </div>
            <!----->
        </div>
    </div>
</section>
<!---End of Blog Section-->
<!---Contact Section-->
<section class="contact mt-3">
<div class="container">
    <div class="section-title">
        <h2 class="text-center">
               Contact Us
        </h2>
        <p class="text-center">
                <b class="text-success">you can contact us through 
           our given social profiles below.</b>
        </p>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="icon-box">
                        <i class="fas fa-share"></i>
                <h3>Social Profiles</h3>
                        <div class="social-links">
              <a href="#"class="twitter">
                                <i class="fab fa-twitter"></i>
                       </a>
                            <a href="https://www.facebook.com/profile.php?id=100017562944650"class="facebook">
                                <i class="fab fa-facebook"></i>
                            </a>
          <a href="https://www.instagram.com/arif_0lit/"class="instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
    <a href="https://www.linkedin.com/in/md-arif-alam733850162"class="linkedin">
                                <i class="fab fa-linkedin"></i>
                            </a>
         </div>
                        <div class="col-md-12">
                    <div class="icon-box mt-4">
                        <i class="fas fa-envelope"></i>
                        <h3>Email Us</h3>
                        <p>arifalam957656@gmail.com</p>
                    </div>
                    <div class="icon-box mt-4">
                        <i class="fas fa-phone"></i>
                        <h3>24/7 support</h3>
                        <p>+918789403313</p>
                    </div>

                </div>
                        
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

</section> 
<!---End of Contact Section-->

<!---->
<footer id="footer">
    <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h4>Join As New Member</h4>
                    <p>Join us for more information.</p>
                    <form name="sform" action="" method="POST">
                        <input type="email"name="email" value="">
                        <input type="submit" name="submit" value="Subscribe">
                    </form>
                   
                    <?php
                    if(isset($_POST['submit'])){
                        $a1=$_POST['email'];
                        $res="insert into subscribe(email) values('$a1')";
                       
                        $data=mysqli_query($conn,$res);
                        if($data)
                        {
                            ?>
                            <scipt>window.alert("successfully inserted");</scipt>
                            <?php
     
                             }
                             else{
                                 echo "failed connection";
                             }
     
                       }
                   ?>
                </div>
            </div>
        </div>
    </div>
  <div class="container py-4">
      <div class="copyright">
          &copy;Copyright<strong><span>TRIO-TOURISM</span></strong>
          .All Rights Reserved
      </div>
      <div class="credits">
          Designed by <a href="#"><b class="text-danger">MD ARIF ALAM</b> </a>
      </div>
  </div>
</footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    
  </body>
</html>