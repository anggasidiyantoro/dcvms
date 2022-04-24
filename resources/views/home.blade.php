<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MAJENK">
    <meta name="keywords" content="MAJENK">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">
    <title>MAJENK</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="/assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="/assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="/assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="/assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="/assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/owlcarousel.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link id="color" rel="stylesheet" href="/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
    <style>
      @media only screen and (max-width: 600px) {
      }
    </style>
  </head>
  <body class="landing-wrraper">
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper landing-page">
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!--home section start-->
        <section class="section-pb-space" id="home"><img class="img-fluid bg-img-cover" src="/assets/images/landing/landing-home/home-bg2.jpg" alt="">
          <div class="custom-container">
              <div class="row">
                  <div class="col12">
                    <div class="row mt-5 justify-content-md-center">
                        <div class="col col-lg-6">
                          <form action="/" method="POST" enctype="multipart/form-data">
                            @csrf
                          <div class="card">
                            <div class="card-header pb-0 mx-auto">
                              <img src="assets/images/logo/logo.png" alt="">
                            </div>
                            <div class="text-center mt-4">
                                <h6>Data Center Visitor Management System</h6>
                            </div>
                            <div class="card-body">
                              <form class="theme-form mega-form">
                                <div class="p-2 pt-3 bg-primary text-center rounded">
                                    <h6>Personal Information</h6>
                                </div>
                                <div class="mb-4 mt-4">
                                  <label class="col-form-label">Visit Schedule</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i data-feather="calendar"></i></span>
                                        <input type="date" name="schedule" required class="form-control" required>
                                    </div>
                                </div>
                                <div class="mb-4 mt-4">
                                    <div class="input-group">
                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                        <input type="text" name="name" required class="form-control" required placeholder="Name">
                                    </div>
                                </div>
                                <div class="mb-4 mt-4">
                                    <div class="input-group">
                                        <span class="input-group-text"><i data-feather="credit-card"></i></span>
                                        <input type="number" name="id_card" required class="form-control" required placeholder="ID Card">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="col-form-label">Upload KTP</label>
                                    <input type="file" name="ktp" required class="form-control" required placeholder="ID Card">
                                </div>
                                <div class="mb-4 mt-4">
                                    <div class="input-group">
                                        <span class="input-group-text"><i data-feather="mail"></i></span>
                                        <input type="email" name="email" required class="form-control" required placeholder="Email">
                                    </div>
                                </div>
                                <div class="mb-4 mt-4">
                                    <div class="input-group">
                                        <span class="input-group-text"><i data-feather="phone"></i></span>
                                        <input type="text" name="phone" required class="form-control" required placeholder="Phone">
                                    </div>
                                </div>
                                <div class="mb-4 mt-4">
                                    <div class="input-group">
                                        <span class="input-group-text"><i data-feather="briefcase"></i></span>
                                        <input type="text" name="company" required class="form-control" required placeholder="Company Name">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group">
                                        <span class="input-group-text"><i data-feather="message-circle"></i></span>
                                        <select name="reason" required id="reason" class="form-control">
                                            <option value="maintenance">Maintenance</option>
                                            <option value="installation">Installation</option>
                                            <option value="replace">Replace</option>
                                            <option value="dismantle">Dismantle</option>
                                            <option value="visit">Visit</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <div class="input-group">
                                        <span class="input-group-text"><i data-feather="clipboard"></i></span>
                                        <input class="form-control" name="description" required placeholder="Description">
                                    </div>
                                </div>
                              </form>
                            </div>
                            <div class="mx-auto mb-4">
                                <button class="btn btn-secondary" type="reset">Cancel</button>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                          </div>
                          </form>
                        </div>
                      </div>
                      <div class="text-center">
                        <p>Copyright&copy;2022 PT. Semut Data Indonesia</p>
                    </div>
                  </div>
              </div>
          </div>
        </section>
        <!--home section end-->
      </div>
    </div>
    <!-- latest jquery-->
    <script src="/assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="/assets/js/sidebar-menu.js"></script>
    <script src="/assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="/assets/js/bootstrap/popper.min.js"></script>
    <script src="/assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="/assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="/assets/js/owlcarousel/owl-custom.js"></script>
    <script src="/assets/js/landing_sticky.js"></script>
    <script src="/assets/js/landing.js"></script>
    <script src="/assets/js/jarallax_libs/libs.min.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="/assets/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>