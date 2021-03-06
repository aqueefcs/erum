<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Erum Professional || Demo</title>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  	<link href="https://fonts.googleapis.com/css2?family=Modak&family=Galada&display=swap" rel="stylesheet"> 
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">

 	 <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

  
<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 elegant-color-dark" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active text-warning" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus mr-1"></i> Register</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 7-->
                    <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                        <!--Body-->
                        <div class="modal-body mb-1">
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="email" id="modalLRInput10" class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
                            </div>

                            <div class="md-form form-sm mb-4">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="modalLRInput11" class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
                            </div>
                            <div class="text-center mt-2">
                                <button class="btn btn-md btn-warning">Log in <i class="fa fa-sign-in ml-1"></i></button>
                            </div>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-center text-md-right mt-1">
                                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-warning waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                    <!--/.Panel 7-->

                    <!--Panel 8-->
                    <div class="tab-pane fade" id="panel8" role="tabpanel">

                        <!--Body-->
                        <div class="modal-body">
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="email" id="modalLRInput12" class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
                            </div>

                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="modalLRInput13" class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
                            </div>

                            <div class="md-form form-sm mb-4">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="modalLRInput14" class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
                            </div>

                            <div class="text-center form-sm mt-2">
                                <button class="btn btn-md btn-warning">Sign up <i class="fa fa-sign-in ml-1"></i></button>
                            </div>

                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-right">
                                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-warning waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!--/.Panel 8-->
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Login / Register Form-->




<nav class="navbar navbar-dark warning-color text-center">
    <div class="d-flex flex-row text-white text-center log-btn ">
      <div class="p-2"><i class="fab fa-facebook fa-2x text-dark"></i></div>
      <div class="p-2"><i class="fas fa-envelope fa-2x text-dark"></i></div>
      <div class="p-2"><i class="fab fa-twitter fa-2x text-dark"></i></div>
      <div class="p-2"><i class="fas fa-mobile fa-2x text-dark"> 9875524469</i></div>
    </div>
    <div class="d-flex flex-row-reverse text-white" style="margin-left: 60px;">
      <div class="p-1"><a class="btn btn-sm  btn-success waves-effect" data-toggle="modal" data-target="#modalLRForm" href="">Admin Login</a></div>
      <div class="p-1"><a class="btn btn-sm  btn-success waves-effect" data-toggle="modal" data-target="#modalLRForm" href="">Staff Login</a></div>
    </div>
  </nav>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark elegant-color-dark">
  <div class="container">
      <!-- Navbar brand -->
      <a class="navbar-brand animated fadeInLeft" href="#">Erum</a>

      <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapsible content -->
      <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="templates/contact.php">Contact</a>
          </li>

          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Srevices</a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Income Tax - Personal</a>
              <a class="dropdown-item" href="#">Income Tax - Company</a>
              <a class="dropdown-item" href="#">TDS Corporate</a>
              <a class="dropdown-item" href="#">TDS Professional</a>
              <a class="dropdown-item" href="#">TDS Standard</a>
              <a class="dropdown-item" href="#">Digital Signature</a>
              <a class="dropdown-item" href="#">GST</a>
              <a class="dropdown-item" href="#">Web Development Services</a>
            </div>
          </li>

        </ul>
        <!-- Links -->
      <!-- Collapsible content -->
  </div>
</nav>
<!--/.Navbar-->

 

 <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
      <li data-target="#carousel-example-1z" data-slide-to="3"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
        <div class="view" style="background-image: url('https://images.pexels.com/photos/1170412/pexels-photo-1170412.jpeg?cs=srgb&dl=people-sitting-on-chairs-beside-their-desks-in-an-office-1170412.jpg&fm=jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="animated fadeInUp text-center white-text mx-5">
              <h1 class="mb-4" style="font-size: 5em; ">
                <strong class="erum">Erum Professional Services</strong>
              </h1>

              <p style="font-size: 2em;">
                <strong class="erum1">All Solutions Under One Roof</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong class="erum2">Optimize tax costs using our years experience</strong>
              </p>

              
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('https://images.pexels.com/photos/53621/calculator-calculation-insurance-finance-53621.jpeg?cs=srgb&dl=black-calculator-near-ballpoint-pen-on-white-printed-paper-53621.jpg&fm=jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="animated fadeInUp text-center white-text mx-5">
              <h1 class="mb-4" style="font-size: 5em;" id="name">
                <strong class="erum">Erum Professional Services</strong>
              </h1>

              <p style="font-size: 2em;">
                <strong class="erum1">All Solutions Under One Roof</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong class="erum2">Optimize tax costs using our years experience</strong>
              </p>

            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Second slide-->

      <!--Third slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('https://images.pexels.com/photos/572056/pexels-photo-572056.jpeg?cs=srgb&dl=apple-devices-books-business-coffee-572056.jpg&fm=jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="animated fadeInUp text-center white-text mx-5">
              <h1 class="mb-4" style="font-size: 5em;" id="name">
                <strong class="erum">Erum Professional Services</strong>
              </h1>

              <p style="font-size: 2em;">
                <strong class="erum1">All Solutions Under One Roof</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong class="erum2">Optimize tax costs using our years experience</strong>
              </p>

            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Third slide-->


      <div class="carousel-item">
        <div class="view" style="background-image: url('assets/img/sign.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="animated fadeInUp text-center white-text mx-5">
              <h1 class="mb-4" style="font-size: 5em;" id="name">
                <strong class="erum">Erum Professional Services</strong>
              </h1>

              <p style="font-size: 2em;">
                <strong class="erum1">Digital Signature</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong class="erum2">Optimize tax costs using our years experience</strong>
              </p>

            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

  </div>
  <!--/.Carousel Wrapper-->



















<main>
  <div class="container">
    <hr class="my-5">

      <!--Section: Not enough-->
      <section>

        <h1 class="my-5 text-dark text-center" style="font-family: 'Galada', cursive;"> <span class="text-warning">S</span>ervices</h1>
            <hr class="my-5">
        <!--First row-->
        <div class="row features-small mb-5 mt-3 wow fadeIn">

          <!--First column-->
          <div class="col-md-4">
            <!--First row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Income and Services Tax</h6>
                <p class="grey-text">Our experts are ready to manimize the costs associated with the payment of the taxes by using absolutely legal,legitimate and effective method. <a class="text-warning" href=""><i class="fas fa-arrow-right"> Explore More</i></a>
                </p>
                <div style="height:5px;"></div>
              </div>
            </div>
            <!--/First row-->

            <!--Second row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Goods and Services Tax</h6>
                <p class="grey-text">Our experts are ready to manimize the costs associated with the payment of the taxes by using absolutely legal,legitimate and effective method. <a class="text-warning" href=""><i class="fas fa-arrow-right"> Explore More</i></a>
                </p>
                <div style="height:5px;"></div>
              </div>
            </div>
            <!--/Second row-->

            <!--Third row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Maintainance of Account</h6>
                <p class="grey-text">Our experts are ready to manimize the costs associated with the payment of the taxes by using absolutely legal,legitimate and effective method. <a class="text-warning" href=""><i class="fas fa-arrow-right"> Explore More</i></a>
                </p>
                <div style="height:5px;"></div>
              </div>
            </div>
            <!--/Third row-->

            <!--Fourth row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Account Outsourcing</h6>
                <p class="grey-text">Our experts are ready to manimize the costs associated with the payment of the taxes by using absolutely legal,legitimate and effective method. <a class="text-warning" href=""><i class="fas fa-arrow-right"> Explore More</i></a>
                </p>
                <div style="height:5px;"></div>
              </div>
            </div>
            <!--/Fourth row-->
          </div>
          <!--/First column-->

          <!--Second column-->
          <div class="col-md-4 flex-center">
            <img  src="https://mdbootstrap.com/img/Others/screens.png" alt="" class="z-depth-0 img-fluid">
          </div>
          <!--/Second column-->

          <!--Third column-->
          <div class="col-md-4 mt-2">
            <!--First row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Auditing</h6>
                <p class="grey-text">Our experts are ready to manimize the costs associated with the payment of the taxes by using absolutely legal,legitimate and effective method. <a class="text-warning" href=""><i class="fas fa-arrow-right"> Explore More</i></a>
                </p>
                <div style="height:5px;"></div>
              </div>
            </div>
            <!--/First row-->

            <!--Second row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Web Develepment services</h6>
               <p class="grey-text">Our experts are ready to manimize the costs associated with the payment of the taxes by using absolutely legal,legitimate and effective method. <a class="text-warning" href=""><i class="fas fa-arrow-right"> Explore More</i></a>
                </p>
                <div style="height:5px;"></div>
              </div>
            </div>
            <!--/Second row-->

            <!--Third row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Tally Solutions</h6>
                <p class="grey-text">Our experts are ready to manimize the costs associated with the payment of the taxes by using absolutely legal,legitimate and effective method. <a class="text-warning" href=""><i class="fas fa-arrow-right"> Explore More</i></a>
                </p>
                <div style="height:5px;"></div>
              </div>
            </div>
            <!--/Third row-->

            <!--Fourth row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Digital Signature and other Government Works</h6>
                <p class="grey-text">Our experts are ready to manimize the costs associated with the payment of the taxes by using absolutely legal,legitimate and effective method. <a class="text-warning" href=""><i class="fas fa-arrow-right"> Explore More</i></a>
                </p>
                <div style="height:5px;"></div>
              </div>
            </div>
            <!--/Fourth row-->
          </div>
          <!--/Third column-->

        </div>
        <!--/First row-->

      </section>
      <!--Section: services-->
      <hr class="mb-5">

      <section>
        <h1 class="my-5 text-dark text-center" style="font-family: 'Galada', cursive;"> About<span class="text-warning"> Us</h1>
          <hr class="my-5">
          <div class="row">
            <div class="col-md-5 text-center">
              <img src="assets/img/ahmed1.png" class="img-fluid rounded-circle ahmed-pic" alt="smaple image">
            </div>
            <div class="col-md-7 d-flex align-items-center">
              <div class="text-center justify-content-center">
                
                <h3 class="font-weight-bold mb-4 mt-4">Ahmed <span class="text-warning">ALi</span></h3>

                <p>Some personal information and information about erum professionsl.Some personal information and information about erum professionsl.Some personal information and information about erum professionsl.Some personal information and information about erum professionsl.</p>

                <button type="button" class="btn btn-warning btn-rounded mx-0">Know More</button>

              </div>
          </div>
          </div>
      </section>










      <hr class="my-5">
      <section>
        <div class="jumbotron card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg');">
          <div class="mask rgba-black-strong text-white text-center py-5 px-4">
            <div>
              <h1 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>Need to <span class="text-warning">Talk</span></strong> With us?</h1>
              
              <a class="btn btn-warning btn-lg text-dark" href="templates/contact.php">Contact Us <i class="fas fa-angle-right"></i> </a>
            </div>
          </div>
        </div>
      </section>

    
  </div>


















<!-- Footer -->
<footer class="page-footer font-small elegant-color-dark pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center ">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase text-warning">Company Info</h5>
        <p>Here you can use rows and columns to organize your footer content.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase text-warning">Hours</h5>

        <p>Company's Working Hour</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase text-warning">Contacts</h5>

        <p>Company Contact information</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->
  <hr class="my-5">
   <div class="container text-center">
      <h3 class="text-center mb-4">Powered By: SNOW<span class="text-warning">Tech</span></h3>
    
  </div>

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href=""> Erum Professional Services</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


</main>





















	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
		

</body>
</html>
