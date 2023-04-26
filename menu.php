
<nav class="navbar navbar-expand-md mb-4">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0 mt-2">
            <li class="nav-item pr-5">
                <a class="nav-link  <?php echo $pg == "inicio" ? "active" : ""; ?>" href="index.php">Home</a>
            </li>
            <li class="nav-item pr-5">
                <a class="nav-link <?php echo $pg == "sobre mi" ? "active" : ""; ?> "   href=" about-me.php">About me</a>
            </li>
            <li class="nav-item pr-5">
                <a class="nav-link  <?php echo $pg == "proyectos" ? "active" : ""; ?>" href="projects.php">Projects</a>
            </li>
            <li class="nav-item pr-5">
                <a class="nav-link <?php echo $pg == "contacto" ? "active" : ""; ?>" href="contact.php">Contact</a>
            </li>
        </ul>
        <div class="lolo">
            <a href="" class="btn btn-rojo">Download resume <i class="fas fa-download"></i></a>
        </div>
    </div>
</nav>

