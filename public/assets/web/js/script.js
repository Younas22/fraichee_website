$(document).ready(function () {
  $('.testimoial-slider').slick({
    arrows: false,
    dots: false,
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          dots: false,

        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          dots: false,
        }
      }

    ]
  });
  $(".search-navbar").focus(function () {
    $(this).parent().css({ 'border-color': '#1665f8', 'border-radius': '3px' })
    $(this).css('text-indent', '3px');

  }).blur(function () {
    $(this).parent().css('border-color', 'transparent');
    $(this).css('text-indent', '0px');
  })
  var current_page_URL = location.href;
  $(".navbar-nav a").each(function () {
    if ($(this).attr("href") !== "#") {
      var target_URL = $(this).prop("href");
      if (target_URL == current_page_URL) {
        $(this).removeClass('active');
        $(this).addClass('active');
        return false;
      }
    }
  });

  feather.replace();
  $('.count').each(function () {
    $(this).prop('Counter', 0).animate({
      Counter: $(this).text()
    }, {
      duration: 2000,
      easing: 'swing',
      step: function (now) {
        $(this).text(Math.ceil(now));
      }
    });
  });

  // Animate loader off screen
  $(".se-pre-con").fadeOut("fast");
  AOS.init();
  $('.cart-table tr').each(function () {
    const that = $(this);
    $(this).find('.increaseQty').click(function () {
      var qty = parseInt(that.find('.qtyValue').val());
      qty++
      that.find('.qtyValue').val(qty);
    })
  });
  $('.cart-table tr').each(function () {
    const that = $(this);
    $(this).find('.decreaseQty').click(function () {
      var qty = parseInt(that.find('.qtyValue').val());
      if (qty > 1) {
        qty--
        that.find('.qtyValue').val(qty);
      }
    })
  });

});