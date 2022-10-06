let animales = 0;

function add() {
    animales++;
    alert("Has añadido un animal domestico, ahora hay " + animales);
}

function comprar() {
    if(animales <= 0)
        alert("Nos hemos quedado sin animales domesticos.");
    else {
        animales--;
        alert("Has comprado un animal domestico, ahora hay " + animales);
    }
}