<html>
    <head>
        <title>Edit Profile</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/editprofile.css">
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
                        <li class="nav-item">
                            <a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/asking">ASK DOCTOR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#dental_services">DENTAL SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#our-doctors">DOCTORS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sign-in" href="/register">SIGN IN</a>
                        </li>
                        <li class="nav-item">
                            <!------drop down profile list------->
                            <div class="btn-group profile-div">
                                <button type="button" class="btn profile-btn">
                                    <img class="profile-img rounded-circle" src="img\choseuse.png">
                                </button>
                                <div class="dropdown-menu profile-menu">
                                    <a class="dropdown-item" href="editProfile.blade.php">
                                        <i class="fas fa-user"></i><span style="padding-left:10px;">Profile</span>
                                    </a>
                                    <a class="dropdown-item" href="asking.blade.php">
                                        <i class="fas fa-comment"></i><span style="padding-left:10px;">Comment</span>
                                    </a>
                                    <a class="dropdown-item" href="adddoctor.blade.php">
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
            <!--  -----   edit profile page  ------    -->

                <form class="container" action="" method="post">
                    <div class="row">
                        <!-- edit photo-->
                        <div class="container col-4 pro-picture">
                            <div>
                                <img src="img\choseuse.png" id="imgg" class="rounded-circle">
                            </div>
                            <div class="">
                                <button class="btn btn-primary photo-btn" >
                                    <i class="fas fa-pen"></i>
                                </button>
                                <br><small>Select file < 1500 KB</small>
                                <br><input type="file" class="uploadfile" id="file" accept="image/*">
                            </div>
                        </div>
                        <!-- edit detail-->
                        <div class="col-sm-8">
                            <div class="row pro-detail">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="fname">First Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lname">Last Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="fname">Phone Number</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group" >
                                        <label for="lname">Gender</label>
                                        <select class="form-control ">
                                            <option class="" value="0" disabled selected>.....</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lname">Date</label>
                                        <input class="form-control" type="date" name="bday">

                                    </div>
                                </div>
                                <div class="row container">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-6">
                                        <div class="form-group text-center">
                                            <label for="pwd">Old Password</label>
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-3"></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="pwd">New Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="pwd">Confirm New Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group container">
                            <hr>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Update Profile</button>
                            </div>
                        </div>
                    </div>
                </form>
        </div>

        <!--     footer    -->
        <div class="footer">
            <div style="background: #111111;">
                <p>© 2019 Copyright: All right reserved.Made with us for a better teeth. </p>
            </div>
        </div>

        <script src="js/jquery-3.4.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/editprofile.js"></script>

    </body>
</html>
