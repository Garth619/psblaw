// @codekit-prepend 'waypoints.js'
// @codekit-prepend 'slick.js'
// @codekit-prepend 'lity.js'
// @codekit-prepend 'modernizr-webp.js'
// @codekit-prepend 'underscore.js'
// @codekit-prepend 'lazysizes.js'
// @codekit-prepend 'macy.js'

jQuery(document).ready(function ($) {
  $("body").addClass("ready");

  /* Wistia - Call function when script needs to be loaded either by hover or waypoints
     --------------------------------------------------------------------------------------- */

  // loads wistia on click to improve initial page speed
  $(".wistia_embed").click(function () {
    //make sure to only load if Wistia is not already loaded
    let self = this;
    if (typeof Wistia === "undefined") {
      jQuery.getScript(
        "https://fast.wistia.com/assets/external/E-v1.js",
        function (data, textStatus, jqxhr) {
          // We got the text but, it's possible parsing could take some time on slower devices. Unfortunately, js parsing does not have
          // a hook we can listen for. So we need to set an interval to check when it's ready
          var interval = setInterval(function () {
            if ($(self).attr("id") && window._wq) {
              _wq.push({
                id: "_all",
                onReady: function (video) {
                  video.play();
                },
              });
              clearInterval(interval);
            }
          }, 100);
        }
      );
    } else {
      console.log("wistia is already defined");
    }
  });

  /* Smooth Scroll down to section on click (<a href="#id_of_section_to_be_scrolled_to">)
      --------------------------------------------------------------------------------------- */

  $(function () {
    $('a[href*="#"]:not([href="#"])').click(function () {
      if (
        location.pathname.replace(/^\//, "") ==
          this.pathname.replace(/^\//, "") &&
        location.hostname == this.hostname
      ) {
        var target = $(this.hash);
        target = target.length
          ? target
          : $("[name=" + this.hash.slice(1) + "]");
        if (target.length) {
          $("html, body").animate(
            {
              scrollTop: target.offset().top,
            },
            1000
          );
          return false;
        }
      }
    });
  });

  /* Waypoints
     --------------------------------------------------------------------------------------- */

  function createWaypoint(
    triggerElementId,
    animatedElement,
    className,
    offsetVal,
    functionName,
    reverse
  ) {
    if (jQuery("#" + triggerElementId).length) {
      var waypoint = new Waypoint({
        element: document.getElementById(triggerElementId),
        handler: function (direction) {
          if (direction === "down") {
            jQuery(animatedElement).addClass(className);

            if (typeof functionName === "function") {
              functionName();
              this.destroy();
            }
          } else if (direction === "up") {
            if (reverse) {
              jQuery(animatedElement).removeClass(className);
            }
          }
        },
        offset: offsetVal,
        // Integer or percent
        // 500 means when element is 500px from the top of the page, the event triggers
        // 50% means when element is 50% from the top of the page, the event triggers
      });
    }
  }

  createWaypoint("section-one", "#sticky-header", "sticky", -200, null, true);

  createWaypoint("internal-main", "#sticky-header", "sticky", -200, null, true);
  
/* Sticky Header
--------------------------------------------------------------------------------------- */

// $(function() {

//   var header = $("#header");

//   $(window).on('scroll',_.debounce(function () {

//   var scroll = $(window).scrollTop();
//     if (scroll >= 170) {
//       header.hide();
//     }
//     if (scroll >= 180) {
//       // internal pages
//       header.addClass("header-layout-three sticky");
//       // homepage
//       if ($('body').hasClass('page-template-template-home')){
//         header.addClass("header-layout-two header-layout-three sticky");
//       }
//     } 
//     if (scroll >= 265) {
//         header.show();
//     } 
//     if (scroll < 265) {
//       header.hide();
//     }
//     if (scroll < 180) {
//       // internal pages
//       header.removeClass("header-layout-three sticky");
//       // homepage
//       if ($('body').hasClass('page-template-template-home')){
//         header.removeClass("header-layout-two header-layout-three sticky");
//       }
//     }
//     if (scroll < 170) {
//       header.show();
//     }
//   },50));

// });


$('header').clone().addClass('header-layout-two header-layout-three').removeClass('header-layout-one default-banner-layout').appendTo("#sticky-header");



  /* Slick Carousel ( http://kenwheeler.github.io/slick/ )
--------------------------------------------------------------------------------------- */

  $(".preload-slider").on("init", function (event, slick) {
    $(".preload-section").addClass("load-after");
  });



   $("#sec-one-slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    arrows: true,
    adaptiveHeight:true,
    dots: false,
    prevArrow:".sec-one-arrow-left",
    nextArrow:".sec-one-arrow-right",
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          adaptiveHeight:false,
        },
        
      },
      {
        breakpoint: 1170,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
          vertical:true,
        },
        
      },

      
    ],
  });


  $("#hero-slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    pauseOnHover:false,
    fade:true,
    autoplay: true,
    autoplaySpeed: 3000,
  });

  // adaptive heights on vertical slides

  // var maxHeight = -1;
  // $('.slick-slide').each(function() {
  //   if ($(this).height() > maxHeight) {
  //   maxHeight = $(this).height();
  //   }
  // });
  // $('.slick-slide').each(function() {
  //   if ($(this).height() < maxHeight) {
  //     $(this).css('margin', Math.ceil((maxHeight-$(this).height())/2) + 'px 0');
  //   }
  // });

  // var hidelastline = $('.slick-active');

  // hidelastline.each(function() {
  //   var $this = $(this);
  //   if($this[0] === hidelastline.last()[0]) {
  //       $(this).addClass('garrett');
  //   }
  // });


  $("#sec-two-slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    arrows: true,
    adaptiveHeight:true,
    dots: false,
    prevArrow:".sec-two-arrow-left",
    nextArrow:".sec-two-arrow-right",
    responsive: [
      {
        breakpoint: 1170,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          adaptiveHeight:false,
        },
        
      },
      {
        breakpoint: 1695,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        },
      },
    ],
  });


  $("#sec-three-slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    adaptiveHeight:true,
    arrows: true,
    dots: false,
    mobileFirst:true,
    fade:true,
    prevArrow:".sec-three-arrow-left",
    nextArrow:".sec-three-arrow-right",
    responsive: [
      {
        breakpoint: 767,
        settings: "unslick",
      },
    ],
  });

  $("#sec-four-slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    arrows: true,
    adaptiveHeight:true,
    dots: true,
    prevArrow:".sec-four-arrow-left",
    nextArrow:".sec-four-arrow-right",
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          dots:false,
          adaptiveHeight:false,
          prevArrow:".sec-four-tablet-arrow-left",
          nextArrow:".sec-four-tablet-arrow-right",
        },
        
      },
      {
        breakpoint: 1695,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 5,
          arrows:true,
          prevArrow:".sec-four-tablet-arrow-left",
          nextArrow:".sec-four-tablet-arrow-right",
          dots:false
        },
      },
    ],
  });


$('.sec-four-slide').on('click', function(e) {
  $(".sec-four-hover-clone").empty();
  $(this).find('.sec-four-hover-data-inner').clone().appendTo('.sec-four-hover-clone');
  $('.sec-four-hover-overlay').addClass('open');
});

$('.sec-four-overlay-close').on('click', function(e) {
  $('.sec-four-hover-overlay').removeClass('open');
});



$("#sec-six-slider").slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  mobileFirst:true,
  dots: true,
  adaptiveHeight:true,
  responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots:false,
        arrows:true,
        adaptiveHeight:true,
        prevArrow:".sec-six-arrow-left",
        nextArrow:".sec-six-arrow-right",
      },
      
    }
  ],
});

$("#sec-eight-slider").slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  mobileFirst:true,
  dots: true,
  adaptiveHeight:true,
  responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots:false,
        arrows:true,
        adaptiveHeight:true,
        prevArrow:".sec-eight-arrow-left",
        nextArrow:".sec-eight-arrow-right"
      }
    },
    {
      breakpoint: 1170,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        dots:true,
        arrows:false,
        adaptiveHeight:false,
        prevArrow:".sec-eight-arrow-left",
        nextArrow:".sec-eight-arrow-right"
      }
    }
  ],
});



$("#sec-ten-slider").slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  mobileFirst:true,
  dots: true,
  responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        dots:false,
        arrows:true,
        prevArrow:".sec-ten-arrow-left",
        nextArrow:".sec-ten-arrow-right"
      }
    },
    {
      breakpoint: 1380,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,
        dots:false,
        arrows:true,
        prevArrow:".sec-ten-arrow-left",
        nextArrow:".sec-ten-arrow-right"
      }
    }
  ],
});

$("#internal-banner-slider").slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  dots: false,
  fade:true,
  pauseOnHover:false,
  autoplay: true,
  autoplaySpeed: 3000,
});



$("#more-news-slider").slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  mobileFirst:true,
  adaptiveHeight:true,
  dots: true,
  responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots:false,
        arrows:true,
        prevArrow:".more-news-left-arrow",
        nextArrow:".more-news-right-arrow"
      }
    },
    {
      breakpoint: 1170,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        dots:false,
        arrows:true,
        prevArrow:".more-news-left-arrow",
        nextArrow:".more-news-right-arrow"
      }
    },
    {
      breakpoint: 1380,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        dots:false,
        arrows:true,
        prevArrow:".more-news-left-arrow",
        nextArrow:".more-news-right-arrow"
      }
    }
  ],
});


$("#bio-slider").slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  mobileFirst: true,
  arrows: true,
  adaptiveHeight:true,
  dots: false,
  prevArrow:".bio-arrow-left",
  nextArrow:".bio-arrow-right",
});


/* FAQs
--------------------------------------------------------------------------------------- */

// hompepage

$('span.sec-seven-question').on('click', function(e) {
  $(this).toggleClass('open');
  $(this).next('.sec-seven-answer').slideToggle(400);
});

// faq page template

$('.single-faq .question').on('click', function(e) {
  $(this).toggleClass('open');
  $(this).next('.answer').slideToggle(400);
});



/* Remove "#" from menu anchor items to avoid jump to the top of the page
--------------------------------------------------------------------------------------- */

  $("ul > li.menu-item-has-children > a[href='#']").removeAttr("href");

  // not found go back button

  function goBack() {
    window.history.back();
  }

  $("span.go-back").on("click", function (e) {
    goBack();
  });

  /* Sidebar Current Class for Blog Sidebars
--------------------------------------------------------------------------------------- */

  // add active to blog widgets that dont show a built in current class

  var pgurl = window.location.href;

  $(".sidebar-box.sidebar-blog ul li").each(function () {
    if ($(this).find("a").attr("href") == pgurl)
      $(this).addClass("blog-active");
  });

  $(".sidebar-box ul.menu > li.menu-item-has-children > a").on(
    "click",
    function (e) {
      $(this).next("ul.sub-menu").slideToggle(300);

      $(this).parent().toggleClass("active");
    }
  );

  $('.widget h3').on('click', function(e) {
    $(this).next('ul').slideToggle(300);
    $(this).next('#bio-list').slideToggle(300);
    $(this).next('#bio-slider-wrapper').toggleClass('open');
    $(this).toggleClass('active');
  });

  
  /* Resize Nav Functions
--------------------------------------------------------------------------------------- */

  // resize - tablet and desktop top navigatons behave differently. These turn off click functions at certain window widths without reloading the page

  // nav

  //$('nav ul.menu > li.current-menu-ancestor > a').addClass('active');

  $(".menu-wrapper").on("click", function (e) {
    $("nav").addClass('nav-open');
  });

  $("nav .close").on("click", function (e) {
    $("nav").removeClass('nav-open');
  });

  function navDesktop() {
    $("header nav").addClass("nav-desktop");

    $("header nav li.menu-item-has-children > a")
      .next("ul.sub-menu")
      .removeClass("open");

    $("header nav").removeClass("nav-tablet");
  }

  function navTablet() {
    $("header nav").removeClass("nav-desktop");

    $("header nav").addClass("nav-tablet");
  }

  function tabletClick() {
    //$(this).next('ul.sub-menu').slideToggle(350);

    $(this).next("ul.sub-menu").toggleClass("active");

    $(this).parent().toggleClass("active");

    $(this).toggleClass("active");
  }

  // nav
// can i make this a function? so there isnt redundant code below with the wondo resizes?
  if ($(window).width() >= 1170) {
    navDesktop();
  }

  if ($(window).width() < 1170) {
    navTablet();

    $("header nav li.menu-item-has-children > a")
      .off()
      .on("click", tabletClick);
  }

  // resize window width and fire functions

  $(window).resize(
    _.debounce(function () {
      if ($(window).width() >= 1170) {
        navDesktop();

        // off

        $("header nav li.menu-item-has-children > a").off("click", tabletClick);
      }

      if ($(window).width() < 1170) {
        navTablet();

        // off

        $("header nav li.menu-item-has-children > a")
          .off()
          .on("click", tabletClick);
      }
    }, 100)
  );
}); // document ready
