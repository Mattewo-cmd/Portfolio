<nav class="navbar">
    <div class="nav-container">
        <a href="index.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">HOME</a>
        <a href="projets.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'projets.php' ? 'active' : ''; ?>">PROJETS</a>
        <a href="contact.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">CONTACT</a>
    </div>
</nav>