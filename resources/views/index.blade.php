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
                    
                    <li><a href="#about">A propos</a></li>
                    <li><a href="#programme">Programme</a></li>
                    <li><a href="#sponsors">Partenaires</a></li>
                    <li><a href="#tickets">Inscription et Billetteries</a></li>
                    <li><a href="#faqs">FAQs</a></li>
                    <li><a href="#contact">Contact</a></li>
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
                <a href="https://forms.gle/byCossJDeyzFtZqt6" class="btn-primary" style="text-decoration: none;">S'inscrire</a>
                <a href="https://forms.gle/iajwWoUd9EFnGuwb7" class="btn-secondary" style="text-decoration: none;">Devenir Sponsor</a>
              </div>

            </div>
        </div>
</section>
<!-- creer une section qui aura deux sections -->
 <section class="grande">
    <!-- la div contient une video qui joue -->
    <div class="video-container">
        <video autoplay muted loop class="video-background">
            <source src="{{ asset('video/ICP TOGO MEETUP.mp4') }}" type="video/mp4">
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
 <section class="sponsors" id="sponsors">
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
 <section class="about"id="about">
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
<!-- la section programme  -->
 <section class="programme" id="programme">
    <div class="container">
        <h2 class="programme-title">Programme (Agenda/Schedule)</h2>
        
        <div class="programme-content">
            <!-- Timeline à gauche -->
            <div class="programme-timeline">
                <!-- Pré-événement -->
                <div class="timeline-item">
                    <div class="timeline-dot pre-event"></div>
                    <div class="timeline-card">
                        <h3 class="timeline-title">Pré-événement</h3>
                        <div class="timeline-details">
                            <h4>7 Jours</h4>
                            <p>Workshops en ligne, mentorat, Hackathon</p>
                        </div>
                    </div>
                </div>
                
                <!-- Conférence principale -->
                <div class="timeline-section">
                    <div class="timeline-section-title">
                        <div class="timeline-dot main-event"></div>
                        <h3>Conférence principale</h3>
                    </div>
                    
                    <!-- Conteneur scrollable pour les jours -->
                    <div class="timeline-days">
                        <!-- Jour 1 -->
                        <div class="timeline-item">
                            <div class="timeline-dot day"></div>
                            <div class="timeline-card">
                                <h4>Jour 1</h4>
                                <p>Keynotes, panels sur la gouvernance décentralisée</p>
                            </div>
                        </div>
                        
                        <!-- Jour 2 -->
                        <div class="timeline-item">
                            <div class="timeline-dot day"></div>
                            <div class="timeline-card">
                                <h4>Jour 2</h4>
                                <p>Ateliers techniques, pitchs startups</p>
                            </div>
                        </div>
                        
                        <!-- Jour 3 -->
                        <div class="timeline-item">
                            <div class="timeline-dot day"></div>
                            <div class="timeline-card">
                                <h4>Jour 3</h4>
                                <p>Networking, intervention des BOCs, remise des prix</p>
                            </div>
                        </div>
                        
                        <!-- Vous pouvez ajouter d'autres jours ici -->
                        <!-- Jour 4 -->
                        <div class="timeline-item">
                            <div class="timeline-dot day"></div>
                            <div class="timeline-card">
                                <h4>Jour 4</h4>
                                <p>Sessions de clôture, annonces futures</p>
                            </div>
                        </div>
                        
                        <!-- Jour 5 -->
                        <div class="timeline-item">
                            <div class="timeline-dot day"></div>
                            <div class="timeline-card">
                                <h4>Jour 5</h4>
                                <p>Événements post-conférence, networking</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Image à droite -->
            <div class="programme-image">
                <img src="{{ asset('images/programme.jpg') }}" alt="Programme Conference">
            </div>
        </div>
    </div>
</section>


<!-- realisons la section des speakers -->
 <section class="speakers">
    <div class="container">
        <div class="speakers-header">
            <h2 class="speakers-title">Speakers</h2>
            <div class="speakers-navigation">
                <button class="nav-btn prev-btn" id="prevBtn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                        <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button class="nav-btn next-btn" id="nextBtn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                        <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
        
        <div class="speakers-carousel">
            <div class="speakers-track" id="speakersTrack">
                <!-- Speaker 1 -->
                <div class="speaker-card">
                    <div class="speaker-image">
                        <img src="{{ asset('images/speaker.jpg') }}" alt="John Doe">
                    </div>
                    <div class="speaker-info">
                        <h3 class="speaker-name">John Doe</h3>
                        <p class="speaker-role">Developer</p>
                        <p class="speaker-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                
                <!-- Speaker 2 -->
                <div class="speaker-card">
                    <div class="speaker-image">
                        <img src="{{ asset('images/speaker.jpg') }}" alt="John Doe">
                    </div>
                    <div class="speaker-info">
                        <h3 class="speaker-name">John Doe</h3>
                        <p class="speaker-role">Developer</p>
                        <p class="speaker-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                
                <!-- Speaker 3 -->
                <div class="speaker-card">
                    <div class="speaker-image">
                        <img src="{{ asset('images/speaker.jpg') }}" alt="John Doe">
                    </div>
                    <div class="speaker-info">
                        <h3 class="speaker-name">John Doe</h3>
                        <p class="speaker-role">Developer</p>
                        <p class="speaker-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                
                <!-- Speaker 4 -->
                <div class="speaker-card">
                    <div class="speaker-image">
                        <img src="{{ asset('images/speaker.jpg') }}" alt="John Doe">
                    </div>
                    <div class="speaker-info">
                        <h3 class="speaker-name">John Doe</h3>
                        <p class="speaker-role">Developer</p>
                        <p class="speaker-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                
                <!-- Speaker 5 -->
                <div class="speaker-card">
                    <div class="speaker-image">
                        <img src="{{ asset('images/speaker.jpg') }}" alt="John Doe">
                    </div>
                    <div class="speaker-info">
                        <h3 class="speaker-name">John Doe</h3>
                        <p class="speaker-role">Developer</p>
                        <p class="speaker-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                
                <!-- Speaker 6 -->
                <div class="speaker-card">
                    <div class="speaker-image">
                        <img src="{{ asset('images/speaker.jpg') }}" alt="John Doe">
                    </div>
                    <div class="speaker-info">
                        <h3 class="speaker-name">John Doe</h3>
                        <p class="speaker-role">Developer</p>
                        <p class="speaker-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ✅ Bouton d'inscription centré et plus visible -->
<div class="mt-4" style="display: flex; justify-content: center; text-align: center;">
    <div class="formation-card" style="
        padding: 15px 30px;
        font-size: 1.1rem;
        background: #2BF7D5;
        color: #000;
        font-weight: bold;
        box-shadow: 0 0 12px #2BF7D5(164, 192, 7, 0.8);
        transform: scale(1.02);
        transition: all 0.3s ease;
    ">
        <a href="https://forms.gle/Hf4b73fyPdPyHSud7"
           style="color: inherit; text-decoration: none;">
            🔗 Intervenir lors du conférence
        </a>
    </div>
</div>


<!-- la section des packages -->
 
<section class="sponsoring-packages">
    <div class="container">
        <h2 class="packages-title">Packages de sponsoring</h2>
        
        <div class="packages-grid">
            <!-- Diamond Sponsor -->
            <div class="package-card diamond">
                <h3 class="package-name">Diamond Sponsor</h3>
                <div class="package-price">5,000$+</div>
            </div>
            
            <!-- Gold Sponsor -->
            <div class="package-card gold">
                <h3 class="package-name">Gold Sponsor</h3>
                <div class="package-price">3,000$</div>
            </div>
            
            <!-- Silver Sponsor -->
            <div class="package-card silver">
                <h3 class="package-name">Silver Sponsor</h3>
                <div class="package-price">2,000$</div>
            </div>
            
            <!-- Partner Sponsor -->
            <div class="package-card partner">
                <h3 class="package-name">Partner Sponsor</h3>
                <div class="package-price">1,000$</div>
            </div>
        </div>
    </div>
</section>
<!-- //la section de reservation de billet -->
<section class="tickets" id="tickets">
    <div class="container">
        <h2 class="tickets-title">Inscriptions et Billetterie</h2>
        
        <!-- Cartes de tickets -->
        <div class="tickets-grid">
            <!-- Standard Ticket -->
            <div class="ticket-card">
                <h3 class="ticket-name">Standard Ticket</h3>
                <div class="ticket-price">12$</div>
            </div>
            
            <!-- VIP Ticket -->
            <div class="ticket-card">
                <h3 class="ticket-name">VIP Ticket</h3>
                <div class="ticket-price">60$</div>
            </div>
            
            <!-- Hackathon Access -->
            <div class="ticket-card">
                <h3 class="ticket-name">Hackathon Access</h3>
                <div class="ticket-price">30$</div>
            </div>
        </div>
        
        <!-- Bouton de réservation -->
        <div class="ticket-action">
            <button class="btn-reserve-ticket">Réserver mon billet</button>
        </div>
        
        <!-- Méthodes de paiement -->
        <div class="payment-methods">
            <div class="payment-icon">
                <img src="{{ asset('images/stripe.svg') }}" alt="Stripe">
            </div>
            <div class="payment-icon">
                <img src="{{ asset('images/mastercard.svg') }}" alt="Mastercard">
            </div>
            <div class="payment-icon">
                <img src="{{ asset('images/bitpay.svg') }}" alt="BitPay">
            </div>
        </div>
    </div>
</section>

<!-- le formulaire de contact -->
<section class="contact" id="contact">
    <div class="container">
        <div class="contact-header">
            <h2 class="contact-title">Contact et FAQ</h2>
            <p class="contact-description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque gravida tempus. Pellentesque odio purus, dapibus ut rutrum at, mollis sit amet eros. Nulla non tortor nec elit lacinia consectetur.
            </p>
        </div>
        
        <form class="contact-form" id="contactForm">
            <div class="form-row">
                <div class="form-group">
                    <label for="firstName">First name</label>
                    <input type="text" id="firstName" name="firstName" required>
                </div>
                <div class="form-group">
                    <label for="lastName">Last name</label>
                    <input type="text" id="lastName" name="lastName" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone number</label>
                    <input type="tel" id="phone" name="phone">
                </div>
            </div>
            
            <div class="form-group">
                <label for="subject">Subject</label>
                <select id="subject" name="subject" required>
                    <option value="">Select one...</option>
                    <option value="general">General inquiry</option>
                    <option value="sponsorship">Sponsorship</option>
                    <option value="speaking">Speaking opportunity</option>
                    <option value="media">Media request</option>
                    <option value="other">Other</option>
                </select>
            </div>
            
            <div class="form-group">
                <label class="radio-group-label">Which best describes you?</label>
                <div class="radio-group">
                    <div class="radio-column">
                        <div class="radio-item">
                            <input type="radio" id="firstChoice" name="description" value="first">
                            <label for="firstChoice">First choice</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="thirdChoice" name="description" value="third">
                            <label for="thirdChoice">Third choice</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="fifthChoice" name="description" value="fifth">
                            <label for="fifthChoice">Fifth choice</label>
                        </div>
                    </div>
                    <div class="radio-column">
                        <div class="radio-item">
                            <input type="radio" id="secondChoice" name="description" value="second">
                            <label for="secondChoice">Second choice</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="fourthChoice" name="description" value="fourth">
                            <label for="fourthChoice">Fourth choice</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="otherChoice" name="description" value="other">
                            <label for="otherChoice">Other</label>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="6" placeholder="Type your message..." required></textarea>
            </div>
            
            <div class="form-checkbox">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">I accept the <a href="#" class="terms-link">Terms</a></label>
            </div>
            
            <button type="submit" class="btn-submit">Soumettre</button>
        </form>
    </div>
</section>

<!-- section FAQ -->
<section class="faq" id="faqs">
    <div class="container">
        <div class="faq-container">
            <!-- FAQ Item 1 - Ouvert par défaut -->
            <div class="faq-item active">
                <div class="faq-question">
                    <h3>Lorem ipsum dolor sit amet?</h3>
                    <div class="faq-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                            <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque gravida tempus. Pellentesque odio purus, dapibus ut rutrum at, mollis sit amet eros. Nulla non tortor nec elit lacinia consectetur.</p>
                </div>
            </div>
            
            <!-- FAQ Item 2 -->
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Lorem ipsum dolor sit amet?</h3>
                    <div class="faq-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                            <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque gravida tempus. Pellentesque odio purus, dapibus ut rutrum at, mollis sit amet eros. Nulla non tortor nec elit lacinia consectetur.</p>
                </div>
            </div>
            
            <!-- FAQ Item 3 -->
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Lorem ipsum dolor sit amet?</h3>
                    <div class="faq-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                            <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque gravida tempus. Pellentesque odio purus, dapibus ut rutrum at, mollis sit amet eros. Nulla non tortor nec elit lacinia consectetur.</p>
                </div>
            </div>
            
            <!-- FAQ Item 4 -->
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Lorem ipsum dolor sit amet?</h3>
                    <div class="faq-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                            <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque gravida tempus. Pellentesque odio purus, dapibus ut rutrum at, mollis sit amet eros. Nulla non tortor nec elit lacinia consectetur.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- le footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <!-- Logo et titre -->
            <div class="footer-brand">
                <div class="footer-logo">
                    <img src="{{ asset('images/logo.png') }}" alt="ETH Afrique Logo">
                </div>
                <!-- <div class="footer-text">
                    <h3>Conference Ethereum</h3>
                    <h4>Afrique Francophone</h4>
                </div> -->
            </div>
            
            <!-- Réseaux sociaux -->
            <div class="footer-social">
                <a href="#" class="social-link" aria-label="Facebook">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>
                <a href="#" class="social-link" aria-label="Instagram">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>
                <a href="#" class="social-link" aria-label="Twitter">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                    </svg>
                </a>
                <a href="#" class="social-link" aria-label="LinkedIn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                </a>
                <a href="#" class="social-link" aria-label="YouTube">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                    </svg>
                </a>
            </div>
        </div>
        
        <!-- Copyright et liens -->
        <div class="footer-bottom">
            <div class="footer-copyright">
                <p>2025 Africa Blockchain Community. All right reserved. By ELV</p>
            </div>
            <div class="footer-links">
                <a href="#" class="footer-link">Privacy Policy</a>
                <a href="#" class="footer-link">Terms of Service</a>
                <a href="#" class="footer-link">Cookies Settings</a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>