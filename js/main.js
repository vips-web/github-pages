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
          scrollTop: target.offset().top - 40
        }, 900);
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

  // skills chart
  $(document).ready(function(e) {
    var index=0;
    $(document).scroll(function(){
      var top = $('#skills').height()-$(window).scrollTop();
      if(top<-300){
        if(index==0){

          $('.chart').easyPieChart({
            easing: 'easeOutBounce',
            onStep: function(from, to, percent) {
              $(this.el).find('.percent').text(Math.round(percent));
            }
          });
        }
        index++;
      }
    })
  });

  // Portfolio isotope filter
  $(window).load(function() {
    var $container = $('.news-items');
    $container.isotope({
      filter: '*',
      animationOptions: {
        duration: 750,
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
          duration: 750,
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
        time: 1500 // the speed time in ms
      });
    }
  });

  // Pretty Photo
  $("a[rel^='prettyPhoto']").prettyPhoto({
    social_tools: false
  });

  // Chart
  var ctx = document.getElementById("holdingChart").getContext('2d');
  var data = {
    datasets: [{
      data: [49.6, 14.88, 14.88, 12.4, 3.72, 3.72, 0.8],
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
      label: 'Dataset 1'
    }],
    labels: [
      'Pos',
      '開発',
      'マーケティング',
      'ﾇｸﾓﾘﾃｨ',
      'うｐ',
      '運営',
      'Pow',
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
