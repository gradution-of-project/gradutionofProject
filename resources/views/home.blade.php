<html>
    <head>
        <title>Dentist</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="shortcut icon" href="img/logo-header2.png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    </head>
    <body>

    <!--  -----   navbar  ------    -->

        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="nav12">
            <div style="width: 100%;min-height: 50px"class="container">
                <img class="navbar-brand" src="img\logo-header.png">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#firstPage">HOME <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/asking">ASK DOCTOR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#dental_services">DENTAL SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#our-doctors">DOCTORS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sign-in" href="/register">SIGN IN</a>
                        </li>
                        <li class="nav-item">
                            <!------drop down profile list------->
                            <div class="btn-group profile-div">
                                <button type="button" class="btn profile-btn">
                                    <img class="profile-img" src="img\choseuse.png">
                                </button>
                                <div class="dropdown-menu profile-menu">
                                    <a class="dropdown-item" href="/editProfile">
                                        <i class="fas fa-user"></i><span style="padding-left:10px;">Profile</span>
                                    </a>
                                    <a class="dropdown-item" href="/asking">
                                        <i class="fas fa-comment"></i><span style="padding-left:10px;">Comment</span>
                                    </a>
                                    <a class="dropdown-item" href="/adddoctor">
                                        <i class="fas fa-user-md"></i><span style="padding-left:10px;">Add Doctor</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="">
                                        <i class="fas fa-sign-out-alt"></i><span style="padding-left:10px;">Log Out</span>
                                    </a>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>



        <div class="" id="firstPage">
    <!--  -----   carousel  ------    -->

            <div id="carouselExampleCaptions" class="carousel slide mt-40" data-ride="carousel">

                <div class="overlay"></div>

                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img\slider-1.jpg" class="d-block w-100" alt="slider 1">
                    </div>
                    <div class="carousel-item">
                        <img src="img\slider-2.jpg" class="d-block w-100" alt="slider-2">
                    </div>
                    <div class="carousel-item">
                        <img src="img\slider-3.jpg" class="d-block w-100" alt="slider-3">
                    </div>
                </div>
                <!-- carousel-caption in top for all -->

                <div class="carousel-caption carousel-caption-edit d-none d-md-block">
                    <p id="carousel-caption-paragraph-lg">
                        Welcome <span id="carousel-caption-paragraph-sm">to <br></span>Shiny
                        <span id="carousel-caption-paragraph-sm">Dental </span>care
                        <br><span id="carousel-caption-paragraph-sm">clinic </span>

                    </p>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

    <!--  -----   why choose us  ------  -->

            <div class="container containerhide">
                <h1 class="hed1">Why Choose Us?</h1>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-xs-12">
                        <img class="choose-img " src="img\slider-3.jpg">
                    </div>
                    <div class="col-lg-6 col-md-12 col-xs-12">

                        <div class="col-lg-5 chosimg-div" id="choose-div" style="background-color: #f4f9fc;">
                            <img class="choose-img2" src="img\choose us1.png">
                            <h4>Experienced Doctors</h4>

                        </div>
                        <div class="col-lg-5 chosimg-div" id="choose-div" style="background-color: #f4f9fc;">
                            <img class="choose-img2" src="img\choose us2.png">
                            <h4>20 Years of Experience</h4>

                        </div><br>
                        <div class="col-lg-5 chosimg-div" id="choose-div" style="background-color: #f4f9fc;">
                            <img class="choose-img2" src="img\choose us3.png">
                            <h4>Successful Cases</h4>

                        </div>
                        <div class="col-lg-5 chosimg-div" id="choose-div" style="background-color: #f4f9fc;">
                            <img class="choose-img2" src="img\choose us4.png">
                            <h4>Happy  Patient</h4>

                        </div>

                    </div>

                </div>
            </div>

    <!--    -------   Ask doctor --------   -->

            <div id="ask_doctor">
                <div class="ask_back">
                    <!-- img background-->
                    <div class="ask_overlay">
                        <div class="container container-edit">
                            <div class="row">
                                    <div class="ask_front"></div>
                                    <div class="ask_back_detail">
                                        <h1>Put your question</h1>
                                        <p>Doctors will answer</p>
                                        <a href="/asking">
                                            <button type="button" class="btn btn-primary ask_btn">Ask Doctor</button>
                                        </a>

                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

    <!--   ----   Dental Services   -------  -->

            <div class="container containerhide dental_services" id="dental_services">
                <h1 class="hed1">Dental Services</h1>
                <div class="row">

                    <div class="service-detial">
                        <div class="service-detial-img">
                            <img class="detial-img">
                        </div>
                        <h4></h4>
                        <p class="p1"></p>
                        <p class="p2"></p>
                        <div class="service-detial-exit">
                            <span>X</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 col-xs-12 service-div">
                        <img src="img\services-1.jpg" id="service-img" class="col-lg-12">
                        <h4>Root Canal Treatment</h4>
                        <p>
                                removal of dental pulp ,cleaning the root canal and filling it with
                                suitable restoration.
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12 service-div">
                        <img src="img\services-2.jpg" id="service-img" class="col-lg-12">
                        <h4>Extraction</h4>
                        <p>
                                the removal of tooth out of the mouth
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12 service-div">
                        <img src="img\services-3.jpg" id="service-img" class="col-lg-12">
                        <h4>Fillings</h4>
                        <p>
                                the process of removal of dental caries and replace missing tooth
                                structure by artifical restoration
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12 service-div">
                        <img src="img\services-4.jpg" id="service-img" class="col-lg-12">
                        <h4>Scaling</h4>
                        <p>
                                removal of calaulas
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12 service-div">
                        <img src="img\services-5.jpg" id="service-img" class="col-lg-12">
                        <h4>Fixed Prosthesis</h4>
                        <p>
                                restoring mised natural teeth by fixed artifical teeth
                                (crowns ,bridges)
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12 service-div">
                        <img src="img\services-6.jpg" id="service-img" class="col-lg-12">
                        <h4>Teeth Whitening</h4>
                        <p>
                                On the other hand, we denounce with righteous indignation and
                                dislike men who are so beguiled and demoralized by the charms...
                        </p>
                    </div>


                </div>
            </div>




    <!--    -------   feature --------   -->

            <div class="feature">
                <div class="container containerhide">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 feature-div">
                            <img src="img\feature-1.png" class="rounded-circle">
                            <h2>4,500</h2>
                            <p>Happy  Patient</p>
                        </div>
                        <div class="col-lg-3 col-sm-6 feature-div">
                            <img src="img\feature-2.png" class="rounded-circle">
                            <h2>15,600+</h2>
                            <p>Successful Cases</p>
                        </div>
                        <div class="col-lg-3 col-sm-6 feature-div">
                            <img src="img\feature-3.png" class="rounded-circle">
                            <h2>20</h2>
                            <p>Years of Experience</p>
                        </div>
                        <div class="col-lg-3 col-sm-6 feature-div">
                            <img src="img\feature-4.png" class="rounded-circle">
                            <h2>25</h2>
                            <p>Experienced Doctors</p>
                        </div>
                    </div>
                </div>

            </div>


    <!--  --------   Our Doctors    ------- -->

            <div class="container containerhide" id="our-doctors">
                <h1 class="hed1">Our Doctors</h1>
                <div class="row">
                    <div class="doctors col-md-6 col-sm-12 ourdoc-div">
                        <img src="img\team-1.jpg" class="doctors_img">
                        <div class="doctors_detail">
                            <h1>Henry  Doe</h1>
                            <p>
                                Details Clinc<br>
                                Details Phone<br>
                                Details Email<br>
                            </p>
                        </div>
                    </div>
                    <div class="doctors col-md-6 col-sm-12 ourdoc-div">
                        <img src="img\team-2.jpg" class="doctors_img">
                        <div class="doctors_detail">
                            <h1>Henry  Doe</h1>
                            <p>
                                Details Clinc<br>
                                Details Phone<br>
                                Details Email<br>
                            </p>
                        </div>
                    </div>
                    <div class="doctors col-md-6 col-sm-12 ourdoc-div">
                        <img src="img\team-3.jpg" class="doctors_img">
                        <div class="doctors_detail">
                            <h1>Henry  Doe</h1>
                            <p>
                                Details Clinc<br>
                                Details Phone<br>
                                Details Email<br>
                            </p>
                        </div>
                    </div>
                    <div class="doctors col-md-6 col-sm-12 ourdoc-div">
                        <img src="img\team-4.jpg" class="doctors_img">
                        <div class="doctors_detail">
                            <h1>Henry  Doe</h1>
                            <p>
                                Details Clinc<br>
                                Details Phone<br>
                                Details Email<br>
                            </p>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary show-more">show more</button>
                </div>
            </div>

            <!--     footer    -->
            <div class="footer">
                <div class="container">

                    <p>
                    <span>Register for free</span>
                    <a class="btn btn-rounded btn-light footer-btn" href="/register">Sign In</a>
                    </p>
                     <div>
                         <ul class="ml-auto footer-links">
                             <li class="nav-item active">
                                 <a class="nav-link" href="#firstPage">HOME <span class="sr-only">(current)</span></a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="/asking">ASK DOCTOR</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="#dental_services">DENTAL SERVICES</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="#our-doctors">DOCTORS</a>
                             </li>
                         </ul>

                     </div>

                </div>
                <div style="background: #111111;">
                    <p>© 2019 Copyright: All right reserved.Made with us for a better teeth. </p>
                </div>

            </div>




        </div>









        <script src="js/jquery-3.4.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/home.js"></script>
    </body>
</html>
