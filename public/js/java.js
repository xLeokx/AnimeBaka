


$(document).ready(function () {

    $(".nav-link").on('click', function (event) {
      if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
          scrollTop: $(hash).offset().top - 90
        }, 800, function () {
          window.location.hash = $(hash).offset().top - 90;
        });
      }
    });

    $("#mybtn").on('click', function (event) {
      $('html, body').animate({
        scrollTop: 0
      }, 800, function () {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        window.location.hash = '#inicio';
      });
    });
    

  });
  