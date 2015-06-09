var overlay = $('.overlay');
var form_a = $('.content');
var body = $('.background_hide');
$('.close').click(function(e){
    e.preventDefault();
    form_a.fadeOut(100,function(){
        overlay.fadeOut(100);
        body.css({'overflow':'visible'});
    })
})