
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Template for Bootstrap</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
  </head>

  <body class="bg-white">
    <header class="container-fluid fixed">
      <nav class="row">
        <div class="col-xs col-sm-2 col-md-2 col-lg-2 logo-wrapper flex-md-shrink flex-lg-shrink"> <a
            href="index.html" class="logo"> <img
              src="https://multi-site-ui.wisharemediacdn.com/images/9849fd5c2849d275c8b783682347cd2e/logo_freight_right_horizontal.svg?v=20210706154217"
              alt="Freight Right" /> </a> </div>
        <div id="menu"
          class="nav-wrapper col-xs col-md-10 col-lg-10 flex-md-grow flex-lg-grow show-md-flex show-lg-flex end-xs">
          <ul class="list list-flex">
            <li> <a href="{{url('/')}}" title="Home">Home</a> </li>
            
            <li> <a href="{{url('/about')}}" title="About Us">About Us</a> </li>
            
            <li> <a href="{{url('/contact-us')}}" title="Contact Us">Contact Us</a> </li>
            <li>
                          <a  class="active" href="{{url('our-services')}}" title="Contact Us">Our Services</a>
                      </li>
                      <li> <a data-submenu="#submenu-track-a-shipment" href="#" title="Track a Shipment">Track a
                Shipment</a>
              <div id="submenu-track-a-shipment" class="subnav-wrapper">
                <div class="show-xs-flex flex-xs-column pr-xs-4 pt-xs-4 pb-xs-4 pl-xs-4">
                  <p class="mb-lg-1 text-xs-center text-md-left">Enter Your Tracking Number</p>
                  <form class="show-xs-flex flex-xs-column flex-md-row" method="POST"
                    action="https://f12jgx-webtracker.wisegrid.net/Login/Login.aspx" target="_blank">
                    <input type="hidden" name="__VIEWSTATE"
                      value="/wEPDwUKLTQxMzExODgwNWQYAQUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgEFClpDaGVja0JveDGwVjkmnufBggcIVtWdh179TwIP1g==">
                    <input type="hidden" name="FindBtn" value="Find"> <input type="hidden"
                      name="__EVENTVALIDATION"
                      value="/wEdAAuOfNDRTdbqRG63ZhIJg2s55N6GKXPRi5S0DJMsHoMYt843Pz+KF0QwKGUPIy0Nq/LZR4N0D4H5HBFwywDx7UYoI7XYTiiV8Kq6dH9J82YOQTCiy8QkSzThMdjVlcCh87Dil0z6JziwC8YXwif7L6X53Lt2iPZwf5JRYNfIhT10GilUmQzDM3/ylWPOwJCThNPTdDYyJdSkBdHEr7sWz+wqBIRq5vIxFxx5aS8WNpiK+/CjBUoqeZ66DKYWRZJuaPACGEQ3">
                    <input class="form-control mb-xs-2" type="text"
                      name="ShipmentHousebillNumberTextbox" /> <button type="submit"
                      class="text-uppercase btn btn-ouline-sm btn-outline btn-caret ml-lg-1 mb-xs-2">Track
                      <svg class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true"
                        focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                        <path fill="currentColor"
                          d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                        </path>
                      </svg></button> </form>
                </div>
              </div>
            </li>
            <li> <a data-submenu="#submenu-login" href="#" title="Login">Login</a>
              <div id="submenu-login" class="subnav-wrapper">
                <ul class="list list-flex" style="justify-content: flex-start;">
                  <li style="max-height: 60px;"> <a href="https://customs.freightright.com/"
                      target="_blank" class="text-xs-center show-xs-flex "> Customers </a> </li>
                  <li style="max-height: 60px;"> <a
                      href="https://f12jgx-webtracker.wisegrid.net/Login/Login.aspx?ReturnUrl=%2fDefault.aspx/Login/Login.aspx?ReturnUrl=%2fDefault.aspx"
                      class="text-xs-center show-xs-flex "> Supply Chain Visibility </a> </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
        <div class="hamburger-icon-wrapper col-xs hide-md hide-lg show-xs-flex end-xs middle-xs"> <a href="#"
            id="nav-hamb"> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
          </a> </div>
      </nav>
    </header>

    <div class="bg-light">
        <div class="container py-4">
            <div class="row">
                <div class="col-sm-6 mt-3">
                    <h4>Auto Shipping</h4>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb float-right  bg-light">
                          <li class="breadcrumb-item"><a href="#" class="text-dark">Home</a></li>
                          <li class="breadcrumb-item"><a href="#"  class="text-dark">Services</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Auto Shipping</li>
                        </ol>
                      </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-5 bg-white">
      <div class="row">
          <div class="col-md-3 d-none d-md-block">
            <div class="mb-35">
              <ul class="list-group nav navbar-nav">
                <li class="list-group-item nav-item">
                  <a href="{{url('services')}}" class="nav-link text-dark">All Services <i class="fas fa-chevron-right float-right"></i></a>
                </li>
                <li class="list-group-item nav-item active">
                    <a href="{{url('services/ocean-transportation')}}" class="nav-link  text-dark">Ocean Transportation <i class="fas fa-chevron-right float-right"></i></a>
                </li>
                <li class="list-group-item nav-item">
                    <a href="{{url('services/inland-transportation')}}" class="nav-link text-dark">Inland Transportation <i class="fas fa-chevron-right float-right"></i></a>
                </li>
                <li class="list-group-item nav-item">
                    <a href="{{url('services/auto-shipping')}}" class="nav-link text-dark">Auto Shipping <i class="fas fa-chevron-right float-right"></i></a>
                </li>
                <li class="list-group-item nav-item">
                    <a href="{{url('services/loading')}}" class="nav-link text-dark">Loading Services <i class="fas fa-chevron-right float-right"></i></a>
                </li>
                <li class="list-group-item nav-item">
                    <a href="{{url('services/warehousing')}}" class="nav-link text-dark">Warehousing <i class="fas fa-chevron-right float-right"></i></a>
                </li>
              </ul>
            </div>
              <div class="mb-35">
                <div class="secondary-bg-color" style="padding: 35px 30px; color:white;">
                  <h5 class="h5 mt-0 text-dark" style="margin-bottom:15px;">How can we help you?</h5>
                  <p style="margin-bottom:25px;">If you'd like to discover more about our company or our
                     portfolio of services, you can find the right contact person here.</p>
                     <a href="#" class="btn btn-dark btn-default px-4 py-2"><i class="fas fa-phone-square"></i> Call Us</a>
                </div>
              </div>
              <div class="mb-35">
                <div class="text-center">
                  <ul class="list-inline">
                    <li class="list-inline-item text-18">
                      <i class="fab fa-facebook-f"></i>
                    </li>
                    <li class="list-inline-item text-18">
                      <i class="fab fa-twitter"></i>
                    </li>
                    <li class="list-inline-item text-18">
                      <i class="fa fa-rss"></i>
                    </li>
                    <li class="list-inline-item text-18">
                      <i class="fab fa-pinterest-p"></i>
                    </li>
                    <li class="list-inline-item text-18">
                      <i class="fab fa-linkedin-in"></i>
                    </li>
                  </ul>
                </div>
              </div>
          </div>

          <div class="col-md-8 col-lg-9">
            <div class="text-heading" style="margin-top: 20px;">
              <h2 class="h2 text-uppercase">Why Choose us</h2>
            </div>
            <div class="p-1 text-cont">
              AFG offers all the services on a global scale and has necessary tie ups with
               International associations. We have access to global shipping networks, ware
                houses and good connections in freight forwarding industry. Such associations 
                enable us to come up with competitive prices. We have experienced and well 
                trained staffs dedicated to offer excellent service and quick responses to 
                all calls, mails and messages – we understand that effective communication 
                is an absolute.
            </div>
            

          </div>
        
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="{{asset('js/app.js')}}"></script>

  </body>
</html>
