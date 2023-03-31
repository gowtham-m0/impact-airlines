let x;

document.getElementById("button").onclick = function () {
    x = Math.floor((Math.random() * 1000000) + 1);

    document.getElementById("jstext").innerHTML = x;
}