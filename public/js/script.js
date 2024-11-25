function show_betslip(){
  $('._bett').addClass("_on");
  $('._down').addClass("_on");
  $('._up').removeClass("_on");
}
function hide_betslip(){
  $('._bett').removeClass("_on");
  $('._down').removeClass("_on");
  $('._up').addClass("_on");
}


setTimeout(function() {
  $(document).ready(function() {
    slide();
  });
  function slide() {
    var wid = 0;
    var now_num = 0;
    var slide_length = 0;
    var auto = null;
    var $dotli = $('.dot>li');
    var $panel = $('.panel');
    var $panelLi = $panel.children('li');
    function init() {
      wid = $('.slide_box').width();
      now_num = $('.dot>li.on').index();
      slide_length = $dotli.length;
    }
    function slideEvent() {
      $dotli.click(function() {
        now_num = $(this).index();
        slideMove();
      });
      autoPlay();
      autoPlayStop();
      autoPlayRestart();
      resize();
    }
    function autoPlay() {
      auto = setInterval(function() {
        nextChkPlay();
      }, 3000);
    }
    function autoPlayStop() {
      $panelLi.mouseenter(function() {
        clearInterval(auto);
      });
    }
    function autoPlayRestart() {
      $panelLi.mouseleave(function() {
        auto = setInterval(function() {
          nextChkPlay();
        }, 3000);
      });
    }
    function nextChkPlay() {
      if (now_num == slide_length - 1) {
        now_num = 0;
      } else {
        now_num++;
      }
      slideMove();
    }
    function slideMove() {
      $panel.stop().animate({
        'margin-left': -wid * now_num
      });
      $dotli.removeClass('on');
      $dotli.eq(now_num).addClass('on');
    }
    function resize() {
      $(window).resize(function() {
        init();
        $panel.css({
          'margin-left': -wid * now_num
        });
      });
    }
    init();
    slideEvent();
  }
}, 3000);
