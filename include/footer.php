<!-- loader script started -->
<script>
  function loadFunction() {
    $('#preloader').hide();
  }
</script>
<!-- <script>
  setTimeout(function() {
    $('#preloader').hide();
  }, 2000);
</script> -->
<!-- loader script ended -->
<!-- Filter Header in Listing Page started -->
<script>
  var $sidebar = $('.listing-page-description');
  var sidebarTop = $sidebar.position().top;
  var $listingContent = $('.listing-page-content');
  var listingContentHeight = $listingContent.position().top;
  var cd = $(".listing-page-content").height();
  $(window).scroll(function() {
    if ($(window).scrollTop() >= sidebarTop) {
      $('.search-form-row').addClass('fixed-search');
    } else {
      $('.search-form-row').removeClass('fixed-search');
    }

    if ($(window).scrollTop() >= cd) {
      $('.search-form-row').hide();
    } else {
      $('.search-form-row').show();
    }
  });
</script>
<!-- Filter Header in Listing Page ended -->

<!-- New Menu on 16-02-22 by Akash started -->
<script>
  (function($) {
    $.fn.menumaker = function(options) {
      var cssmenu = $(this),
        settings = $.extend({
          format: "dropdown",
          sticky: false
        }, options);
      return this.each(function() {
        $(this).find(".button").on('click', function() {
          $(this).toggleClass('menu-opened');
          var mainmenu = $(this).next('ul');
          if (mainmenu.hasClass('open')) {
            mainmenu.slideToggle().removeClass('open');
          } else {
            mainmenu.slideToggle().addClass('open');
            if (settings.format === "dropdown") {
              mainmenu.find('ul').show();
            }
          }
        });
        cssmenu.find('li ul').parent().addClass('has-sub');
        multiTg = function() {
          cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
          cssmenu.find('.submenu-button').on('click', function() {
            $(this).toggleClass('submenu-opened');
            if ($(this).siblings('ul').hasClass('open')) {
              $(this).siblings('ul').removeClass('open').slideToggle();
            } else {
              $(this).siblings('ul').addClass('open').slideToggle();
            }
          });
        };
        if (settings.format === 'multitoggle') multiTg();
        else cssmenu.addClass('dropdown');
        if (settings.sticky === true) cssmenu.css('position', 'fixed');
        resizeFix = function() {
          var mediasize = 1000;
          if ($(window).width() > mediasize) {
            cssmenu.find('ul').show();
          }
          if ($(window).width() <= mediasize) {
            cssmenu.find('ul').hide().removeClass('open');
          }
        };
        resizeFix();
        return $(window).on('resize', resizeFix);
      });
    };
  })(jQuery);

  (function($) {
    $(document).ready(function() {
      $("#cssmenu").menumaker({
        format: "multitoggle"
      });
    });
  })(jQuery);
</script>
<!-- New Menu on 16-02-22 by Akash ended -->

<!-- New Menu on 28-01-22 by Akash started -->
<script>
  $(document).ready(function() {
    $(".core-menu li").hover(
      function() {
        $(this).children('ul').slideDown(1);
      },
      function() {
        $('ul', this).slideUp(1);
      });
    $(".hamburger-menu").click(function() {
      $(".burger-1, .burger-2, .burger-3").toggleClass("open");
      $(".core-menu").slideToggle("fast");
    });
  });
</script>
<!-- New Menu on 28-01-22 by Akash ended -->
<!-- User Profile Script started -->
<script>
  $(".user-btn").click(function() {
    var lable = $(".user-btn").text().trim();
    $(".myText").toggle();
  });
</script>
<!-- User Profile Script endsed -->
<script src="js/main.js"></script>
<script src="js/fontawsm.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>

</html>