var human_art = {
    "art1": "test",
    "art2": "test2",
    "art3": "test3"
}
var goblin_art = {
    "art1": "test",
    "art2": "test2",
    "art3": "test3"
}
var satyr_art = {
    "art1": "test",
    "art2": "test2",
    "art3": "test3"
}
var dwarf_art = {
    "art1": "test",
    "art2": "test2",
    "art3": "test3"
}

function h_upd() {
    document.getElementById("h_a1").innerHTML = JSON.stringify(human_art.art1)
    document.getElementById("h_a2").innerHTML = JSON.stringify(human_art.art2)
    document.getElementById("h_a3").innerHTML = JSON.stringify(human_art.art3)
}
function g_upd() {
    document.getElementById("g_a1").innerHTML = JSON.stringify(goblin_art.art1)
    document.getElementById("g_a2").innerHTML = JSON.stringify(goblin_art.art2)
    document.getElementById("g_a3").innerHTML = JSON.stringify(goblin_art.art3)
}
function s_upd() {
    document.getElementById("s_a1").innerHTML = JSON.stringify(satyr_art.art1)
    document.getElementById("s_a2").innerHTML = JSON.stringify(satyr_art.art2)
    document.getElementById("s_a3").innerHTML = JSON.stringify(satyr_art.art3)
}
function d_upd() {
    document.getElementById("d_a1").innerHTML = JSON.stringify(dwarf_art.art1)
    document.getElementById("d_a2").innerHTML = JSON.stringify(dwarf_art.art2)
    document.getElementById("d_a3").innerHTML = JSON.stringify(dwarf_art.art3)
}

function h_save() {
    art1_new = document.getElementById("h_a1").innerHTML;
    if (art1_new !== human_art.art1) { human_art.art1 = art1_new };
    art2_new = document.getElementById("h_a2").innerHTML;
    if (art2_new !== human_art.art2) { human_art.art2 = art2_new };
    art3_new = document.getElementById("h_a3").innerHTML;
    if (art3_new !== human_art.art3) { human_art.art3 = art3_new };
}
