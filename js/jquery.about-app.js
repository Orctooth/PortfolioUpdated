new Typewriter('.typed', {
    strings: ['Information about me', 'My language skillset', 'My interests', 'My education'],
    autoStart: true,
    loop: true
});

function getWidth() {
    return Math.max(document.body.scrollWidth, document.documentElement.scrollWidth, document.body.offsetWidth, document.documentElement.offsetWidth, document.documentElement.clientWidth);
  }
  
  document.addEventListener("DOMContentLoaded", function () {
    var menu = new Mmenu("#my-menu", {
      "extensions": ["pagedim-black"],
      navbar: {
        add: false
      }
    });
    var api = menu.API;
    document.querySelector(".hamburger").addEventListener("click", function (evnt) {
      evnt.preventDefault();
      console.log('opened menu');
      api.open();
      document.querySelector('.hamburger').classList.add("is-active");
      document.querySelector('.sticky-nav').style.display = "block";
  
      window.onbeforeunload = function () {
        null, _readOnlyError("api");
        null, _readOnlyError("menu");
      };
    });
    var x = window.matchMedia("(min-width: 768px)");
    window.addEventListener('resize', function () {
      if (x.matches) {
        // If media query matches
        document.querySelector('.hamburger').classList.remove("is-active");
        api.close();
      }
    });
    document.getElementById('contact-link').addEventListener('click', function () {
      document.querySelector('.hamburger').classList.remove("is-active");
      api.close();
    });
    document.getElementById('folio-link').addEventListener('click', function () {
      document.querySelector('.hamburger').classList.remove("is-active");
      api.close();
    });
  });