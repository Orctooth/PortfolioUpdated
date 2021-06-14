// let typer = document.getElementById('typer');
// let blink = true;

// setInterval(function(){ typer.style.opacity = '1'; document.getElementById('typer') = typer;}, 800);
// setTimeout(function(){ setInterval(function(){ typer.style.opacity = '0'; document.getElementById('typer') = typer;}, 800); }, 400);

$('.typed').typeWrite({
    repeat: true,
    interval: 4000,
    speed: 20,
    color: "#fff"
});

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
        api.open();
        document.querySelector('.hamburger').classList.toggle("is-active");
        document.querySelector('.sticky-nav').style.display ="block";
    
});
        
        
    }
    
);