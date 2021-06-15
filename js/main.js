// let typer = document.getElementById('typer');
// let blink = true;

// setInterval(function(){ typer.style.opacity = '1'; document.getElementById('typer') = typer;}, 800);
// setTimeout(function(){ setInterval(function(){ typer.style.opacity = '0'; document.getElementById('typer') = typer;}, 800); }, 400);


function getWidth() {
    return Math.max(
      document.body.scrollWidth,
      document.documentElement.scrollWidth,
      document.body.offsetWidth,
      document.documentElement.offsetWidth,
      document.documentElement.clientWidth
    );
}

document.addEventListener(
    "DOMContentLoaded", () => {
        const menu = new Mmenu( "#my-menu", {
            "extensions": ["pagedim-black"],
            navbar: {
              add: false
            },
        } );

       

        const api = menu.API;
        
        
        document.querySelector(".hamburger").addEventListener("click", function (evnt) {
            evnt.preventDefault();
            console.log('opened menu');
            api.open();
            document.querySelector('.hamburger').classList.add("is-active");
            document.querySelector('.sticky-nav').style.display ="block";
            
            window.onbeforeunload = function(){
                api = null;
                menu = null;
            };
        });

        var x = window.matchMedia("(min-width: 768px)");
        window.addEventListener('resize', function() {
            
            if (x.matches) { // If media query matches
                document.querySelector('.hamburger').classList.remove("is-active");
                api.close();
            }
        });

        document.getElementById('contact-link').addEventListener('click', function(){
            document.querySelector('.hamburger').classList.remove("is-active");
            api.close();
        });

        document.getElementById('folio-link').addEventListener('click', function(){
            document.querySelector('.hamburger').classList.remove("is-active");
            api.close();
        });

        

        
        
    }
);



$('.typed').typeWrite({
    repeat: true,
    interval: 4000,
    speed: 20,
    color: "#fff"
});


