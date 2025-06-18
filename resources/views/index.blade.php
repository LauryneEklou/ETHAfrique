<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="{{ asset('js/index.js') }}"></script>

</head>
<body style="background-color:#06286F; font-family: 'Inter', sans-serif;">
    <!-- le header -->
     <header class="header">
        <nav class="navbar">
            <div class="container">
                <div class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo">
                </div>
                
                <!-- Menu hamburger -->
                <div class="hamburger" id="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                
                <!-- Menu navigation -->
                <ul class="nav-menu" id="nav-menu">
                    <!-- Bouton X pour fermer -->
                    <div class="close-menu" id="close-menu">
                        <span>&times;</span>
                    </div>
                    
                    <li><a href="#">A propos</a></li>
                    <li><a href="#">Programme</a></li>
                    <li><a href="#">Partenaires</a></li>
                    <li><a href="#">Inscription et Billetteries</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Contact</a></li>
                    <li class="nav-button">
                        <button class="btn-reserve">Réserver mon billet</button>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
<!-- hero section -->
 <section class="hero">
    <div class="hero-background">
        <div class="hero-animation">
            <div class="world-map"></div>
    </div>
     <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">
                    Conference Ethereum<br>
                    Afrique Francophone
                </h1>
                
                <p class="hero-subtitle">
                    "Connecter les Écosystèmes Web3 Mondiaux pour un Impact Global"
                </p>
                
                <div class="hero-buttons">
                    <button class="btn-primary">S'inscrire</button>
                    <button class="btn-secondary">Devenir Sponsor</button>
                </div>
            </div>
        </div>
</section>
<!-- creer une section qui aura deux sections -->
 <section class="grande">
    <!-- la div contient une video qui joue -->
    <div class="video-container">
        <video autoplay muted loop class="video-background">
            <source src="{{ asset('video/event_video.mp4') }}" type="video/mp4">
    </video>
</div>
</section>
<section class="testimonials">
    <div class="container">
        <div class="testimonials-content">
            <!-- Texte à gauche -->
            <div class="testimonials-text">
                <p class="testimonial-paragraph">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean 
                    scelerisque gravida tempus. Pellentesque odio purus, dapibus 
                    ut rutrum at, mollis sit amet eros. Nulla non tortor nec elit 
                    lacinia consectetur.
                </p>
                
                <p class="testimonial-paragraph">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean 
                    scelerisque gravida tempus. Pellentesque odio purus, dapibus 
                    ut rutrum at, mollis sit amet eros. Nulla non tortor nec elit 
                    lacinia consectetur.
                </p>
                
                <button class="btn-apropos">À propos</button>
            </div>
            
            <!-- Image des statistiques à droite -->
            <div class="testimonials-stats">
                <img src="{{ asset('images/testimonials.png') }}" alt="Statistiques ETHAfrique" class="stats-image">
            </div>
        </div>
    </div>
</section>
<!-- sponsor et partenaires -->
 <section class="sponsors">
    <div class="container">
        <h2 class="sponsors-title">Sponsors et Partenaires Confirmés</h2>
        
        <div class="sponsors-slider">
            <div class="sponsors-track">
                <!-- Première ligne: 4 logos -->
                <div class="sponsors-row-1">
                    <div class="sponsor-logo">
                        <img src="{{ asset('images/deliveroo.svg') }}" alt="Deliveroo">
                    </div>
                    <div class="sponsor-logo">
                        <img src="{{ asset('images/tech.svg') }}" alt="Tech">
                    </div>
                    <div class="sponsor-logo">
                        <img src="{{ asset('images/logite.svg') }}" alt="Logite">
                    </div>
                    <div class="sponsor-logo">
                        <img src="{{ asset('images/delivery.svg') }}" alt="Delivery">
                    </div>
                </div>
                
                <!-- Deuxième ligne: 2 logos -->
                <div class="sponsors-row-2">
                    <div class="sponsor-logo">
                        <img src="{{ asset('images/salesforce.svg') }}" alt="Salesforce">
                    </div>
                    <div class="sponsor-logo">
                        <img src="{{ asset('images/deliveroo.svg') }}" alt="Deliveroo">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="sponsors-buttons">
            <button class="btn-primary">Réserver mon billet</button>
            <button class="btn-secondary">Devenir Sponsor</button>
        </div>
    </div>
</section>

<!-- section a propos avec photo d'un evenement -->
 <section class="about">
    <div class="container">
        <div class="about-content">
            <h2 class="about-title">À Propos</h2>
            
            <!-- Image centrée -->
            <div class="about-image">
                <img src="{{ asset('images/internet_computer.jpg') }}" alt="ETHAfrique Conference">
            </div>
            
            <!-- Texte en 2 colonnes sous l'image -->
            <div class="about-description">
                <div class="column">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque gravida tempus. Pellentesque odio purus, dapibus ut rutrum at, mollis sit amet eros. Nulla non tortor nec elit lacinia consectetur.</p>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque gravida tempus. Pellentesque odio purus, dapibus ut rutrum at, mollis sit amet eros. Nulla non tortor nec elit lacinia consectetur.</p>
                    
                </div>
                
                <div class="column">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque gravida tempus. Pellentesque odio purus, dapibus ut rutrum at, mollis sit amet eros. Nulla non tortor nec elit lacinia consectetur.</p>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque gravida tempus. Pellentesque odio purus, dapibus ut rutrum at, mollis sit amet eros. Nulla non tortor nec elit lacinia consectetur.</p>
                </div>
            </div>
            
            <!-- Section Mission -->
            <div class="mission-section">
                <div class="mission-grid">
                    <div class="mission-item">
                        <h3>Mission</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque gravida tempus. Pellentesque odio purus, dapibus ut rutrum at, mollis sit amet eros elit lacinia consectetur.</p>
                    </div>
                    
                    <div class="mission-item">
                        <h3>Mission</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque gravida tempus. Pellentesque odio purus, dapibus ut rutrum at, mollis sit amet eros elit lacinia consectetur.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>