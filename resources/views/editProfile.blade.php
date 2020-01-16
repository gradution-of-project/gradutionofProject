<html>
    <head>
        <title>Edit Profile</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/editprofile.css">
        <link rel="shortcut icon" href="img/logo-header2.png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    </head>
    <body>
        <!--  -----   navbar  ------    -->
        @extends("navbarextend");

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
