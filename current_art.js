var human_art = {
    "art1": "test",
    "art2": "test2",
    "art3": "test3"
}

function h_upd() {
    document.getElementById("h_a1").innerHTML = JSON.stringify(human_art.art1)
    document.getElementById("h_a2").innerHTML = JSON.stringify(human_art.art2)
    document.getElementById("h_a3").innerHTML = JSON.stringify(human_art.art3)
}

function h_save() {
    art1_new = document.getElementById("h_a1").innerHTML;
    if (art1_new !== human_art.art1) { human_art.art1 = art1_new };
    art2_new = document.getElementById("h_a2").innerHTML;
    if (art2_new !== human_art.art2) { human_art.art2 = art2_new };
    art3_new = document.getElementById("h_a3").innerHTML;
    if (art3_new !== human_art.art3) { human_art.art3 = art3_new };
}