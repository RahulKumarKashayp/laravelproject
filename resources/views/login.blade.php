<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="header-top d-flex bg-success">
    <ul class=" list-unstyled align-middle d-flex ml-auto">
        <li><a href="/">Home</a></li>
        <li><a href="#">Screen Reader Access</a></li>
        <li><a href="#">A-</a></li>
        <li><a href="#">A</a></li>
        <li><a href="#">A+</a></li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary text-white my-2 my-sm-0" type="submit">Search</button>
    </form>
</div>

<div class="container">
    <section class="d-flex mt-1">
        <div class="logo-image position-relative">
            <a href="/">
                <img  src="assets/images/logo.png">

            </a>
        </div>
        <div class="goverment ml-4">
            <h4 class="text-secondary">Government of india</h4>
            <h2>MINISTRY OF ROAD TRANSPORT & HIGHWAYS</h2>

        </div>
    </section>
</div>
<div class="main-header bg-info mt-4 mt-md-2 mt-sm-2">
    <div class="container p-0">
        <nav class="navbar navbar-expand-lg navbar-light py-0">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse py-0" id="navbarSupportedContent">
                <ul class="navbar-nav py-0">
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">
                            <button type="button" class="btn btn-info">About Us</button>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">
                            <button type="button" class="btn btn-info">Online Service</button></a>
                        <ul class="list-unstyled">
                            <li><a href="#">Vehicle Related Services</a></li>
                            <li><a href="#">Driving License Related Services</a></li>
                            <li><a href="#">Check Post Tax</a></li>
                            <li><a href="#">Fancy Number Booking </a></li>
                            <li><a href="#">Nr Service</a></li>
                            <li><a href="#">Paid NR Service</a></li>
                            <li><a href="#">Homologation</a></li>
                            <li><a href="#">National Premit Authorization</a></li>
                        </ul>

                    </li>
                    <ul class="list-unstyled">
                        <li class="nav-item"><a class="nav-link"  href="#">
                                <button type="button" class="btn btn-info">Information Service</button> </a>
                            <ul class="list-unstyled">
                                <li><a href="#">Know Your license Details</a></li>
                                <li><a href="#">know your vehicle details</a></li>
                                <li><a href="#">About license</a></li>
                                <li><a href="#">parmanent license</a></li>
                                <li><a href="#">renewal</a></li>
                                <li><a href="#">duplicate license</a></li>

                            </ul></li>
                    </ul>
                    <ul class="list-unstyled">
                        <li class="nav-item"><a class="nav-link"  href="#">
                                <button type="button" class="btn btn-info">Dashboard & Report</button> </a>
                            <ul class="list-unstyled">
                                <li><a href="#">analytics</a></li>
                                <li><a href="#">vahan report</a></li>
                                <li><a href="#">sarathi report</a></li>
                                <li><a href="#">vahan4 Dashboard</a></li>
                                <li><a href="#">sarthi4 dashboard</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="list-unstyled">
                        <li class="nav-item"><a class="nav-link"  href="#">
                                <button type="button" class="btn btn-info">External Links</button></a>
                            <ul class="list-unstyled">
                                <li><a href="#">delhi traffic police(notice)</a></li>
                                <li><a href="#">MoRTH</a></li>
                                <li><a href="#">national information center</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="list-unstyled">
                        <li class="nav-item"><a class="nav-link"  href="#"><button type="button" class="btn btn-info">Public Media</button></a>
                            <ul class="list-unstyled">
                                <li><a href="#">privahan newsletter</a></li>
                                <li><a href="#">next mile</a></li>
                                <li><a href="#"></a>circulars</li>
                                <li><a href="#">January pass coverage</a></li>

                            </ul>

                        </li>
                    </ul>
                    <ul class="list-unstyled">
                        <li class="nav-item"><a class="nav-link"  href="#"><button type="button" class="btn btn-info">Sitemap</button></a></li>
                    </ul>
                    <ul class="list-unstyled">
                        <li class="nav-item"><a class="nav-link"  href="#"><button type="button" class="btn btn-info">Contact Us</button></a></li>
                    </ul>
                    <ul class="list-unstyled vahanrg">
                        <li class="nav-item"><a class="nav-link"  href="#"><button type="button" class="btn btn-info">Login</button></a>
                            <ul class="list-unstyled vahanrg">
                                <li><a href="registration">vahan registration</a></li>
                                <li><a href="#">sarthi login</a></li>
                                <li><a href="#">dealer login</a></li>
                                <li><a href="#">vahan back log login</a></li>
                            </ul>
                        </li>
                    </ul>
                </ul>
            </div>
        </nav>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 co-lg-8 col-sm-1l2 m-auto">
            <form class="mt-4"  method="POST" action="login">

                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1"  placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control"  name="password" id="exampleInputPassword1" placeholder="Password" required>
                    <!--                <input type="password" class="form-control"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="exampleInputPassword1" placeholder="Password" required>-->
                </div>
                <!--        <div class="form-check">-->
                <!--            <input type="checkbox" class="form-check-input" id="exampleCheck1">-->
                <!--            <label class="form-check-label" for="exampleCheck1">Check me out</label>-->
                <!--        </div>-->
                <button type="submit" class="btn btn-primary" name="login">Login</button>
                <small>you have not any account <a href="registration"><button type="button" class="btn btn-outline-danger">Registration</button>
                    </a></small>
            </form>
        </div>
    </div>
</div>

<!-- =============================Footer Section===================================== -->

<footer  class="mt-4" style="background-color: #333a40;">
    <section>
        <div class="container">
            <div class="footer-section text-white text-capitalize">
                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <div class="row">
                            <div class="col-md-3 col-sm-12">
                                <p>terms and policies</p>
                                <ul class="list-unstyled">
                                    <li><a href="#">privacy policies</a></li>
                                    <li><a href="#">hyper link policies</a></li>
                                    <li><a href="#">website policies</a></li>
                                    <li><a href="#">content policies</a></li>
                                    <li><a href="#">contingancy plan</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <p>About</p>
                                <ul class="list-unstyled">
                                    <li><a href="#">about us </a></li>
                                    <li><a href="#">sitmap</a></li>
                                    <li><a href="#">terms of use</a></li>
                                    <li><a href="#">mporth</a></li>
                                    <li><a href="#">Cmrv 1989</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <p>Resorces</p>
                                <ul class="list-unstyled">
                                    <li><a href="#">fees and user charges</a></li>
                                    <li><a href="#">Act, rules & polices</a></li>
                                    <li><a href="#">permits fees and period</a></li>
                                    <li><a href="#">manual</a></li>
                                    <li><a href="#">homologation</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <p>need helps</p>
                                <ul class="list-unstyled">
                                    <li><a href="#">contact us</a></li>
                                    <li><a href="#">frequently ask question</a></li>
                                    <li><a href="#">raise a concern</a></li>
                                    <li><a href="#">feesdback</a></li>
                                    <li><a href="#">web information manager</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <div class="row" style="margin-top: 42px;">
                            <div class="col-md-4 col-sm-6">
                                <div class="scanner">
                                    <img src="https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl=https://parivahan.gov.in/parivahan//en/content/mparivahan&chld=H|0">
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <div class="row mt-2">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="nic-logo  mt-2">
                                            <img src="https://parivahan.gov.in/parivahan///sites/default/files/img/nic-logo.png">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="digital-logo">
                                            <img src="https://parivahan.gov.in/parivahan///sites/default/files/digital-india-icon.png">
                                        </div>
                                    </div>
                                    <small>This Website belongs to Ministry of Road Transport & Highways (MoRTH)Government of India</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
