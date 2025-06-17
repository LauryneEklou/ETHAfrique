# ETHAfrique - Conference Ethereum Afrique Francophone

##  Description

Site web officiel de la Conférence Ethereum Afrique Francophone, un événement dédié à connecter les écosystèmes Web3 mondiaux pour un impact global en Afrique francophone.

##  Fonctionnalités

- **Design Responsive** : Interface adaptée pour desktop, tablette et mobile
- **Navigation Interactive** : Menu hamburger avec animations sur mobile
- **Sections Dynamiques** :
  - Hero section avec animations de réseau
  - Section testimonials avec statistiques
  - Section vidéo avec contrôles personnalisés
  - Footer informatif

## 🛠️ Technologies Utilisées

- **Frontend** : HTML5, CSS3, JavaScript (Vanilla)
- **Framework** : Laravel (Blade Templates)
- **Styles** : CSS personnalisé avec animations
- **Responsive** : Media queries pour mobile-first design

## 📁 Structure du Projet

```
ETHAfrique/
├── resources/
│   └── views/
│       └── index.blade.php      # Page principale
├── public/
│   ├── css/
│   │   └── app.css             # Styles principaux
│   ├── js/
│   │   └── index.js            # Scripts JavaScript
│   ├── images/
│   │   ├── logo.png            # Logo du site
│   │   ├── afrique.png         # Carte de l'Afrique
│   │   ├── testimonials.png    # Image des statistiques
│   │   └── weblines.png        # Fond avec lignes
│   └── videos/
│       └── event_video.mp4     # Vidéo de l'événement
├── routes/
│   └── web.php                 # Routes Laravel
└── README.md
```

## Installation

1. **Cloner le repository**
   ```bash
   git clone https://github.com/votre-username/ethafrique.git
   cd ethafrique
   ```

2. **Installer les dépendances Laravel**
   ```bash
   composer install
   ```

3. **Configuration de l'environnement**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Démarrer le serveur**
   ```bash
   php artisan serve
   ```

5. **Accéder au site**
   ```
   http://localhost:8000
   ```

