function main() {

(function () {
  'use strict';

  $('a.page-scroll').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
        && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 500);
        return false;
      }
    }
  });

  // affix the navbar after scroll below header
  $('#nav').affix({
    offset: {
      top: $('header').height()
    }
  });
  $('#nav').on('affixed.bs.affix', function() {
    $('.header').addClass('affix-affected');
  });
  $('#nav').on('affixed-top.bs.affix', function() {
    $('.header').removeClass('affix-affected');
  });

  $('.navbar-toggle').on('click', function() {
    $('.timeline .timeline-panel').show();
  });

  $('.navbar-nav .page-scroll').on('click', function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Portfolio isotope filter
  $(window).load(function() {
    var $container = $('.news-items');
    $container.isotope({
      filter: '.new',
      animationOptions: {
        duration: 500,
        easing: 'linear',
        queue: false
      }
    });
    $('.cat a').click(function() {
      $('.cat .active').removeClass('active');
      $(this).addClass('active');
      var selector = $(this).attr('data-filter');
      $container.isotope({
        filter: selector,
        animationOptions: {
          duration: 500,
          easing: 'linear',
          queue: false
        }
      });
      return false;
    });
  });

  // CounterUp
  $(document).ready(function( $ ) {
    if($("span.count").length > 0){
      $('span.count').counterUp({
        delay: 10, // the delay time in ms
        time: 1000 // the speed time in ms
      });
    }
  });

  // アニメーション
  $('.js_about-img').on('inview', function() {
    $(this).css('transform', 'rotateY(360deg)');
  });

  $('.timeline li').each(function(i, line){
    $(line).on('inview', function() {
      $(line).find('.timeline-panel').slideDown();
    });
  });

  $('.js_wallet-img').on('inview', function() {
    $(this).css('transform', 'rotateZ(360deg)');
  });

  // モーダル表示時シェアボタン非表示
  $('.modal').on('show.bs.modal', function () {
    $('.at-expanding-share-button').hide();
  })
  $('.modal').on('hide.bs.modal', function () {
    $('.at-expanding-share-button').show();
  })

  // Chart
  var ctx = document.getElementById("holdingChart").getContext('2d');
  var label_1 = $('.js_ctx-label-1').val();
  var label_2 = $('.js_ctx-label-2').val();
  var label_3 = $('.js_ctx-label-3').val();
  var label_4 = $('.js_ctx-label-4').val();
  var label_5 = $('.js_ctx-label-5').val();
  var data = {
    datasets: [{
      data: [
        33,
        20,
        20,
        16,
        10,
      ],
      backgroundColor: [
        'rgb(255, 205, 86)',  // yellow
        'rgb(255, 159, 64)',  // orange
        'rgb(255, 99, 132)',  // red
        'rgb(153, 102, 255)', // purple
        'rgb(54, 162, 235)',  // blue
        'rgb(75, 192, 192)',  // green
        'rgb(201, 203, 207)', // grey
      ],
      borderColor: [
        'rgb(255, 205, 86)',  // yellow
        'rgb(255, 159, 64)',  // orange
        'rgb(255, 99, 132)',  // red
        'rgb(153, 102, 255)', // purple
        'rgb(54, 162, 235)',  // blue
        'rgb(75, 192, 192)',  // green
        'rgb(201, 203, 207)', // grey
      ],
    }],
    labels: [
      label_1,
      label_2,
      label_3,
      label_4,
      label_5,
    ],
  };
  var options = {
    responsive: true,
    legend: {
      display: false,
    },
    title: {
      display: false,
    },
    animation: {
      animateScale: false,
      animateRotate: true,
      easing: "easeInOutQuart",
    },
    tooltips: {
      backgroundColor: 'rgb(0, 0, 0)',
      displayColors: false,
    },
  };

  var $holdingChart = $('#holdingChart');
  $holdingChart.on('inview', function() {
    var myDoughnutChart = new Chart(ctx, {
      type: 'doughnut',
      data: data,
      options: options
    });
    $holdingChart.off('inview');
  });
}());

}
main();
