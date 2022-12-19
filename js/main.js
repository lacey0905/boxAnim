let time = 0;
let interval;
let timeSet;
let duration = 6;

// $(function () {
//   var mvs_slider = $(".main_slide ul").bxSlider({
//     auto: true,
//     controls: false,
//     pause: 6000,
//     mode: "fade",
//     autoControls: true,
//     touchEnabled: navigator.maxTouchPoints > 0,
//     onSlideAfter: function () {
//       time = 0;
//       duration = 6;
//       $(".pro-bar").addClass("pro-ani");
//       $(".pro-ani").css({
//         "animation-duration": "6s",
//       });
//       timeSet = setInterval(function () {
//         duration--;
//       }, 1000);
//     },
//     onSlideBefore: function () {
//       $(".pro-bar").removeClass("pro-ani");
//       clearInterval(timeSet);
//     },
//   });

//   $(".main_slide .bx-stop").click(function () {
//     $(this).hide();
//     $(".main_slide .bx-start").css("display", "block");
//   });

//   $(".main_slide .bx-start").click(function () {
//     $(this).hide();
//     $(".main_slide .bx-stop").css("display", "block");
//   });
// });

/* 일간이슈 텝 */
$(function () {
  $(".msec").sectionDisplay({
    act: "click",
    start: 0,
    nav: $(".mnav"),
    auto: false,
    autoTime: 3000,
  });
});

/* 일간이슈 전체 Slider */
$(function () {
  var allSlider = $(".msec .all ul").bxSlider({
    mode: "horizontal",
    pager: false,
    slideWidth: 408,
    slideMargin: 0,
    minSlides: 1,
    maxSlides: 4,
    moveSlides: 1,
    pause: 6000,
    auto: true,
    controls: false,
    autoHover: false,
    autoControls: false,
    touchEnabled: navigator.maxTouchPoints > 0,
    onSlideAfter: function () {
      $(".msec .all .indi .cur").html(
        numFormat(allSlider.getCurrentSlide() + 1)
      );
      $(".msec .all .indi .end").html(numFormat(allSlider.getSlideCount()));
    },
  });

  // indi
  $(".msec .all .indi .cur").html(numFormat(allSlider.getCurrentSlide() + 1));
  $(".msec .all .indi .end").html(numFormat(allSlider.getSlideCount()));

  // prev
  $(".msec .all a.pager-prev").click(function () {
    var current = allSlider.getCurrentSlide();
    allSlider.goToPrevSlide(current) - 1;
  });

  // next
  $(".msec .all a.pager-next").click(function () {
    var current = allSlider.getCurrentSlide();
    allSlider.goToNextSlide(current) + 1;
  });

  // pause
  $(document).on("click", ".msec .all .pager-stop", function () {
    allSlider.stopAuto();
    $(this).hide();
    $(".msec .all .pager-play").show();
  });

  // play
  $(document).on("click", ".msec .all .pager-play", function () {
    allSlider.startAuto();
    $(this).hide();
    $(".msec .all .pager-stop").show();
  });

  $(".mtab > .mnav li a").on("click", function (e) {
    $(".msec .all .indi .cur").html("1");
    e.preventDefault();
    setTimeout(function () {
      allSlider.reloadSlider();
    }, 0);
  });
});

/* 일간이슈 카드뉴스 Slider */
$(function () {
  var cardSlider = $(".msec .card ul").bxSlider({
    mode: "horizontal",
    pager: false,
    slideWidth: 408,
    slideMargin: 0,
    minSlides: 1,
    maxSlides: 4,
    moveSlides: 1,
    pause: 6000,
    auto: true,
    controls: false,
    autoHover: false,
    autoControls: false,
    touchEnabled: navigator.maxTouchPoints > 0,
    onSlideAfter: function () {
      $(".msec .card .indi .cur").html(
        numFormat(cardSlider.getCurrentSlide() + 1)
      );
      $(".msec .card .indi .end").html(numFormat(cardSlider.getSlideCount()));
    },
  });

  // indi
  $(".msec .card .indi .cur").html(numFormat(cardSlider.getCurrentSlide() + 1));
  $(".msec .card .indi .end").html(numFormat(cardSlider.getSlideCount()));

  // prev
  $(".msec .card a.pager-prev").click(function () {
    var current = cardSlider.getCurrentSlide();
    cardSlider.goToPrevSlide(current) - 1;
  });

  // next
  $(".msec .card a.pager-next").click(function () {
    var current = cardSlider.getCurrentSlide();
    cardSlider.goToNextSlide(current) + 1;
  });

  // pause
  $(document).on("click", ".msec .card .pager-stop", function () {
    cardSlider.stopAuto();
    $(this).hide();
    $(".msec .card .pager-play").show();
  });

  // play
  $(document).on("click", ".msec .card .pager-play", function () {
    cardSlider.startAuto();
    $(this).hide();
    $(".msec .card .pager-stop").show();
  });

  $(".mtab > .mnav li a").on("click", function (e) {
    $(".msec .card .indi .cur").html("1");
    e.preventDefault();
    setTimeout(function () {
      cardSlider.reloadSlider();
    }, 0);
  });
});

// (function ($) {
//     $(document).ready(function () {
//         if ($('.msec .card').length > 0) {
//             var cardSlider = $('.msec .card ul').bxSlider();
//         }

//         function card_bxInit() {
//             var card_winSize = $(window).width(),
//                 card_sizeID;
//             if (card_winSize < 1400 && card_winSize >= 1020) {
//                 card_sizeID = 3;
//             } else if (card_winSize < 1020 && card_winSize >= 480) {
//                 card_sizeID = 2;
//             } else if (card_winSize < 480) {
//                 card_sizeID = 1;
//             } else {
//                 card_sizeID = 4;
//             }
//             cardSlider.reloadSlider({
//                 mode:'horizontal',
//                 pager:false,
//                 slideWidth: 500,
//                 slideMargin: 0,
//                 minSlides: card_sizeID,
//                 maxSlides: card_sizeID,
//                 moveSlides: 1,
//                 pause: 6000,
//                 auto:true,
//                 controls:false,
//                 autoHover:false,
//                 autoStart: true,
//                 autoDelay: 750,
//                 autoControls:false,
//                 touchEnabled : (navigator.maxTouchPoints > 0),
//                 onSlideAfter: function(){
//                     $('.msec .card .indi .cur').html(numFormat(cardSlider.getCurrentSlide()+1));
//                     $('.msec .card .indi .end').html(numFormat(cardSlider.getSlideCount()));
//                 }
//             });
//         }

//         card_bxInit();
//         $(window).resize(function () {
//             cardSlider.stopAuto(true);
//             card_bxInit();
//             cardSlider.onSliderLoad(function () {
//                 this.autoDelay(750).autoStart(true);
//             });
//         });

//         // indi
//         $('.msec .card .indi .cur').html(numFormat(cardSlider.getCurrentSlide()+1));
//         $('.msec .card .indi .end').html(numFormat(cardSlider.getSlideCount()));

//         // prev
//         $('.msec .card a.pager-prev').click(function () {
//             var current = cardSlider.getCurrentSlide();
//             cardSlider.goToPrevSlide(current) - 1;
//         });

//         // next
//         $('.msec .card a.pager-next').click(function () {
//             var current = cardSlider.getCurrentSlide();
//             cardSlider.goToNextSlide(current) + 1;
//         });

//         // pause
//         $(document).on('click','.msec .card .pager-stop',function(){
//             cardSlider.stopAuto();
//             $(this).hide();
//             $(".msec .card .pager-play").show();
//         });

//         // play
//         $(document).on('click','.msec .card .pager-play',function(){
//             cardSlider.startAuto();
//             $(this).hide();
//             $(".msec .card .pager-stop").show();
//         });

//         $('.mtab > .mnav li a').on('click', function(e) {
//             $('.msec .card .indi .cur').html('1');
//             e.preventDefault();
//             setTimeout(function() {
//                 cardSlider.reloadSlider();
//             }, 0);
//         });

//     });
// }(jQuery));

/* 일간이슈 보도자료 Slider */
$(function () {
  var pressSlider = $(".msec .press ul").bxSlider({
    mode: "horizontal",
    pager: false,
    slideWidth: 408,
    slideMargin: 0,
    minSlides: 1,
    maxSlides: 4,
    moveSlides: 1,
    pause: 6000,
    auto: true,
    controls: false,
    autoHover: false,
    autoControls: false,
    touchEnabled: navigator.maxTouchPoints > 0,
    onSlideAfter: function () {
      $(".msec .press .indi .cur").html(
        numFormat(pressSlider.getCurrentSlide() + 1)
      );
      $(".msec .press .indi .end").html(numFormat(pressSlider.getSlideCount()));
    },
  });

  // indi
  $(".msec .press .indi .cur").html(
    numFormat(pressSlider.getCurrentSlide() + 1)
  );
  $(".msec .press .indi .end").html(numFormat(pressSlider.getSlideCount()));

  // prev
  $(".msec .press a.pager-prev").click(function () {
    var current = pressSlider.getCurrentSlide();
    pressSlider.goToPrevSlide(current) - 1;
  });

  // next
  $(".msec .press a.pager-next").click(function () {
    var current = pressSlider.getCurrentSlide();
    pressSlider.goToNextSlide(current) + 1;
  });

  // pause
  $(document).on("click", ".msec .press .pager-stop", function () {
    pressSlider.stopAuto();
    $(this).hide();
    $(".msec .press .pager-play").show();
  });

  // play
  $(document).on("click", ".msec .press .pager-play", function () {
    pressSlider.startAuto();
    $(this).hide();
    $(".msec .press .pager-stop").show();
  });

  $(".mtab > .mnav li a").on("click", function (e) {
    $(".msec .press .indi .cur").html("1");
    e.preventDefault();
    setTimeout(function () {
      pressSlider.reloadSlider();
    }, 0);
  });
});

/* 일간이슈 논평 Slider */
$(function () {
  var commentSlider = $(".msec .comment ul").bxSlider({
    mode: "horizontal",
    pager: false,
    slideWidth: 408,
    slideMargin: 0,
    minSlides: 1,
    maxSlides: 4,
    moveSlides: 1,
    pause: 6000,
    auto: true,
    controls: false,
    autoHover: false,
    autoControls: false,
    touchEnabled: navigator.maxTouchPoints > 0,
    onSlideAfter: function () {
      $(".msec .comment .indi .cur").html(
        numFormat(commentSlider.getCurrentSlide() + 1)
      );
      $(".msec .comment .indi .end").html(
        numFormat(commentSlider.getSlideCount())
      );
    },
  });

  // indi
  $(".msec .comment .indi .cur").html(
    numFormat(commentSlider.getCurrentSlide() + 1)
  );
  $(".msec .comment .indi .end").html(numFormat(commentSlider.getSlideCount()));

  // prev
  $(".msec .comment a.pager-prev").click(function () {
    var current = commentSlider.getCurrentSlide();
    commentSlider.goToPrevSlide(current) - 1;
  });

  // next
  $(".msec .comment a.pager-next").click(function () {
    var current = commentSlider.getCurrentSlide();
    commentSlider.goToNextSlide(current) + 1;
  });

  // pause
  $(document).on("click", ".msec .comment .pager-stop", function () {
    commentSlider.stopAuto();
    $(this).hide();
    $(".msec .comment .pager-play").show();
  });

  // play
  $(document).on("click", ".msec .comment .pager-play", function () {
    commentSlider.startAuto();
    $(this).hide();
    $(".msec .comment .pager-stop").show();
  });

  $(".mtab > .mnav li a").on("click", function (e) {
    $(".msec .comment .indi .cur").html("1");
    e.preventDefault();
    setTimeout(function () {
      commentSlider.reloadSlider();
    }, 0);
  });
});

/* 주요일정 Slider */
$(function () {
  var startSlide = $("main .cur_day ul li.active").index();
  var schSlider = $("main .cur_day ul").bxSlider({
    mode: "horizontal",
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
    touchEnabled: navigator.maxTouchPoints > 0,
  });

  // prev
  $("main .cur_day a.pager-prev").click(function () {
    var current = schSlider.getCurrentSlide();
    schSlider.goToPrevSlide(current) - 1;
  });

  // next
  $("main .cur_day a.pager-next").click(function () {
    var current = schSlider.getCurrentSlide();
    schSlider.goToNextSlide(current) + 1;
  });

  // 날짜 선택시 클래스 붙이기
  $("main .cur_day ul li a").click(function () {
    $("main .cur_day ul li").removeClass("active");
    $(this).parent().addClass("active");
  });
});

/* 포토뉴스 */
$(function () {
  var photoSlider = $(".photo .dlist ul").bxSlider({
    mode: "fade",
    pagerCustom: ".dlist_pager > div",
    auto: true,
    pause: 6000,
    easing: "ease-in-out",
    controls: false,
    autoHover: false,
    autoControls: false,
    touchEnabled: navigator.maxTouchPoints > 0,
    onSlideAfter: function () {
      $(".photo .indi .cur").html(numFormat(photoSlider.getCurrentSlide() + 1));
      $(".photo .indi .end").html(numFormat(photoSlider.getSlideCount()));
    },
  });

  // indi
  $(".photo .indi .cur").html(numFormat(photoSlider.getCurrentSlide() + 1));
  $(".photo .indi .end").html(numFormat(photoSlider.getSlideCount()));

  // prev
  $(".photo a.pager-prev").click(function () {
    var current = photoSlider.getCurrentSlide();
    photoSlider.goToPrevSlide(current) - 1;
  });

  // next
  $(".photo a.pager-next").click(function () {
    var current = photoSlider.getCurrentSlide();
    photoSlider.goToNextSlide(current) + 1;
  });

  // pause
  $(document).on("click", ".photo .pager-stop", function () {
    photoSlider.stopAuto();
    $(this).hide();
    $(".photo .pager-play").show();
  });

  // play
  $(document).on("click", ".photo .pager-play", function () {
    photoSlider.startAuto();
    $(this).hide();
    $(".photo .pager-stop").show();
  });
});

/* 당원제안 Slider */
$(function () {
  var suggSlider = $(".mProposal .mslider ul").bxSlider();

  function bxInit() {
    suggSlider.reloadSlider({
      mode: "vertical",
      pager: false,
      slideMargin: 0,
      minSlides: 2,
      maxSlides: 10,
      moveSlides: 2,
      pause: 6000,
      auto: true,
      controls: false,
      autoHover: false,
      autoControls: false,
      touchEnabled: navigator.maxTouchPoints > 0,
      onSlideAfter: function () {
        $(".mProposal .indi .cur").html(
          numFormat(suggSlider.getCurrentSlide() + 1)
        );
        $(".mProposal .indi .end").html(numFormat(suggSlider.getSlideCount()));
      },
    });
  }

  bxInit();
  $(window).resize(function () {
    suggSlider.stopAuto(true);
    bxInit();
    suggSlider.onSliderLoad(function () {
      this.autoDelay(750).autoStart(true);
    });
  });

  // indi
  $(".mProposal .indi .cur").html(numFormat(suggSlider.getCurrentSlide() + 1));
  $(".mProposal .indi .end").html(numFormat(suggSlider.getSlideCount()));

  // prev
  $(".mProposal a.pager-prev").click(function () {
    var current = suggSlider.getCurrentSlide();
    suggSlider.goToPrevSlide(current) - 1;
  });

  // next
  $(".mProposal a.pager-next").click(function () {
    var current = suggSlider.getCurrentSlide();
    suggSlider.goToNextSlide(current) + 1;
  });

  // pause
  $(document).on("click", ".mProposal .pager-stop", function () {
    suggSlider.stopAuto();
    $(this).hide();
    $(".mProposal .pager-play").show();
  });

  // play
  $(document).on("click", ".mProposal .pager-play", function () {
    suggSlider.startAuto();
    $(this).hide();
    $(".mProposal .pager-stop").show();
  });
});
