let typer = document.getElementById('typer');
let blink = true;

setInterval(function(){ typer.style.opacity = '1'; document.getElementById('typer') = typer;}, 800);
setTimeout(function(){ setInterval(function(){ typer.style.opacity = '0'; document.getElementById('typer') = typer;}, 800); }, 400);

