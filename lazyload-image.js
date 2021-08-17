let lazy = $('.lazy-load'); // tranh goi DOM nhieu lan gay anh huong den hieu suat
function lazy_img(){
    lazy.each(function() {
        if( $(this).offset().top <= ($(window).scrollTop() + $(window).height()) && // dieu kien hinh anh nam trong viewport moi load vao src
        	$(this).offset().top >= $(window).scrollTop() && // dieu kien hinh anh nam trong viewport moi load vao src
        	$(this).attr('src') == null ){
            	let src = $(this).attr('data-src');
            	$(this).attr('src', src);
        }
    });

    return false; // 

}
