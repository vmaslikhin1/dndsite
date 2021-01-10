var lvl1art = {
    "ring": "invisible",
    "coat": "defence",
    "rope": "tie",
    "scroll": "fireball"
};
var lvl2art = {
    "ring": "invisible+1",
    "coat": "defence+1",
    "rope": "tie+1",
    "scroll": "fireball+1"
};
var lvl3art = {
    "ring": "invisible+2",
    "coat": "defence+2",
    "rope": "tie+2",
    "scroll": "fireball+2"
};

function getRandomart(lvl_name) {

    properties = Object.getOwnPropertyNames(lvl_name);
    index = Math.floor(Math.random() * properties.length);
    output = {};
    output[properties[index]] = lvl_name[properties[index]];
    //console.log(output)
    return output
}

function lvl1() {
    document.getElementById("output3").innerHTML = JSON.stringify(getRandomart(lvl1art));
}

function lvl2() {
    document.getElementById("output4").innerHTML = JSON.stringify(getRandomart(lvl2art));
}

function lvl3() {
    document.getElementById("output5").innerHTML = JSON.stringify(getRandomart(lvl3art));
}