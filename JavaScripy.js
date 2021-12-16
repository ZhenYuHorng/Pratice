window.onload = mode;
function mode_change() {
    var element = document.body;
    element.classList.toggle("dark");
    var but = document.getElementById("mode");
    if (but.innerHTML == "dark") {
        but.innerHTML = "light";
    } else {
        but.innerHTML = "dark";
    }
}
function mode() {
    var button = document.getElementById("mode");
    button.onclick = mode_change;
    // button.onclick = word_change;
}
$(function () {
    $("#tabs").tabs();
});










