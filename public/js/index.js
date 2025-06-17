document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('nav-menu');
    const closeMenu = document.getElementById('close-menu');
    
    // Fonction pour ouvrir le menu
    function openMenu() {
        hamburger.classList.add('active');
        navMenu.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
    
    // Fonction pour fermer le menu
    function closeMenuFunction() {
        hamburger.classList.remove('active');
        navMenu.classList.remove('active');
        document.body.style.overflow = 'auto';
    }
    
    // Toggle menu mobile avec hamburger
    hamburger.addEventListener('click', function() {
        if (navMenu.classList.contains('active')) {
            closeMenuFunction();
        } else {
            openMenu();
        }
    });
    
    // Fermer le menu avec le bouton X
    closeMenu.addEventListener('click', function() {
        closeMenuFunction();
    });
    
    // Fermer le menu quand on clique sur un lien
    const navLinks = document.querySelectorAll('.nav-menu a');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            closeMenuFunction();
        });
    });
    
    // Fermer le menu avec la touche Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && navMenu.classList.contains('active')) {
            closeMenuFunction();
        }
    });
    
    // Fermer le menu en cliquant en dehors (optionnel)
    document.addEventListener('click', function(e) {
        if (navMenu.classList.contains('active') && 
            !navMenu.contains(e.target) && 
            !hamburger.contains(e.target)) {
            closeMenuFunction();
        }
    });
});