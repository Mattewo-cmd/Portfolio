<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Mattéo Lepine</title>
    <link rel="stylesheet" href="CSS/global.css">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <?php include 'navbar.php'; ?>

    <main class="main-container">
        <aside class="sidebar">
            <div class="profile-card">
                <img src="Images/me_avatar.jpg" alt="Photo de Mattéo" class="avatar">
                <h1>Lepine Mattéo</h1>
                <p class="subtitle">Administrateur Systèmes et Réseaux Junior chez CGO Expertise Comptable</p>
                <div class="location">
                    <i class="fas fa-globe"></i> 17810 Pessines, France
                </div>
                <br>
                <div class="social-icons">
                    <a href="mailto:lepine.matteo@gmail.com"><i class="fas fa-envelope"></i></a>
                    <a href="tel:0659099997"><i class="fas fa-phone"></i></a>
                    <a href="https://www.linkedin.com/in/matteo-lepine"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/mattewo-cmd"><i class="fab fa-github"></i></a>
                </div>
            </div>

            <div class="about-section">
                <h3>À propos de moi</h3>
                <p>Jeune étudiant passionné d'informatique, principalement dans le domaine de l'administration de systèmes et de réseaux.</p>
            </div>
        </aside>

        <section class="content-area">
            <h2 class="section-title">Expériences Professionnelles</h2>
            <div class="exp-card">
                <div class="exp-date">
                    <span>Sept. 2025</span>
                    <span>Sept. 2026</span>
                </div>
                <div class="exp-info">
                    <h3>Alternant – <a href="https://www.groupecgo.fr/" class="company" target="_blank">CGO Expertise Comptable</a></h3>
                    <p class="location-text">Fontcouverte (17)</p>
                    <p class="duration">1 an (08/09/2025 au 08/09/2026)</p>
                    <ul>
                        <li>Déploiement & gestion d'un bastion (Apache Guacamole)</li>
                        <li>Déploiement & gestion d'un outil de centralisation de logs (Graylog)</li>
                        <li>Support utilisateur avec GLPI</li>
                    </ul>
                    <div class="tags">
                        <span class="tag">Hyperviseur (vSphere)</span>
                        <span class="tag">Ticketing</span>
                    </div>
                </div>
            </div>
            <div class="exp-card">
                <div class="exp-date">
                    <span>Janv. 2025</span>
                    <span>Févr. 2025</span>
                </div>
                <div class="exp-info">
                    <h3>Stagiaire – <a href="https://www.eau17.fr/" class="company" target="_blank">Eau17</a></h3>
                    <p class="location-text">Saintes (17)</p>
                    <p class="duration">5 semaines (20/01/2025 au 21/02/2025)</p>
                    <ul>
                        <li>Déploiement & gestion d’un outil de supervision (Centreon)</li>
                        <li>Participation à la sécurisation SI avec la directive NIS2</li>
                        <li>Introduction à la gestion de projet IT</li>
                    </ul>
                    <div class="tags">
                        <span class="tag">Supervision</span>
                        <span class="tag">Gestion de projet</span>
                    </div>
                </div>
            </div>
            <div class="exp-card">
                <div class="exp-date">
                    <span>Mai. 2024</span>
                    <span>Juin. 2024</span>
                </div>
                <div class="exp-info">
                    <h3>Stagiaire – <a href="https://www.zolux.com/" class="company" target="_blank">Zolux</a></h3>
                    <p class="location-text">Saintes (17)</p>
                    <p class="duration">5 semaines (27/05/2024 au 28/06/2024)</p>
                    <ul>
                        <li>Support utilisateur de niveau 1</li>
                        <li>Gestion & suivi des tickets (GLPI)</li>
                        <li>Maintenance et assistance sur les postes de travail</li>
                    </ul>
                    <div class="tags">
                        <span class="tag">Support (GLPI)</span>
                        <span class="tag">Supervision</span>
                    </div>
                </div>
            </div>
            </section>
    </main>

    <script src="JS/index.js"></script>
</body>
</html>