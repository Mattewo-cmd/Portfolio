<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Projets - Mattéo Lepine</title>
    <link rel="stylesheet" href="CSS/global.css">
    <link rel="stylesheet" href="CSS/projets.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <?php include 'navbar.php'; ?>

    <main class="container">
        <header class="page-header">
            <h1>Mes Projets</h1>
            <p>Découvrez les travaux et missions que j'ai réalisés durant ma formation et mes expériences.</p>
        </header>

        <section class="projects-grid">
            <div class="project-card">

                <div class="project-content">
                    <div class="project-image">
                        <img src="Images/Bastion.png" alt="Aperçu Bastion">
                    </div>
                    <h3>Bastion Apache Guacamole</h3>
                    <p>Mise en place d'une solution d'accès distant sécurisée sans client.</p>
                    <div class="project-tags">
                        <span>Sécurité</span>
                        <span>Linux</span>
                        <span>Docker</span>
                    </div>
                    <a href="https://github.com/Mattewo-cmd/Documentation_Bastion" class="btn-project">Voir le projet</a>
                </div>
            </div>

            <div class="project-card">

                <div class="project-content">
                    <div class="project-image">
                        <img src="Images/Graylog.webp" alt="Aperçu Graylog">
                    </div>
                    <h3>Centralisation de logs (Graylog)</h3>
                    <p>Déploiement d'un serveur de logs pour monitorer l'infrastructure.</p>
                    <div class="project-tags">
                        <span>Monitoring</span>
                        <span>Docker</span>
                    </div>
                    <a href="https://github.com/Mattewo-cmd/Documentation_Graylog" class="btn-project">Voir le projet</a>
                </div>
            </div>

            </section>
    </main>

    <script src="JS/projets.js"></script>
</body>
</html>