$(document).ready(function() {
    $('.list_box').click(function() {
        var title = $(this).find('.list_title').text();
        
        // AJAX 요청을 통해 서버로부터 필요한 데이터 가져오기
        $.ajax({
            url: './lib/tour_info.php',
            method: 'POST',
            data: {title: title},
            dataType: 'json',
            success: function(response) {
                // 가져온 데이터를 tour_info 요소에 적용
                $('.tour_name').text(response.name);
                $('.tour_loc').text(response.location);
                $('.tour_info_text').text(response.info);
                $('.tour_img img').attr('src', response.image);
                
                // tour_info 요소를 보여주기
                $('.tour_info').css('display', 'flex');
            },
            error: function() {
                console.log('Error: Failed to retrieve tour information.');
            }
        });
    });
    
    $('.tour_close_btn').click(function() {
        // tour_info 요소를 숨기기
        $('.tour_info').css('display', 'none');
    });
});
