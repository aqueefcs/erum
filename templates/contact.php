<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="google-site-verification" content="QK9pN2mwNJSNhUm20rfVeVcw4GBhREq1eR3Gp1NuY90" />
  <title>Contact Me</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link href="https://fonts.googleapis.com/css2?family=Modak&family=Galada&display=swap" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" href="contactstyle.css">
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
<!--info nav-->
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
<!-- info nav ends-->
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark elegant-color-dark">
  <div class="container">
      <!-- Navbar brand -->
      <a class="navbar-brand animated fadeInLeft" href="../index.php">Erum</a>
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
            <a class="nav-link" href="../index.php">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
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
  <div class="container my-5">
          <!--Section: Content-->
          <section class="dark-grey-text">
            <div class="row pr-lg-5">
              <div class="col-md-7 mb-4">
                <h2 class="text-dark text-center mt-4">Erum Professional Services</h2>
                <p class="h5 text-gray text-center">You have any questions or need any information?</p>
                <hr class="my-2">
                <div class="view">
                  <img src="https://mdbootstrap.com/img/illustrations/drawkit-phone-conversation-colour.svg" class="img-fluid" alt="contact-img">
                </div>
              </div>
              <div class="col-md-5 d-flex align-items-center">
                <div class="mt-4">

                 <form class="border border-light p-5" id="myform" name="contact-form" action="https://formspree.io/myynzrya" method="POST">
                          <p class="h3 mb-4 text-center text-dark"><i class="fas fa-mobile-alt"></i> Contact us</p>
                          <input type="text" name="name" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">
                          <input type="email" name="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">
                          <input type="number" name="phone" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Phone Number">
                          <label for="defaultSelect">Subject</label>
                          <select id="defaultSelect" name="subject" class="browser-default custom-select mb-4">
                              <option value="" disabled="">Choose option</option>
                              <option value="Income Tax- Personal" selected="">Income Tax- Personal</option>
                              <option value="Income Tax - Company">Income Tax - Company</option>
                              <option value="TDS Corporate">TDS Corporate</option>
                              <option value="TDS Professional">TDS Professional</option>
                              <option value="TDS Standard">TDS Standard</option>
                              <option value="Digital Signature">Digital Signature</option>
                              <option value="GST">GST</option>
                              <option value="Web Development Services">Web Development Services</option>
                          </select>
                          <textarea name="message" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
                          <div class="custom-control custom-checkbox mb-4">
                              <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
                              <label class="custom-control-label" for="defaultContactFormCopy">Send me a copy of this message</label>
                          </div>
                          <button class="btn btn-orange  btn-block" type="submit">Send</button>
                      </form>
                </div>
              </div>
            </div>
          </section>
          <!--Section: Content-->
</div>
<hr class="my-5">
<section class="container">
      <h2 class="text-dark text-center font-weight-bold mb-4">Locate Us</h2>
      <div class="row">
        <div class="col-md-7 text-center map">
          <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.0758523501718!2d88.36434021503513!3d22.72542188510422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89b9ea291e6dd%3A0xf11fc372397431c2!2sBose%20Para%2C%20Khardaha%2C%20West%20Bengal%20700116!5e0!3m2!1sen!2sin!4v1589368831604!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="col-md-5 d-flex align-items-center">
            <div class="alert alert-secondary">
              <h3 class="font-weight-bold">Office Address</h3>
              <p><strong>Address:</strong> NGH 39, ABC Road, Kolkata, PIN:700001.</p>
              <h3 class="font-weight-bold">Head Office</h3>
              <p><strong>Address:</strong> 25,M.G Road Kolkata PIN:700054 </p>
            </div>
        </div>
      </div>

</section>
<hr class="my-2">
 <!-- Footer -->
<footer class="page-footer font-small elegant-color-dark">
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="../index.php"> Erum Profession Services</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
  <!--div class="container">
    <div class="row mt-4">
      <div class="col-md-5">
            <h2 class="text-dark">Erum Prefessional Services</h2>

      </div>
      <div class="col-md-7">
          <div class="card">
              <form class="border border-light p-5">
                  <p class="h4 mb-4 text-center">Contact us</p>
                  <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">
                  <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">
                  <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Phone Number">
                  <label for="defaultSelect">Subject</label>
                  <select id="defaultSelect" class="browser-default custom-select mb-4">
                      <option value="" disabled="">Choose option</option>
                      <option value="1" selected="">Income Tax- Personal</option>
                      <option value="2">Income Tax - Company</option>
                      <option value="3">TDS Corporate</option>
                      <option value="4">TDS Professional</option>
                      <option value="4">TDS Standard</option>
                      <option value="4">Digital Signature</option>
                      <option value="4">GST</option>
                      <option value="4">Web Development Services</option>
                  </select>
                  <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
                  <div class="custom-control custom-checkbox mb-4">
                      <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
                      <label class="custom-control-label" for="defaultContactFormCopy">Send me a copy of this message</label>
                  </div>
                  <button class="btn btn-info btn-block" type="submit">Send</button>
              </form>

            </div>
      </div>

    </div>
  </div-->

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
