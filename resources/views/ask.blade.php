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
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.js"></script>

        @extends("navbarextend");
    <div class="container">
        <!--  add post(main comment) -->
        <div class="add-post">
            <form action="{{route('saveposts')}}" method="post" enctype="multipart/form-data" id="form-data">
                <!--  add comment text-->
                <div class="form-group">
                    <textarea class="form-control" id=""  name="postbody"></textarea>
                </div>
                <!--  upload img to explain the case of patient-->
                <div class="upload-img">
                    <div class="img-comment-upload"></div>
                    <div class="">
                        <button class="btn btn-primary uploadimg-bt">Upload Image</button>
                        <input type="file" id="file" accept="image/*" name="image[]" style="display: none;" multiple >
                    </div>
               </div>
               <!--  to sent the comment -->
               <button type="submit" class="btn btn-primary add-post-submit">Ask</button>
                <input type="hidden"  value="{{Session::token()}}" name="_token">
               <div class="clearfix"></div>
            </form>
        </div>
           <div>
               <br>
               <a href="{{route('showpost')}}">   <button  class="btn btn-primary">show more</button></a>
           </div>

             @if(isset($allpost))
             @if(count($allpost) >0)
                 @foreach($allpost as $post)
        <div class="comment-replay row">
            <!-- details of the person put post-->
            <div class="col-2 text-center">
                <div>
                    <img class="person_comment_img rounded-circle" src="publicimages\{{$post->image}}">
                    <div class="text-center person_name">{{$post->fristname}} {{$post->lastname}}</div>
                </div>
            </div>

            <div class="col-10">
                <p class="postbody">{{$post->body}}</p>
                @php
                   $images= json_decode($post->imagepost,true);
                  //      echo count($images);
                @endphp

                <img class="" src="publicimages">

                <!-- interaction  like comment -->
                <div class="interaction">
                    <div class="interaction-like">


                      <span ></span>
                        <i class="fas fa-thumbs-up"></i>
                        like
                    </div>
                    <div class="interaction-comment">
                            <a href="{{route('showcomment', $post->id)}}"><span id="numcomment">0 </span>
                                <i class="fas fa-comment-alt"></i>
                                comment </a>


                    </div>
                </div>



                <!--make replay for cooment -->
                <div class="make-replayied">
                    <form action="{{route('savecomments')}}" enctype="multipart/form-data" method="post" id="form-data-comment">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input  type="hidden" class="form-control" rows="1" name="postid" value="{{$post->id}}">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="1" name="commentbody"></textarea>
                        </div>

                        <!--  upload img to explain the case of patient-->
                        <div class="replay-upload-img">
                            <div class="img-make-replay-upload"></div>
                            <div class="make-replay-uploadimg-div">
                                <button class="btn btn-primary make-replay-uploadimg-bt">
                                    <i class="fas fa-camera"></i>
                                </button>
                                <input type="file" class="make-replay-file" accept="image/*" style="display: none;" multiple name="imagescomment[]">
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

            @if(isset($allcomment))
                @if(count($allcomment) > 0 )
                    @foreach($allcomment as $comment)

                            @if($post->id ==$comment->id_post )


                <!--  replayied comment -->
                <div class="all">
                    <div class="comments">
                        <div class="row">
                            <div class="col-2" style="float: left;">
                                <div class="text-center">
                                    <img class="person_comment_img rounded-circle" src="publicimages\{{$comment->image}}" >
                                    <div class="person_name" >{{$comment->fristname}} {{$comment->lastname}}</div>
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
                           @endif
                        @endforeach
                    @endif
                @endif

            </div>


        </div>

            @endforeach
        @endif
    @endif

        <!-- delete-->


    </div>







	<script src="js/co.js"></script>


            <script>
                $('#form-data').submit(function (e) {
                      //   e.preventDefault();
                         var route='/savepost';
                    $.ajax({
                        type:'post',
                        url:route,
                        data:{'data':$(this).serialize()},
                        success:function () {
                            console.log('')
                        }
                    });
                });

                $('#form-data-comment').submit(function (e) {
                    //   e.preventDefault();
                    var route='/savecomment';
                    $.ajax({
                        type:'post',
                        url:route,
                        data:{'data':$(this).serialize()},
                        success:function () {
                            console.log('')
                        }
                    });
                });
                $.ajax({
                    type:'get',
                    url:'readData',
                    data:{'data':''},
                    success:function (data) {
                        console.log(data)
                    }
                });
                $.ajax({
                    type:'get',
                    url:'readDatacomment',
                    data:{'data':''},
                    success:function (data) {
                        console.log(data)
                    }
                });
            </script>
</body>
</html>
