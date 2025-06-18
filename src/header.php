<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="css/header.css?v=1.1">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-brands/css/uicons-brands.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
</head>
<header>
    <nav class="navbar">
        <ul class="navbar-socials fade-in-sequence delay-3-header">
                <li class="navbar-social-element"><a href=""><i class="fi fi-brands-instagram"></i></a></li>
                <li class="navbar-social-element"><a href=""><i class="fi fi-brands-github"></i></a></li>
                <li class="navbar-social-element"><a href=""><i class="fi fi-brands-linkedin"></i></a></li>
            </ul>

            <ul class="navbar-links fade-in-sequence delay-3-header">
                <li id="nav-about" class="navbar-links-element"><a href="#about-me-section">About me</a></li>
                <li id="nav-works" class="navbar-links-element"><a href="#works">My Works</a></li>
            </ul>

            <nav class="navbar-mobile-menu">
                
                <div class="hamburger-menu">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>

                <div class="navbar-mobile-content">
                    <ul class="navbar-mobile-items">
                        <li id="nav-about" class="navbar-mobile-item"><a href="index.php#about-me-section">About me</a></li></li>
                        <li id="nav-works" class="navbar-mobile-item"><a href="">My Works</a></li></li>
                    </ul>
                    <ul class="navbar-mobile-socials">
                        <li class="navbar-social-element"><a href="https://www.instagram.com/aarm.ndo/" target="_blank"><i class="fi fi-brands-instagram"></i></a></li>
                        <li class="navbar-social-element"><a href="https://github.com/armandoandreani" target="_blank" ><i class="fi fi-brands-github"></i></a></li>
                        <li class="navbar-social-element"><a href="https://www.linkedin.com/in/armando-andreani" target="_blank"><i class="fi fi-brands-linkedin"></i></a></li>
                    </ul>

                    <button id="nav-contact" type="button" class="toContact-btn-mobile">Let's talk!</button>
                </div>
                
            </nav>

            <a id="nav-contact" href="#contacts" class="toContact-btn fade-in-sequence delay-3-header">Let's talk!</a>
        </nav>
    </header>

<script src="js/menu_header.js"></script>

</html>