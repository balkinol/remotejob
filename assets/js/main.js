const counters = document.querySelectorAll('.counter');
const speed = 200;

counters.forEach((counter) => {
  const updateCount = () => {
    const target = +counter.getAttribute('data-target');
    const count = +counter.innerText;

    const inc = target / speed;

    if (count < target) {
      counter.innerText = Math.ceil(count + inc);

      setTimeout(updateCount, 1);
    } else {
      counter.innerText = target;
    }
  };

  updateCount();
});


$(document).ready(function () {
  $('.slick-carousel').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    prevArrow: $('.prev'),
    nextArrow: $('.next'),
  });

  $(function () {
    $(document).scroll(function () {
      var $nav = $('.navbar-fixed-top');
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
  });
});

$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('#scroll').fadeIn();
    } else {
      $('#scroll').fadeOut();
    }
  });
  $('#scroll').click(function () {
    $('html, body').animate({ scrollTop: 0 }, 600);
    return false;
  });
});







