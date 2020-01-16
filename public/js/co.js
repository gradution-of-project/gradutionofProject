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
    $('#make-replay-file').click();
    return false;
});

$('#make-replay-file').on('change',function(){
    var input=this;
    if (input.files) {
        var filesAmount = input.files.length;
        for (i = 0; i < filesAmount; i++) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $item=$("<img>");
                $item.attr('src',e.target.result).width(150).height(130);
                $(".img-make-replay-upload").append($item);
            }
            reader.readAsDataURL(input.files[i]);

        }
    }
});


//var textarea = document.getElementById("textarea");

// textarea.oninput = function() {
//   textarea.style.height = "";
//   textarea.style.height = Math.min(textarea.scrollHeight) + "px";
// };

$("textarea").on('input', function() {
    this.style.height = "";
    this.style.height = Math.min(this.scrollHeight) + "px";
  });
