$(document).ready(function(){
    let list = $(".list");
    list.on('click',function(){
        list.removeClass('active');
        $(this).addClass('active');

    })
    
})