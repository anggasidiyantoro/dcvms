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
    <link rel="stylesheet" type="text/css" href="/assets/css/chartist.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/date-picker.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/prism.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/vector-map.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link id="color" rel="stylesheet" href="/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
    <style>
      .agree {font-size: 0%;min-width: 120px;min-height: 25px;}
      .agree::after {font-size: 12px;}
      .agree::after {
        content: "Belum Disetujui";
      }
      .agree:hover::after {
        content: "Setujui ?" ;
      }
      .agree:hover {
        background-color: #1b4c43 !important;
        color: white !important;
      }
    </style>
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start       -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="/assets/images/logo/logo.png" alt=""></a></div>
            <div class="dark-logo-wrapper"><a href="index.html"><img class="img-fluid" src="/assets/images/logo/dark-logo.png" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          </div>
          <div class="left-menu-header col">
            <ul>
              <li>
                <form class="form-inline search-form">
                  <div class="search-bg"><i class="fa fa-search"></i>
                    <input class="form-control-plaintext" placeholder="Search here.....">
                  </div>
                </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
              </li>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
          <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="/assets/images/dashboard/1.png" alt="">
            <h6 class="mt-3 f-14 f-w-600">{{ auth()->user()->name }}</h6></a>
            <p class="mb-0 font-roboto">{{ auth()->user()->email }}</p>
          </div>
          <nav>
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li><a class="nav-link" href="javascript:void(0)"><i data-feather="home"></i><span>Dashboard</span></a>
                  </li>
                  <li><a class="nav-link" href="dashboard/visitor"><i data-feather="users"></i><span>Visitor </span></a>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="airplay"></i><span>Widgets</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="general-widget.html">General</a></li>
                      <li><a href="chart-widget.html">Chart</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
          </nav>
        </header>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <!-- Container-fluid starts-->
          <div class="container-fluid dashboard-default-sec">
            <div class="row">
                <div class="card pt-3">
                    <h1 class="text-center">Daftar Visitor Data Center</h1>
                    <div class="table-responsive">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Visit Schedule</th>
                              <th scope="col">Name</th>
                              <th scope="col">ID. Card</th>
                              <th scope="col">Email</th>
                              <th scope="col">Company Name</th>
                              <th scope="col">Reason</th>
                              <th scope="col">Description</th>
                              <th scope="col">KTP</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($registers as $register)
                              <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $register->schedule }}</td>
                                <td>{{ $register->name }}</td>
                                <td>{{ $register->id_card }}</td>
                                <td>{{ $register->email }}</td>
                                <td>{{ $register->company }}</td>
                                <td>{{ $register->reason }}</td>
                                <td>{{ $register->description }}</td>
                                <td><img src=" {{ asset('storage/' . $register->ktp) }}" class="img-fluid" alt=""></td>
                                <td>
                                    @if ($register->status == "0")
                                      {{-- <td><a href="/dashboard/visitor/{{ $register->id }}/edit" class="btn btn-danger">Belum Disetujui</a></td> --}}
                                      <form action="/dashboard/visitor/{{ $register->id }}" method="POST">
                                        @method('put')
                                        @csrf
                                        <button class="agree badge bg-danger border-0" onclick="return confirm('Are you sure?')">Belum Disetujui</button>
                                      </form>
                                    @else
                                      <button class="badge bg-success border-0" style="font-size: 12px;min-width: 120px;min-height: 25px;">Telah Disetujui</button>
                                      {{-- <td><a href="/dashboard/visitor/{{ $register->id }}/edit" class="btn btn-success">Telah Disetujui</a></td> --}}
                                    @endif
                                </td>
                                {{-- <td><a href="/dashboard/visitor/{{ $register->id }}/edit" class="btn btn-danger">Belum Disetujui</a></td> --}}
                              </tr>
                              @endforeach
                          </tbody>
                        </table>
                      </div>
                </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2021-22 ?? MAJENK All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p>
              </div>
            </div>
          </div>
        </footer>
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
    <script src="/assets/js/chart/chartist/chartist.js"></script>
    <script src="/assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="/assets/js/chart/knob/knob.min.js"></script>
    <script src="/assets/js/chart/knob/knob-chart.js"></script>
    <script src="/assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="/assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="/assets/js/prism/prism.min.js"></script>
    <script src="/assets/js/clipboard/clipboard.min.js"></script>
    <script src="/assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="/assets/js/counter/jquery.counterup.min.js"></script>
    <script src="/assets/js/counter/counter-custom.js"></script>
    <script src="/assets/js/custom-card/custom-card.js"></script>
    <script src="/assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="/assets/js/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="/assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js"></script>
    <script src="/assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="/assets/js/vector-map/map/jquery-jvectormap-au-mill.js"></script>
    <script src="/assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js"></script>
    <script src="/assets/js/vector-map/map/jquery-jvectormap-in-mill.js"></script>
    <script src="/assets/js/vector-map/map/jquery-jvectormap-asia-mill.js"></script>
    <script src="/assets/js/dashboard/default.js"></script>
    <script src="/assets/js/notify/index.js"></script>
    <script src="/assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="/assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="/assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="/assets/js/script.js"></script>
    <script src="/assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>