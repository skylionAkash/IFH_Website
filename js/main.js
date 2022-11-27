//home  slider-1 started
var swiper = new Swiper(".photo-container", {
  slidesPerView: 1,
  spaceBetween: 20,
  slidesPerGroup: 1,
  autoplay: false,
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: {
    el: ".photo-pagi",
    clickable: true,
  },
  // navigation: {
  //   nextEl: ".photo-next",
  //   prevEl: ".photo-prev",
  // },

  breakpoints: {
    414: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 1,
    },
    1024: {
      slidesPerView: 1,
    },
  },
});
// home slider 1 ended

// movies slider started
var swiper = new Swiper(".movies-container", {
  slidesPerView: 1,
  spaceBetween: 20,
  slidesPerGroup: 1,
  autoplay: false,
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: {
    el: ".photo-pagi",
    clickable: true,
  },
  navigation: {
    nextEl: ".photo-next",
    prevEl: ".photo-prev",
  },

  breakpoints: {
    414: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 1,
    },
    1024: {
      slidesPerView: 1,
    },
  },
});
// movies slider ended

// right-side-common slider started
var swiper = new Swiper(".right-side-slider-container", {
  slidesPerView: 1,
  spaceBetween: 20,
  slidesPerGroup: 1,
  autoplay: false,
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: {
    el: ".photo-pagi",
    clickable: true,
  },
  // navigation: {
  //   nextEl: ".photo-next",
  //   prevEl: ".photo-prev",
  // },

  breakpoints: {
    414: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 1,
    },
    1024: {
      slidesPerView: 1,
    },
  },
});
// right-side-common slider ended

// sticky Menu

window.onscroll = function () {
  myFunction();
};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop + 80;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
}

// Back to Top Button
var btn = $("#back-to-top");

$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    btn.addClass("show");
  } else {
    btn.removeClass("show");
  }
});

btn.on("click", function (e) {
  e.preventDefault();
  $("html, body").animate({ scrollTop: 0 }, "300");
});

// award slider started
var swiper = new Swiper(".award-container", {
  slidesPerView: 1,
  spaceBetween: 20,
  slidesPerGroup: 1,
  autoplay: true,
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: {
    el: ".photo-pagi",
    clickable: true,
  },
  navigation: {
    nextEl: ".photo-next",
    prevEl: ".photo-prev",
  },

  breakpoints: {
    300: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});
// Award slider ended
