//var rand

function randomInteger(min, max) {

    let rand = min + Math.random() * (max + 1 - min);
    return Math.floor(rand)

}

function d20() {
    //randomInteger(1, 20);
    document.getElementById("output").innerHTML = randomInteger(1, 20);
}

function d6() {
    document.getElementById("output2").innerHTML = randomInteger(1, 6);
}

function d4() {
    document.getElementById("output6").innerHTML = randomInteger(1, 4);
}