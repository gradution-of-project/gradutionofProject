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

        @extends("navbarextend");
    <div class="container">
        <!--  add post(main comment) -->
        <div class="add-post">
            <form>
                <!--  add comment text-->
                <div class="form-group">
                    <textarea class="form-control" id="" ></textarea>
                </div>
                <!--  upload img to explain the case of patient-->
                <div class="upload-img">
                    <div class="img-comment-upload"></div>
                    <div class="">
                        <button class="btn btn-primary uploadimg-bt">Upload Image</button>
                        <input type="file" id="file" accept="image/*" style="display: none;" multiple >
                    </div>
               </div>
               <!--  to sent the comment -->
               <button type="submit" class="btn btn-primary add-post-submit">Ask</button>
               <div class="clearfix"></div>
            </form>
        </div>

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

        <!--  delete-->
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
                                <input type="file" id="make-replay-file" accept="image/*" style="display: none;" multiple>
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
                    <!--  replayied comment -->
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
        <!-- delete-->


    </div>





    <script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.js"></script>

	<script src="js/co.js"></script>
</body>
</html>
