<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/logo-header2.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/co.css">
    <title>comment</title>

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
                        <a class="nav-link" href="home.blade.php#firstPage">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home.blade.php#ask_doctor">ASK DOCTOR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home.blade.php#dental_services">DENTAL SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home.blade.php#our-doctors">DOCTORS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link sign-in" href="register.blade.php">SIGN IN</a>
                    </li>
                    <li class="nav-item">
                        <!------drop down profile list------->
                        <div class="btn-group profile-div">
                            <button type="button" class="btn profile-btn">
                                <img class="profile-img" src="img\choseuse.png">
                            </button>
                            <div class="dropdown-menu profile-menu">
                                <a class="dropdown-item" href="editprofile.blade.php">
                                    <i class="fas fa-user"></i><span style="padding-left:10px;">Profile</span>
                                </a>
                                <a class="dropdown-item" href="comment.blade.php">
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



    <div class="container">

        <div class="comment-replay row">
            <!-- details of the person put post-->
            <div class="col-2 text-center">
                <div>
                    <img class="person_comment_img rounded-circle" src="img/1.jpg">
                    <div class="text-center">user name</div>
                </div>
            </div>

            <div class="col-10">
                sdds
                <img class="image" src="">
                <!-- interaction  like comment -->
                <div class="interaction">
                    <div class="interaction-like">
                        <span>0 </span>
                        <i class="fas fa-thumbs-up"></i>
                        like
                    </div>
                    <div class="interaction-comment">
                        <span>0 </span>
                        <i class="fas fa-comment-alt"></i>
                        comment
                    </div>
                </div>



                <!--make replay for cooment -->
                <div class="make-replayied">
                    <form>
                        <div class="form-group">
                            <textarea class="form-control" rows="1"></textarea>
                        </div>
                        <!--  upload img to explain the case of patient-->
                        <div class="replay-upload-img">
                            <div class="img-make-replay-upload"></div>
                            <div class="make-replay-uploadimg-div">
                                <button class="btn btn-primary make-replay-uploadimg-bt">
                                    <i class="fas fa-camera"></i>
                                </button>
                                <input type="file" class="make-replay-file" accept="image/*" style="display: none;" multiple>
                            </div>
                        </div>
                        <!--  to sent the comment -->
                        <div class="make-replayied-send">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-arrow-alt-circle-right"></i>
                            </button>
                        </div>
                    </form>
                </div>


                <!--  replayied comment -->
                <div class="all">
                    <div class="comments">
                        <div class="row">
                            <div class="col-2" style="float: left;">
                                <div class="text-center">
                                    <img class="comment_img rounded-circle" src="img/1.jpg" >
                                    <div >user name</div>
                                </div>

                            </div>
                            <div class="col-10" style="float: left;">
                                <!--  text replay -->
                                <p>replay 1</p>
                                <img class="replay-image" src="">
                                <!-- interaction replay like comment -->
                                <div class="interaction-replay">
                                    <div class="interaction-like">
                                        <span>0</span>
                                        <i class="fas fa-thumbs-up"></i>
                                        like
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>


    </div>





    <script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.js"></script>

	<script src="js/co.js"></script>
</body>
</html>
