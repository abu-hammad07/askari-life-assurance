





// ===============================================================================

$(document).ready(function () {
  $('.slider-container').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000, // 2 seconds
    pauseOnHover: true, // Pause on hover
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });
});

var $status = $(".count");
var $slickElement = $(".hero");

$slickElement.on(
  "init reInit afterChange",
  function (event, slick, currentSlide, nextSlide) {
    // no dots -> no slides
    var i = (currentSlide ? currentSlide : 0) + 1;
    console.log(i + "/" + slick.$dots[0].children.length);

    if (!slick.$dots) {
      return;
    }

    //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
    // use dots to get some count information
    $status.text(i + " / " + slick.$dots[0].children.length);
  }
);

$slickElement.slick({
  autoplay: false,
  autoplaySpeed: 10000,
  prevArrow: ".prev",
  nextArrow: ".next",
  dots: true,
  slidesToShow: 1,
  fade: true,
  centerMode: true,
  centerPadding: "1px",
  cssEase: "linear",
  responsive: [
    {
      breakpoint: 680,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

$(".blog-slider").slick({
  dots: false,
  arrows: false,
  infinite: false,
  speed: 300,
  slidesToShow: 1,
  variableWidth: true,
  responsive: [
    {
      breakpoint: 560,
      settings: {
        variableWidth: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
      },
    },
  ],
});

$("#cards-container").slick({
  infinite: true,
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        variableWidth: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: false,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: false,
      },
    },
  ],
});

$("#cards-container2").slick({
  infinite: true,
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        variableWidth: false,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: true,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: true,
      },
    },
  ],
});

$(".header-slider").slick({
  infinite: true,
  arrows: true,
  slidesToShow: 1,
});

$(".list-title").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: true,
  autoplay: true,
  autoplaySpeed: 2000,
  asNavFor: ".list-subs",
});
$(".list-subs").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  asNavFor: ".list-title",
  arrows: false,
  // variableWidth: true,
  dots: true,
  centerMode: false,
  focusOnSelect: true,
  // prevArrow: $(".arrowLeft"),
  // nextArrow: $(".arrowRight"),
});

$(".sl-cst").slick({
  slidesToShow: 3,
  infinite: false,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 2000,
  // dots: false, Boolean
  //  arrows: false, 
});

$(document).ready(function () {
  $(".dropdown > a").click(function () {
    if (this.href) {
      location.href = this.href;
    }
  });
  if (window.innerWidth > 1200) {
    $("header").hover(
      function () {
        $(".header").addClass("opened");
        $(".header-second-row-menu").css("background-color", "#fff");
        $(
          "header .header-second-row-menu .dropdowns-container .dropdown .dropdown-toggle"
        ).css("color", "#000");
        $("header .header-second-row-menu .dropdowns-container a.nav-link").css(
          "color",
          "#000"
        );
      },
      function () {
        $(".header").removeClass("opened");
        $(".header-second-row-menu").css("background-color", "transparent");
        $(
          "header .header-second-row-menu .dropdowns-container .dropdown .dropdown-toggle"
        ).css("color", "#FFF");
        $("header .header-second-row-menu .dropdowns-container a.nav-link").css(
          "color",
          "#fff"
        );
      }
    );

    $(".dropdown.mega-menu").click(function () {
      var isHovered = $(this).hasClass("expand");
      if (isHovered) {
        $(this).removeClass("expand");
        $(this).children("ul.dropdown-menu").stop().slideUp(300);
      } else {
        $(this).addClass("expand");
        $(this).children("ul.dropdown-menu").stop().slideDown(300);
      }
    });

    $(".mega-menu .dropdown").hover(function () {
      var isHovered = $(this).is(":hover");
      if (isHovered) {
        $(this).children("ul.dropdown-menu").stop().slideDown(300);
      } else {
        $(this).children("ul.dropdown-menu").stop().slideUp(300);
      }
    });
  }

  if (window.innerWidth < 1200) {
    $(".mega-menu").on("click", function () {
      if ($(this).hasClass("open")) {
        $(this).removeClass("open");
      } else {
        $(this).addClass("open");
      }
    });
    var myModalEl = document.getElementById("exampleModal");
    myModalEl.addEventListener("show.bs.modal", function (event) {
      $(".navbar-toggler").click();
    });
  }

  $(".navbar-collapse").on("show.bs.collapse", function () {
    $(".header").addClass("opened");
    $(".navbar-toggler").addClass("active");
    $(this).addClass("bg-white");
    $("body").css("overflow-y", "hidden");
    $(".header-second-row-menu").css("background-color", "#fff");
  });
  $(".navbar-collapse").on("hidden.bs.collapse", function () {
    $(".navbar-toggler").removeClass("active");
    $(this).removeClass("bg-white");
    $(".header").removeClass("opened");
    $(".header-second-row-menu").css("background-color", "transparent");
    $("body").css("overflow-y", "auto");
  });

  $(".header-search-container input").focus(function () {
    $(".header-search-container").addClass("active");
  });
  $(".header-search-container input").blur(function () {
    $(".header-search-container").removeClass("active");
  });
});

$(document).ready(function () {
  var lastScrollTop = 0;
  var header = $(".header");

  $(window).scroll(function () {
    var scrollTop = $(this).scrollTop();

    if (scrollTop > lastScrollTop) {
      // Scrolling down
      if (scrollTop > 120) {
        header.addClass("scrolled");
      }
    } else {
      // Scrolling up
      if (scrollTop <= 120) {
        header.removeClass("scrolled");
      }
    }

    lastScrollTop = scrollTop;
  });
});

var Cookie = {
  set: function (name, value, days) {
    var domain, domainParts, date, expires, host;

    if (days) {
      date = new Date();
      date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
      expires = "; expires=" + date.toGMTString();
    } else {
      expires = "";
    }

    host = location.host;
    if (host.split(".").length === 1) {
      // no "." in a domain - it's localhost or something similar
      document.cookie = name + "=" + value + expires + "; path=/";
    } else {
      domainParts = host.split(".");
      domainParts.shift();
      domain = "." + domainParts.join(".");

      document.cookie =
        name + "=" + value + expires + "; path=/; domain=" + domain;

      // check if cookie was successfuly set to the given domain
      // (otherwise it was a Top-Level Domain)
      if (Cookie.get(name) == null || Cookie.get(name) != value) {
        // append "." to current domain
        domain = "." + host;
        document.cookie =
          name + "=" + value + expires + "; path=/; domain=" + domain;
      }
    }
  },

  get: function (name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(";");
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == " ") {
        c = c.substring(1, c.length);
      }

      if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
  },

  erase: function (name) {
    Cookie.set(name, "", -1);
  }
};


function ensureDefaultLangParam() {
  let url = new URL(window.location);
  if (!url.searchParams.has("lang")) {
    url.searchParams.set("lang", "en");
    window.history.replaceState({}, '', url);
  }
}

function googleTranslateElementInit() {
  // Ensure default language parameter
  ensureDefaultLangParam();

  let url = new URL(window.location);
  let lang = url.searchParams.get("lang");

  if (lang) {
    Cookies.set("googtrans", `/en/${lang}`, { path: "" });
    Cookies.set("googtrans", `/en/${lang}`);
    Cookies.set("googtrans", `/en/${lang}`, { path: "", domain: location.host });
  } else {
    Cookies.remove("googtrans", { path: "" });
    Cookies.remove("googtrans", { path: "", domain: location.host });
  }

  new google.translate.TranslateElement({
    pageLanguage: "en",
    includedLanguages: "en,ur"
  }, "translate");

  // Function to update the default option text
  function updateDefaultOptionText() {
    let langSelector = document.querySelector(".goog-te-combo");
    if (langSelector) {
      let defaultOption = langSelector.querySelector('option[value=""]');
      if (defaultOption) {
        defaultOption.textContent = "English";
      }
    }
  }

  function replaceText() {
    const replacements = {
      "Askari Life": "عسکری لائف",
      "riders": "رائیڈرز",
      "Zamin": "ضامین",
      "Muhaffiz": "محافظ",
      "Contact": "رابطہ کریں",
      "Plans": "منصوبے",
    };

    document.body.querySelectorAll("*").forEach(function (node) {
      node.childNodes.forEach(function (child) {
        if (child.nodeType === 3) { // Text node
          let text = child.nodeValue;
          Object.keys(replacements).forEach(function (key) {
            text = text.replace(new RegExp(key, "g"), replacements[key]);
          });
          child.nodeValue = text;
        }
      });
    });
  }




  // Update the default option text after a short delay to ensure the widget is initialized
  setTimeout(function () {
    updateDefaultOptionText();
    if (lang === "ur") {
      replaceAskariLifeText();
    }
  }, 1000);

  // Add event listener to change URL param on language selection change
  let langSelector = document.querySelector(".goog-te-combo");
  if (langSelector) {
    langSelector.addEventListener("change", function () {
      let lang = langSelector.value;
      var newurl =
        window.location.protocol +
        "//" +
        window.location.host +
        window.location.pathname +
        "?lang=" +
        lang;

      // Reload the page when any language is selected
      window.location.href = newurl;
    });
  }

  // // Check the initial language and apply font and direction if needed
  // if (lang === "ur") {
  //   document.body.style.fontFamily = "'jameel nooori Nastaleeq', serif";
  //   document.body.setAttribute("dir", "rtl");
  //   replaceAskariLifeText();
  // } else if (lang === "en") {
  //   document.body.style.fontFamily = "";
  //   document.body.removeAttribute("dir");
  // }


  function replaceAskariLifeText() {
    const lang = document.documentElement.lang;

    if (lang === "ur") {
      document.body.style.fontFamily = "'Jameel Noori Nastaleeq', serif";
      document.body.setAttribute("dir", "rtl");
      document.querySelectorAll('[data-en]').forEach(element => {
        element.textContent = element.getAttribute('data-ur');
      });
    } else {
      document.body.style.fontFamily = "";
      document.body.removeAttribute("dir");
      document.querySelectorAll('[data-en]').forEach(element => {
        element.textContent = element.getAttribute('data-en');
      });
    }
  }

  // Call the function when the page loads or when the language changes
  document.addEventListener('DOMContentLoaded', replaceAskariLifeText);




}





document.addEventListener("DOMContentLoaded", function () {
  (function () {
    Cookie.erase("googtrans");
    var googleTranslateScript = document.createElement("script");
    googleTranslateScript.type = "text/javascript";
    googleTranslateScript.async = true;
    googleTranslateScript.src =
      "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit";
    (
      document.getElementsByTagName("head")[0] ||
      document.getElementsByTagName("body")[0]
    ).appendChild(googleTranslateScript);
  })();

});
