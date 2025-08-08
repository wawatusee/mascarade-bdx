//Menu responsive
  function responsiveMenu() {
    const menu = document.getElementById("responsiveMenu");
    const menuIcon = document.getElementById("menuIcon");

    // Bascule la classe "responsive" pour afficher ou masquer le menu
    menu.classList.toggle("responsive");

    // Change l'icône entre ☰ et ✕
    if (menu.classList.contains("responsive")) {
        menuIcon.textContent = "✕"; /* Icône de fermeture */
    } else {
        menuIcon.textContent = "☰"; /* Icône de menu */
    }
}