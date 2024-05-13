$(document).ready(function(){
    let list = $(".list");
    list.on('click',function(){
        list.removeClass('active');
        $(this).addClass('active');

    })
    
})


$(document).ready(function() {

    $("#contents").click(function() {
        $("#popup").fadeIn();

    });
    $(".close_btn").click(function() {
        $("#popup").fadeOut();

    });

});