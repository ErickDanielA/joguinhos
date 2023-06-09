
document.addEventListener("DOMContentLoaded", function() {
    var buttons = document.querySelectorAll(".button");
    var iframe = document.getElementById("meuIframe");

    for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("click", function(event) {
            event.preventDefault();
            var url = this.getAttribute("href");
            iframe.src = url;
            iframe.style.display = "block";
        });
    }
});





