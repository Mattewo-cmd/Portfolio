<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact & Parcours - Mattéo Lepine</title>
    <link rel="stylesheet" href="CSS/global.css">
    <link rel="stylesheet" href="CSS/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <?php include 'navbar.php'; ?>

    <main class="contact-container">
        
        <section class="contact-card">
            <h2>Me Contacter</h2>
            <div class="social-grid">
                <a href="mailto:lepine.matteo@gmail.com" class="social-item">
                    <i class="fas fa-envelope"></i> Email
                </a>
                <a href="tel:+33659099997" class="social-item">
                    <i class="fas fa-phone"></i> Téléphone
                </a>
                <a href="https://www.linkedin.com/in/matteo-lepine" target="_blank" class="social-item">
                    <i class="fab fa-linkedin"></i> LinkedIn
                </a>
                <a href="https://github.com/mattewo-cmd" target="_blank" class="social-item">
                    <i class="fab fa-github"></i> GitHub
                </a>
            </div>

            <div class="cv-section">
                <button id="toggleCV" class="btn-cv">
                    <i class="fas fa-file-pdf"></i> Afficher / Masquer mon CV
                </button>

                <div id="cvPreview" class="cv-wrapper hidden">
                    <img src="Images/Alternance.png" alt="Mon CV" class="cv-image">
                    <a href="Images/Alternance.pdf" download class="download-link">Télécharger le PDF</a>
                </div>
            </div>

        </section>

        <section class="formations-card">
            <h2>Mes Formations</h2>
            <div class="timeline">
                <div class="formation-item">
                    <span class="year">2025 - 2026</span>
                    <h3>Bachelor 3 Sciences Informatiques et Numériques</h3>
                    <p>Option ASRBD (Administrateur Systèmes, Réseaux et Bases de Données)</p>
                    <p class="school">EPSI Bordeaux (33)</p>
                </div>
                <div class="formation-item">
                    <span class="year">2023 - 2025</span>
                    <h3>BTS Services Informatiques aux Organisations (SIO)</h3>
                    <p>Option SISR (Solutions d’Infrastructure, Systèmes et Réseaux)</p>
                    <p class="school">Lycée Élie Vinet, Barbezieux (16)</p>
                </div>
                <div class="formation-item">
                    <span class="year">2020 - 2023</span>
                    <h3>Baccalauréat Professionel Systèmes Numériques</h3>
                    <p>Option ARED (Audiovisuel, Réseau et Équipements Domestiques)</p>
                    <p class="school">Lycée Bernard Palissy, Saintes (17)</p>
                </div>
            </div>
        </section>

    </main>

    <script src="JS/contact.js"></script>
</body>
</html>