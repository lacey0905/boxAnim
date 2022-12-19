/* 상단 확대, 축소 */
var currFFZoom = 1;
var currIEZoom = 100;

function plus() {
    var step = 0.02;
    currFFZoom += step;
    $('body').css('MozTransform', 'scale(' + currFFZoom + ')');
    $(".viewp").text(currFFZoom);
    var stepie = 2;
    currIEZoom += stepie;
    $('body').css('zoom', ' ' + currIEZoom + '%');
    $(".viewp").text(currIEZoom);
};

function minus() {
    var step = 0.02;
    currFFZoom -= step;
    $('body').css('MozTransform', 'scale(' + currFFZoom + ')');
    $(".viewp").text(currFFZoom);
    var stepie = 2;
    currIEZoom -= stepie;
    $('body').css('zoom', ' ' + currIEZoom + '%');
    $(".viewp").text(currIEZoom);
};

/* gnb */
$(function () {
    $("header nav > ul .gnb").mouseenter(function () {
        $(this).parent().addClass("on");
        $(".subMenu").addClass("on").stop().slideDown();
    });
    $("header .header_wrap").mouseleave(function () {
        $("header nav > ul.tm1").removeClass("on");
        $(".subMenu").removeClass("on").fadeOut("fast");
    });
    $("header nav > ul .gnb > p").each(function (i) {
        $("header nav > ul .gnb > p").eq(i).mouseenter(function () {
            $(this).addClass("on");
            $(".subMenu dl").removeClass("on");
            $(".subMenu dl").eq(i).addClass("on");
        });
        $("header nav > ul .gnb > p").mouseleave(function () {
            $("header nav > ul .gnb > p").removeClass("on");
        });
    });
    $("header nav > ul .gnb").mouseleave(function () {
        $(".subMenu dl").removeClass("on");
        $("header nav > ul .gnb > p").removeClass("on");
    });
    $(".subMenu dl").each(function (i) {
        $(".subMenu dl").eq(i).mouseenter(function () {
            $("header nav > ul .gnb > p").removeClass("on");
            $("header nav > ul .gnb > p").eq(i).addClass("on");
        });
    });
    $(".subMenu dl").mouseleave(function () {
        $("header nav > ul .gnb > p").removeClass("on");
    });
});

/* 상단 검색 열기/닫기 */
$(function () {
    $("nav .tsearch a").click(function () {
        $(".subMenu").slideUp();
        $("#Mask").fadeIn();
        $(".topSearch").slideDown();
    });
    $(".topSearch .close").click(function () {
        $("#Mask").fadeOut();
        $(".topSearch").stop().slideUp();
    });
});


/* 상단 전체메뉴 열기/닫기 */
$(function () {
    $("header .allmenu button, footer .ft_nav .menu .sitemap").click(function () {
        $("#Mask").fadeOut();
        $(".topSearch").stop().slideUp();
        $(".subMenu").slideUp();
        $(".allMenu").stop().fadeIn();
    });
    $(".allMenu .am2 .close").click(function () {
        $(".allMenu").stop().fadeOut();
    });
});

/* 서브메뉴 열기/닫기 */
$(function () {
    $(".subMenu .inm a").click(function () {
        $(this).toggleClass("on");
        $(this).next().slideToggle();
    });
});

/* 모바일 카테고리 열기/닫기 */
$(function () {
    $(".m_nav_top .cateBtn").click(function () {
        $("body").addClass("ovh");
        $("#Mask").fadeOut();
        $(".topSearch").slideUp();
        $(".m_category").fadeIn();
    });
    $(".m_category .close").click(function () {
        $("body").removeClass("ovh");
        $(".m_category").fadeOut();
    });
});

/* 모바일 검색 열기 */
$(function () {
    $(".m_category .sch").click(function () {
        $("body").removeClass("ovh");
        $(".m_category").fadeOut();
        $("#Mask").fadeIn();
        $(".topSearch").slideDown();
    });
});

/* 모바일 카테고리 메뉴 열기 */
$(function () {
    $(".m_category .mCateBody > ul > li > a").click(function () {
        $(".m_category .mCateBody > ul > li > a").removeClass("on");
        $(this).addClass("on");
    });
});

/* 하단 선택박스 이동 */
$(function () {
    $(".csel select").change(function () {
        // alert($(this).val());
        $(this).next().attr("href", $(this).val());
    });
});

/* 검색필드 input 포커스 스타일 */
$(function () {
    $(".form-field .form-input").focus(function () {
        $(this).parent().addClass("focus");
    });
    $(".form-field .form-input").blur(function () {
        $(this).parent().removeClass("focus");
    });
});

/* 검색필드 select 포커스 스타일 */
$(function () {
    $('select').focus(
        function () {
            $(this).parent().addClass("focus");
        }).blur(
        function () {
            $(this).parent().removeClass("focus");
        });
});

/* 검색필드 textarea 포커스 스타일 */
$(function () {
    $('textarea').focus(
        function () {
            $(this).parent().addClass("focus");
        }).blur(
        function () {
            $(this).parent().removeClass("focus");
        });
});

/* textarea 글자 제한 */
$(function () {
    $('textarea.limit-txt').on('keyup', function () {
        $(this).next('.limit-cnt').html("" + $(this).val().length + "/3000");

        if ($(this).val().length > 3000) {
            $(this).val($(this).val().substring(0, 3000));
            $(this).next('.limit-cnt').html("3000/3000");
        }
    });
});

/* file 커스텀 */
$(function(){
    $(document).on("change", ".form .form-field.file [id*='file']", function(){
        var fileName = $(this).val();
        $(this).next(".upload-name").val(fileName);
    });
});

/* 중앙당 일정 - 일별 */
$(function () {
    var startSlide = $('.schedule-wrap .cal-daily .cur_day ul li.active').index();
    var schSlider = $('.schedule-wrap .cal-daily .cur_day ul').bxSlider({
        mode: 'horizontal',
        pager: false,
        slideWidth: 70,
        slideMargin: 10,
        minSlides: 1,
        maxSlides: 31,
        moveSlides: 1,
        pause: 6000,
        auto: false,
        controls: false,
        autoHover: false,
        autoControls: false,
        startSlide: startSlide,
        touchEnabled: (navigator.maxTouchPoints > 0)
    });

    // prev
    $('.schedule-wrap .cal-daily .cur_day a.pager-prev').click(function () {
        var current = schSlider.getCurrentSlide();
        schSlider.goToPrevSlide(current) - 1;
    });

    // next
    $('.schedule-wrap .cal-daily .cur_day a.pager-next').click(function () {
        var current = schSlider.getCurrentSlide();
        schSlider.goToNextSlide(current) + 1;
    });

    // 날짜 선택시 클래스 붙이기
    $('.schedule-wrap .cal-daily .cur_day ul li a').click(function () {
        $('.schedule-wrap .cal-daily .cur_day ul li').removeClass("active");
        $(this).parent().addClass("active");
    });
});

/* 중앙당 일정 - 월별 */
$(function () {
    $(".calendar-wrap ul.days li:not(.disabled) a").click(function () {
        $(".calendar-wrap ul.days li").removeClass("active");
        $(this).parent().addClass("active");
    });
});

/* 모달 열기 */
function modalOpen(target) {
    $("#" + target + "").addClass("active");
}

/* 모달 닫기 */
function modalClose(target) {
    $("#" + target + "").removeClass("active");
}

/* 로딩화면 열기 */
function loading() {
    $(".loading").css('display', 'flex');
}

/* 로딩화면 닫기 */
function loadingClose() {
    $(".loading").hide();
}

/* 숫자 두자리수 표기 */
function numFormat(variable) {
    variable = Number(variable).toString();
    if (Number(variable) < 10 && variable.length == 1) variable = "" + variable;
    return variable;
}

/* faq */
$(function () {
    $(".board-faq ul li .q-wrap > a.sbj").click(function () {
        $(this).closest("li").siblings().children(".a-wrap").slideUp();
        $(this).closest("li").siblings().removeClass("active");
        if ($(this).closest("li").hasClass("active")) {
            $(this).closest("li").children(".a-wrap").slideUp();
            $(this).closest("li").removeClass("active");
        } else {
            $(this).closest("li").children(".a-wrap").slideDown();
            $(this).closest("li").addClass("active");
        }
        return false;
    });
});

/* 동영상 강의/카드뉴스/포토뉴스 슬라이드 */
$(function () {
    var vslider = $('.v-slide .sl-bxslider ul').bxSlider({
        mode: 'horizontal',
        pagerCustom: '.v-slide .sl-pager ul',
        auto: false,
        pause: 6000,
        easing: 'ease-in-out',
        controls: true,
        autoHover: false,
        autoControls: false,
        touchEnabled: (navigator.maxTouchPoints > 0),
        onSlideAfter: function () {
            $('.v-slide .sl-bxslider .indi .cur').html(numFormat(vslider.getCurrentSlide() + 1));
            $('.v-slide .sl-bxslider .indi .end').html(numFormat(vslider.getSlideCount()));
        }
    });

    // indi
    $('.v-slide .sl-bxslider .indi .cur').html(numFormat(vslider.getCurrentSlide() + 1));
    $('.v-slide .sl-bxslider .indi .end').html(numFormat(vslider.getSlideCount()));
});

/* 동영상 강의/카드뉴스/포토뉴스 페이징 슬라이드 */
$(function () {
    var pagerslider = $('.v-slide .sl-pager ul').bxSlider({
        mode: 'horizontal',
        auto: false,
        pause: 6000,
        pager: false,
        slideWidth: 200,
        slideMargin: 20,
        minSlides: 1,
        maxSlides: 50,
        moveSlides: 1,
        controls: true,
        autoHover: false,
        autoControls: false,
        touchEnabled: (navigator.maxTouchPoints > 0)
    });
});

/* 자막보기 토글 */
$(function(){
    $(".subtitle-btn").click(function(){
        $(this).toggleClass("active");
    });
});

/* 사이드 메뉴 */
$(function(){
    $(document).on('click','.side_menu.closed .sw',function(e){  
        $(this).parent().removeClass('closed').addClass('opened');   
        
        $('.side_menu ul .sm1').css({ 'top':'-34rem' });
        $('.side_menu ul .sm2').css({ 'top':'-25.4rem' });
        $('.side_menu ul .sm3').css({ 'top':'-16.8rem' });
        $('.side_menu ul .sm4').css({ 'top':'-8.2rem' });
    });

    $(document).on('click','.side_menu.opened .sw',function(e){
        $(this).parent().removeClass('opened').addClass('closed');

        $('.side_menu ul li').css({ 'top':'0' });
    });
});

/* 사이드 메뉴 하단에 고정 */
$(function() {
    var $w = $(window),
    footerHei = $('#footer').outerHeight(),
    $banner = $('.side_menu');
    $w.on('scroll', function() {
        var sT = $w.scrollTop();
        var val = $(document).height() - $w.height() - footerHei;
        if (sT >= val)
            $banner.addClass('on');
        else
            $banner.removeClass('on');
    });
});

/* 시도당 찾기 클래스 */
$(function(){
    $(".location-map .city li a").click(function(){
        $(".location-map .city li").removeClass("active");
        $(this).parent().addClass("active");
    });
});

/* 기본정책 슬라이드 */
$(function () {
    var pslider = $('.basic-policy .pslider ul').bxSlider({
        mode: 'horizontal',
        pagerCustom: '.basic-policy .sl-pager ul',
        auto: true,
        pause: 6000,
        easing: 'ease-in-out',
        controls: false,
        autoHover: false,
        autoControls: false,
        adaptiveHeight: true,
        touchEnabled: (navigator.maxTouchPoints > 0),
        onSliderLoad: function(currentIndex) {
            $(".slogon-fix").html($('.basic-policy .pslider li[aria-hidden=false]').find(".slogon").html());
        },
        onSlideBefore: function($slideElement, oldIndex, newIndex) {
            $(".slogon-fix").html($slideElement.find(".slogon").html());
        },
        onSlideAfter: function (currentIndex) {         
            $('.basic-policy .pslider .indi .cur').html(numFormat(pslider.getCurrentSlide() + 1));
            $('.basic-policy .pslider .indi .end').html(numFormat(pslider.getSlideCount()));
        }
    });



    // indi
    $('.basic-policy .pslider .indi .cur').html(numFormat(pslider.getCurrentSlide() + 1));
    $('.basic-policy .pslider .indi .end').html(numFormat(pslider.getSlideCount()));

    // prev
    $('.basic-policy a.pager-prev').click(function () {
        var current = pslider.getCurrentSlide();
        pslider.goToPrevSlide(current) - 1;
    });

    // next
    $('.basic-policy a.pager-next').click(function () {
        var current = pslider.getCurrentSlide();
        pslider.goToNextSlide(current) + 1;
    });

    // pause
    $(document).on('click','.basic-policy .pager-stop',function(){         
        pslider.stopAuto();
        $(this).hide();
        $(".basic-policy .pager-play").show();
    });

    // play
    $(document).on('click','.basic-policy .pager-play',function(){         
        pslider.startAuto();   
        $(this).hide(); 
        $(".basic-policy .pager-stop").show();
    });

});

/* 당헌당규 토글 */
$(function(){
    $(".cr-head button.toggle, .cr-list button.toggle").click(function(){
        if($(this).parent().parent().hasClass('active')){
            $(this).parent().next("dd").slideUp();
            $(this).parent().parent().removeClass("active");            
        }else{
            $(this).parent().next("dd").slideDown();
            $(this).parent().parent().addClass("active");            
        }
    });

    $(".cr-list dt .hd1 a").click(function(){
        if($(this).closest("dl").hasClass('active')){
            $(this).closest("dl").find("dd").slideUp();
            $(this).closest("dl").removeClass("active");            
        }else{
            $(this).closest("dl").find("dd").slideDown();
            $(this).closest("dl").addClass("active");            
        }
    });    
});

//회원가입 전체 동의
$(function(){
    $('.all_agree #checkedAll').click(function(){
        var chk = $(".all_agree #checkedAll");
        $(".agree_box .self input:checkbox" ).prop('checked', chk.is(":checked"));
    }); 

    $('.self').bind('click',function(){
		var inp = $(this).find('input');
        if(inp.prop('checked')){
            var isallchecked = 0;
            $('.self').each(function(){
				var inp_s = $(this).find('input');
                if(!inp_s.prop('checked')) {isallchecked = 1;}
            });
            if(isallchecked == 0) {
                $('.all_agree #checkedAll').prop('checked', true);
            }
        } else {
            $('.all_agree #checkedAll').prop('checked', false);
        }
    });	
});

/* 검색 결과 키워드 */
$(function(){
    $(document).on('mousedown','.key-word-wrap li a',function(e){
        $(this).addClass("active");
        $(this).closest(".form-field").find(".form-input").val($(this).attr("data-value"));
    });
});  

/* 당원가입안내 QA */
$(function () {
    $(".mbi-qa ul li .q-wrap > a.sbj").click(function () {
        $(this).closest("li").siblings().children(".a-wrap").slideUp();
        $(this).closest("li").siblings().removeClass("active");
        if ($(this).closest("li").hasClass("active")) {
            $(this).closest("li").children(".a-wrap").slideUp();
            $(this).closest("li").removeClass("active");
        } else {
            $(this).closest("li").children(".a-wrap").slideDown();
            $(this).closest("li").addClass("active");
        }
        return false;
    });
});

/* 참여하기 투표 */
$(function () {
    $(".vote-list li button.vt-bar").click(function(){
        $(this).closest("li").siblings().removeClass("active");
        $(this).closest("li").addClass("active");
    });
}); 

/* 책갈피 이동 */
$(function(){
    $(".bookmark_scroll").click(function(event){
        event.preventDefault();
        var position = $(this.hash).offset().top;
        $('html,body').animate({scrollTop:position}, 500);
    });
});

/* 걸어온 길 */
$(window).on('load resize', function () {
    $('.h-body').each(function () {
        $('.left dl dd').each(function (index) {
            var left_h = $(this).height();
            var right_h = $('.right dl dd').eq(index).height();
            var max_height = Math.max(left_h, right_h);
            //console.log(max_height);
            $(this).height(max_height);
            $('.right dl dd').eq(index).height(max_height);
        });
    });
});
