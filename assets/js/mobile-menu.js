/**
 * Add a listener to the hamburger button/icon.
 * Toggles the navigation menu when clicking on the hamburger button/icon
 */
document.getElementById('mobile-nav-hamburger').addEventListener("click",
    function () {
    // The nagivation menu containing the global navigation links
    var navMenu = document.getElementById('navigation-menu');

    if (navMenu.style.display === '' || navMenu.style.display === 'none') {
        // If not displayed, displayed now
        navMenu.style.display = 'block';
    } else {
        // Otherwise, hidde it.
        navMenu.style.display = 'none'
    }
});
