/***
 * main.js - Handles functionality that applies across the site.
 *
 * @author  Chris Baptie
 *
 */

HARDYBA = {
  name: 'HARDYBA',

  init: function() {
    this.pageSetup();
    this.setUpMainNavigation();
    this.launchSliders();
    this.smoothScrollTo();
    if($('.our-services').length) {
      this.magicMenu();
    };
    if($('.contact-us').length) {
      this.contactForm();
    };

    // Tablet and Desktop Only
    if (this.device() == "tablet-portrait" || this.device() == "tablet-landscape" || this.device() == "desktop") {
        this.magicalBackToTop();
    };

    // Tablet Only
    if (this.device() == "tablet-portrait" || this.device() == "tablet-landscape") {

    };

    // Mobile Only
    if (this.device() == "mobile-portrait" || this.device() == "mobile-landscape") {
      $('#main-navigation-ID ul').removeClass('dropdown');

      // Update Map links
      $('.contact-items .map a, .contact-details-wrapper .address .text-link').attr( "href", 'http://maps.apple.com/?q=Suite 14 76 Wises Road Maroochydore Qld 4558');
      $('.contact-items .map a, .contact-details-wrapper .address .text-link').removeAttr( "data-reveal-id");
      $('.contact-items .map a, .contact-details-wrapper .address .text-link').attr( "target", '_blank');
    };
  },

  pageSetup: function() {
    if($('.our-services').length) {
      var hashValue = location.hash;
      setTimeout(function() {
        if (hashValue) {
          $target = $('[id=' + location.hash.slice(1) + ']');
          window.scrollTo(0, $target.offset().top - 70);
        }
      }, 1);
    };
  },

  contactForm: function() {
    var recipientByURL = HARDYBA.getQueryParameters('recipient');

    if (recipientByURL != null) {
      $('#message').val('Hi ' + recipientByURL + ',\n\n');
    }
  },

  getQueryParameters: function(a) {
		return (a = location.search.match(RegExp("[?&]" + a + "=([^&]*)(&?)", "i"))) ? a[1] : a
	},

  setUpMainNavigation: function() {
    $("ul.dropdown li").hover(function() {
      $(this).addClass("hover");
      $('ul:first', this).css('visibility', 'visible');
    }, function() {
      $(this).removeClass("hover");
      $('ul:first', this).css('visibility', 'hidden');
    });
    $("ul.dropdown li ul li:has(ul)").find("a:first").append(" &raquo; ");
  },

  device: function() {
      var deviceDetection = '';

      if (window.matchMedia("only screen and (max-width: 479px)").matches) {
        deviceDetection = 'mobile-portrait';
      } else if (window.matchMedia("only screen and (min-width: 480px) and (max-width: 767px)").matches) {
        deviceDetection = 'mobile-landscape';
      } else if (window.matchMedia("only screen and (min-width: 768px) and (max-width: 959px)").matches) {
        deviceDetection = 'tablet-portrait';
      } else if (window.matchMedia("only screen and (min-width: 960px) and (max-width: 1079px)").matches) {
        deviceDetection = 'tablet-landscape';
      } else {
        deviceDetection = 'desktop';
      };

      return (deviceDetection);
  },

  launchSliders: function() {
    $('.hero-slider').slick({
      infinite: true,
      autoplay: true,
      autoplaySpeed: 5000,
      speed: 650,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      dots: true,
      fade: true
    });

    $('.client-slider').slick({
      infinite: true,
      autoplay: true,
      autoplaySpeed: 2750,
      speed: 650,
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: true,
      dots: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 640,
          settings: {
            slidesToShow: 1,
            dots: false,
            slidesToScroll: 1
          }
        }
      ]
    });
  },

  magicalBackToTop: function() {
    var offset = 220;
    var duration = 500;
    $(window).scroll(function() {
      if ($(this).scrollTop() > offset) {
        $('.magical-back-to-top-button').fadeIn(duration);
      } else {
        $('.magical-back-to-top-button').fadeOut(duration);
      }
    });

    $('.magical-back-to-top-button').click(function(event) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: 0
      }, duration);
      return false;
    });
  },

  magicMenu: function() {
    // Stick the nav to the top of the window.
    var nav = $('.services-sub-menu-wrapper');
    var navHomeY = nav.offset().top;
    var isFixed = false;
    var $w = $(window);
    $w.scroll(function() {
        var scrollTop = $w.scrollTop();
        var shouldBeFixed = scrollTop > navHomeY;
        if (shouldBeFixed && !isFixed) {
            nav.css({
                position: 'fixed',
                top: 0,
                left: nav.offset().left,
                width: nav.width()
            });
            isFixed = true;
        }
        else if (!shouldBeFixed && isFixed)
        {
            nav.css({
                position: 'static'
            });
            isFixed = false;
        }
    });
  },

  smoothScrollTo: function() {
    $('a[href*=#]').click(function() {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var $target = $(this.hash);
        $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');
        if ($target.length) {
          var targetOffset = $target.offset().top;
          if($('.our-services').length) {
            targetOffset = $target.offset().top - 70;
          };
          $('html,body').animate({
            scrollTop: targetOffset
          }, 650);
          return false;
        }
      }
    });
  }
};

$(document).ready(function() {
  HARDYBA.init()
});
