<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    
    <link rel="stylesheet" href="css/bootstrap.css">     
    <link rel="stylesheet" href="css/register.css">
    <title>Regist</title>
</head>
<body>
    
    <div class="container">
    <!--    sign in /**/ login -->
            <div class="divmid-login col-lg-5 col-md-8 col-sm-10">
                <div class="login-logo">
                    <img src="img\logo-header2.png">
                    <h2>Login</h2>
                </div>
                
                <div class="bt-back">Back</div>
                <form class="px-4 py-3" action="" method="post">
                    <!--email-->
                    <div class="form-group email-div">
                        <input type="email" class="form-control email-input" id="exampleDropdownFormEmail1">
                        <span class="email-char">Email</span>
                    </div>
                    <!-- password -->
                    <div class="form-group password-div">
                        <input type="password" class="form-control password-input" id="exampleDropdownFormPassword1">
                        <span class="password-char">Password</span>
                        <span class="show-password"><i class="fa fa-eye" aria-hidden="true"></i></span>
                        <span class="hide-password hide"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
                    </div>
                    <button type="submit" class="btn btn-primary bt">Sign in</button>
                </form>
                <div class="dropdown-divider"></div>
                Don’t have an account?
                <div class="bt-sign-up">Sign up</div>
            </div>


            <!--    chose kind register -->
            <!--
            <div class="chose-kind-register hide col-lg-5 col-md-8 col-sm-10">
                <div class="chose-kind container">
                    <div class="bt-back-kind">Back</div>
                    <div class="chose-div doctor-regist">
                        <img src="img/chosedoc.png">
                        <h4>Doctor</h4>
                    </div>
                    <div class="chose-div user-regist">
                        <img src="img/choseuse.png">
                        <h4>User</h4>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            -->
        
            <!--------------------------  register div        ------------------------->
       
            <div class="divmid hide col-lg-5 col-md-8 col-sm-10">
                <div class="login-logo">
                    <img src="img\logo-header2.png">
                    <h2>Register</h2>
                </div>
                <div class="bt-back-regist">Back</div>

                <form class="px-4 py-3" action="" method="post">
                    <!--First,Last Name-->
                    <div class="form-row">
                        <div class="form-group col fname-div">
                            <input type="text" class="form-control fname-input" id="exampleDropdownFormEmail1">
                            <span class="fname-char">First Name</span>
                        </div>
                        <div class="form-group col lname-div">
                            <input type="text" class="form-control lname-input" id="exampleDropdownFormEmail1">
                            <span class="lname-char">Last Name</span>
                        </div>
                    </div>
                    <!--email-->
                    <div class="form-group email-div1">
                        <input type="email" class="form-control email-input1" id="exampleDropdownFormEmail1">
                        <span class="email-char1">Email Address</span>
                    </div>
                    
                    <!--pass-->
                    <div class="form-group password-div1">
                        <input type="password" class="form-control password-input1" id="exampleDropdownFormPassword1">
                        <span class="password-char1">Password</span>
                        <span class="show-password1"><i class="fa fa-eye" aria-hidden="true"></i></span>
                        <span class="hide-password1 hide"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
                    </div>
                    <!--c pass-->
                    <div class="form-group password-div1-confirm">
                        <input type="password" class="form-control password-input1-confirm" id="exampleDropdownFormPassword1">
                        <span class="password-char1-confirm">Confirm Password</span>
                        <span class="show-password2"><i class="fa fa-eye" aria-hidden="true"></i></span>
                        <span class="hide-password2 hide"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
                    </div>
                    <!--Gender-->
                    <div class="form-group" >
                        
                        <select class="form-control select-input">
                            <option value="0" disabled selected>Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <!--Date-->
                    <div class="form-group">
                        <input class="form-control date-input" type="date" name="bday">
                    </div>
                    <!--  phone-->
                    <div class="form-group phone-div">
                        <input type="text" class="form-control phone-input" id="exampleDropdownFormEmail1">
                        <span class="phone-char">Phone</span>
                    </div>
                    <!--delete-->
                    <div class="form-group hide clinic-address">
                        <label for="exampleDropdownFormEmail1">Clenic's Adress</label>
                        <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="adress clenic">
                    </div> 
                    <!--  Profile Image -->
                    <div class="container pro-picture">
                        <div class="row">
                            
                            <div style="bottom: 0px;" class="col-4">
                                <label>Profile Image</label><br>
                                <button class="btn btn-primary photo-btn">
                                    <i class="fas fa-folder-open"></i>
                                </button>
                                <br><input type="file" class="uploadfile" id="file" accept="image/*">
                            </div>
                            <div class="col-8">
                                <img src="img\choseuse.png" id="imgg" class="rounded-circle">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                    
                </form>
            </div>



            <!--------------------------  register for new doctor        ------------------------->
       
            <div class="divmid-doctor hide col-lg-5 col-md-8 col-sm-10" id="divmid-doctor">
                <div class="login-logo">
                    <img src="img\logo-header2.png">
                    <h2>Add Doctor</h2>
                </div>
                <div class="bt-back-doctor">Back</div>

                <form class="px-4 py-3" action="" method="post">
                    <!--First,Last Name-->
                    <div class="form-row">
                        <div class="form-group col fname-div">
                            <input type="text" class="form-control fname-input" id="exampleDropdownFormEmail1">
                            <span class="fname-char">First Name</span>
                        </div>
                        <div class="form-group col lname-div">
                            <input type="text" class="form-control lname-input" id="exampleDropdownFormEmail1">
                            <span class="lname-char">Last Name</span>
                        </div>
                    </div>
                    <!--email-->
                    <div class="form-group email-div1">
                        <input type="email" class="form-control email-input1" id="exampleDropdownFormEmail1">
                        <span class="email-char1">Email Address</span>
                    </div>
                    
                    <!--pass-->
                    <div class="form-group password-div1">
                        <input type="password" class="form-control password-input1" id="exampleDropdownFormPassword1">
                        <span class="password-char1">Password</span>
                        <span class="show-password"><i class="fa fa-eye" aria-hidden="true"></i></span>
                        <span class="hide-password hide"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
                    </div>
                    <!--c pass-->
                    <div class="form-group password-div1-confirm">
                        <input type="password" class="form-control password-input1-confirm" id="exampleDropdownFormPassword1">
                        <span class="password-char1-confirm">Confirm Password</span>
                        <span class="show-password"><i class="fa fa-eye" aria-hidden="true"></i></span>
                        <span class="hide-password hide"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
                    </div>
                    <!--Gender-->
                    <div class="form-group" >
                        
                        <select class="form-control select-input">
                            <option value="0" disabled selected>Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <!--Date-->
                    <div class="form-group">
                        <input class="form-control date-input" type="date" name="bday">
                    </div>
                    <!--  phone-->
                    <div class="form-group phone-div">
                        <input type="text" class="form-control phone-input" id="exampleDropdownFormEmail1">
                        <span class="phone-char">Phone</span>
                    </div>
                    <!--delete-->
                    <div class="form-group hide clinic-address">
                        <label for="exampleDropdownFormEmail1">Clenic's Adress</label>
                        <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="adress clenic">
                    </div> 
                    <!--  Profile Image -->
                    <div class="container pro-picture">
                        <div class="row">
                            
                            <div style="bottom: 0px;" class="col-4">
                                <label>Profile Image</label><br>
                                <button class="btn btn-primary">
                                    <i class="fas fa-folder-open"></i>
                                </button>
                                <br><input type="file" class="uploadfile" id="file" accept="image/*">
                            </div>
                            <div class="col-8">
                                <img src="img\choseuse.png" id="imgg" class="rounded-circle">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                    
                </form>
            </div>
        
        
    </div>

    

    

    <script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.js"></script>

	<script src="js/register.js"></script>


</body>
</html>