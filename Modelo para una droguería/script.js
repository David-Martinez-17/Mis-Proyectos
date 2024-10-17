document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("menu-toggle");
    const navList = document.getElementById("nav-list");

    menuToggle.addEventListener("click", function () {
        navList.classList.toggle("active");
    });

    // Cerrar menú al hacer clic en un enlace
    const navLinks = document.querySelectorAll(".nav-link");
    navLinks.forEach(function (link) {
        link.addEventListener("click", function () {
            navList.classList.remove("active");
        });
    });
});