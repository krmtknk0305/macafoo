// 登場
function scroll_effect() {
  var element = document.getElementsByClassName('scroll-up');
  if (!element) return;

  var scrollY = window.pageYOffset;
  var windowH = window.innerHeight;
  var showTiming = 200;
  for (var i = 0; i < element.length; i++) {
    var elemClientRect = element[i].getBoundingClientRect();
    var elemY = scrollY + elemClientRect.top;
    if (scrollY > elemY - windowH + showTiming) {
      element[i].classList.add('is-show');
    }
  }
}
window.addEventListener('scroll', scroll_effect);

// モーダル
$(function () {
  $('.modalopen').each(function () {
    $(this).on('click', function () {
      var target = $(this).data('target');
      var modal = document.getElementById(target);
      $(modal).fadeIn();
      return false;
    });
  });
  $('.modalClose').on('click', function () {
    $('.js-modal').fadeOut();
    return false;
  });
});

// メニュースライダー //
$(function () {
  function toggleChangeBtn() {
    var slideIndex = $('.menu-btn').index($('.active'));
    $('.slide-button').show();
    if (slideIndex == 0) {
      $('.prev').hide();
    } else if (slideIndex == 2) {
      $('.next').hide();
    }
  }

  toggleChangeBtn();

  $('.next').click(function () {
    var $displaySlide = $('.active');
    $displaySlide.removeClass('active');
    $displaySlide.next().addClass('active');
    toggleChangeBtn();
  });
  $('.prev').click(function () {
    var $displaySlide = $('.active');
    $displaySlide.removeClass('active');
    $displaySlide.prev().addClass('active');
    toggleChangeBtn();
  });
});

// ハンバーガーメニュー //
$(function () {
  $('.menu-trigger').click(function () { //ハンバーガーボタン(.menu-trigger)をクリック
    $(this).toggleClass('active'); //ハンバーガーボタンに(.active)を追加・削除
    if ($(this).hasClass('active')) { //もしハンバーガーボタンに(.active)があれば
      $('.g-navi').addClass('active'); //(.g-navi)にも(.active)を追加
    } else { //それ以外の場合は、
      $('.g-navi').removeClass('active'); //(.g-navi)にある(.active)を削除
    }
  });
  $('.nav-wrapper ul li a').click(function () { //各メニュー(.nav-wrapper ul li a)をタップする
    $('.menu-trigger').removeClass('active'); //ハンバーガーボタンにある(.active)を削除
    $('.g-navi').removeClass('active'); //(.g-navi)にある(.active)も削除
  });
});
