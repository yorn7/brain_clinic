jQuery(function ($) {
  $('.js-hamburger').on('click', function() {
    if($(this).hasClass('open')) {
      $('.js-drawer').fadeOut();
      $(this).removeClass('open');
      $('html').removeClass('fixed');
      //htmlに対してメニューが開いている時はスクロールさせない
    }else {
      $('.js-drawer').fadeIn();
      $(this).addClass('open');
      $('html').addClass('fixed');
      //htmlに対してメニューが閉じている時はスクロールさせる
    }
  });
});

jQuery(function($) {
  $('.js-hamburger').on('click', function() {
    $(this).toggleClass('active');
    $('.js-drawer').toggleClass('panelactive');
    $('.circle-bg').toggleClass('circleactive');
  });

  $('.js-drawer a').click(function() {
    $('.js-hamburger').removeClass('active');
    $('.js-drawer').removeClass('panelactive');
    $('circle-bg').removeClass('circleactive');
  });
});


  var windowwidth = window.innerWidth ||
  document.documentElement.clientWidth || 0;
    if(windowwidth > 768) {
      var responsiveImage = [//pc用の画像
        { src: 'wp-content/themes/exercises/img/top/top.mv_pc.jpg'},
        { src: 'wp-content/themes/exercises/img/top/top.mv2_pc.jpg'},
        { src: 'wp-content/themes/exercises/img/top/top.mv3_pc.jpg'}
      ];
    } else {
      var responsiveImage = [//タブレットサイズ(768px)以下
        { src: 'wp-content/themes/exercises/img/top/top.mv.jpg'},
        { src: 'wp-content/themes/exercises/img/top/top.mv2.jpg'},
        { src: 'wp-content/themes/exercises/img/top/top.mv3.jpg'}
      ];
    };

//mv Vegas全体の設定
    jQuery(function($) {
      $('#slider').vegas({
        transitionDuration: 4000,
        delay: 5000,
        animationDuration: 20000,
        animation: 'random',
        slides: responsiveImage,
        timer: false,
      });
    });