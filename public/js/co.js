/* upload img in main comment */

$('.uploadimg-bt').on('click',function(){
    $('#file').click();
    return false;
});

$('#file').on('change',function(){
    var input=this;
    if (input.files) {
        var filesAmount = input.files.length;
        for (i = 0; i < filesAmount; i++) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $item=$("<img>");
                $item.attr('src',e.target.result).width(150).height(130);        
                $(".img-comment-upload").append($item);
            }
            reader.readAsDataURL(input.files[i]);
        }
    }  
});
/* upload img to make replay to main comment */

$('.make-replay-uploadimg-bt').on('click',function(){
    $('.make-replay-file').click();
    return false;
});

$('.make-replay-file').on('change',function(){
    var input=this;
    if (input.files) {
        var filesAmount = input.files.length;
        for (i = 0; i < filesAmount; i++) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $item=$("<img>");
                $item.attr('src',e.target.result).width(150).height(130);
                $('.make-replay-file').parent().parent().append($item);
            }
            reader.readAsDataURL(input.files[i]);
        }
    }  
});
//  make textarea dinamic with line
$("textarea").on('input', function() {
    this.style.height = "";
    this.style.height = Math.min(this.scrollHeight) + "px";
});

$('.interaction-like').on('click',function(){
    $color = $(this).css('color');
    $s=$(this).children('span').text();
    if($color=='rgb(0, 0, 255)'){
        $s--;
        $(this).css({'color':''});
    }else{
        $s++;
        $(this).css({'color':'blue'});
    }
    $(this).children('span').text($s);
});

$('.interaction-comment').click(function(){
    $s= $(this).parent().parent().children('.all').children().length; ;
    console.log($s);
    $(this).children('span').text($s);
})

