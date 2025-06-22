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
    
    // Carousel des speakers
    const speakersTrack = document.getElementById('speakersTrack');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    
    if (speakersTrack && prevBtn && nextBtn) {
        let currentIndex = 0;
        const speakerCards = speakersTrack.querySelectorAll('.speaker-card');
        const totalSpeakers = speakerCards.length;
        
        // Calculer combien de cartes sont visibles
        function getVisibleCards() {
            const containerWidth = speakersTrack.parentElement.offsetWidth;
            const cardWidth = 280 + 30; // largeur carte + gap
            return Math.floor(containerWidth / cardWidth);
        }
        
        function updateCarousel() {
            const cardWidth = 280 + 30; // largeur carte + gap
            const translateX = currentIndex * cardWidth;
            speakersTrack.style.transform = `translateX(-${translateX}px)`;
            
            // Mettre à jour l'état des boutons
            const visibleCards = getVisibleCards();
            prevBtn.disabled = currentIndex === 0;
            nextBtn.disabled = currentIndex >= totalSpeakers - visibleCards;
        }
        
        // Navigation précédente
        prevBtn.addEventListener('click', function() {
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
        });
        
        // Navigation suivante
        nextBtn.addEventListener('click', function() {
            const visibleCards = getVisibleCards();
            if (currentIndex < totalSpeakers - visibleCards) {
                currentIndex++;
                updateCarousel();
            }
        });
        
        // Redimensionnement de la fenêtre
        window.addEventListener('resize', function() {
            updateCarousel();
        });
        
        // Initialiser
        updateCarousel();
    }
});
document.addEventListener('DOMContentLoaded', function() {
    // Code existant...
    
    // FAQ Accordéon
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            
            // Fermer tous les autres items
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });
            
            // Toggle l'item courant
            if (isActive) {
                item.classList.remove('active');
            } else {
                item.classList.add('active');
            }
        });
    });
});