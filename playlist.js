/**
 * Created with JetBrains PhpStorm.
 * User: quintin.smith
 * Date: 10/8/12
 * Time: 1:03 PM
 * To change this template use File | Settings | File Templates.
 */
window.onload = init;

function init() {
var button = document.getElementById("addButton");
button.onclick = handleButtonClick;
loadPlaylist();



}

function handleButtonClick() {
    var song = document.getElementById("songTextInput").value;

    var li = document.createElement("li");
    li.innerHTML = song;

    var ul = document.getElementById("playlist");
    ul.appendChild(li);
    save(song);



}