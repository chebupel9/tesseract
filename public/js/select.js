document.addEventListener("DOMContentLoaded", function () {
    var scrollButton = document.getElementById("start-btn");

    scrollButton.addEventListener("click", function () {
        document.getElementById("form").scrollIntoView({ behavior: "smooth", block: "center" });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var mainButton = document.getElementById("main-btn");

    mainButton.addEventListener("click", function () {
        document.getElementById("main").scrollIntoView({ behavior: "smooth", block: "center" });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var aboutButton = document.getElementById("about-btn");

    aboutButton.addEventListener("click", function () {
        document.getElementById("about").scrollIntoView({ behavior: "smooth", block: "start" });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var apiButton = document.getElementById("api-btn");

    apiButton.addEventListener("click", function () {
        document.getElementById("api").scrollIntoView({ behavior: "smooth", block: "start" });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var upButton = document.getElementById("up");

    upButton.addEventListener("click", function () {
        document.getElementById("main").scrollIntoView({ behavior: "smooth", block: "start" });
    });
});