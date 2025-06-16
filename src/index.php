<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armando's Portfolio</title>
    <link rel="stylesheet" href="css/style.css?=v.1">
    <link rel="stylesheet" href="css/media.css?=v.1.1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-solid-chubby/css/uicons-solid-chubby.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-bold-straight/css/uicons-bold-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <script defer src="js/app.js?=v.1.1"></script>
</head>

<?php include('header.php') ?>

<body>
    <main class="main-content">
        <section class="hero-section">
            <div class="hero-container">
                <div class="hero-text fade-in-sequence delay-1">
                    <h1>Hello there, <br> Armando here...</h1>
                    <h2>High School Student, Web Developer</h2>
                    <p><i style="padding-right: 10px"class="fi fi-sr-marker"></i>Amantea, IT</p>
                </div>
                <div class="hero-img fade-in-sequence delay-1">
                    <img src="images/Screenshot 2025-05-28 202204.png" alt="Armando's Profile Picture"> 
                </div>
            </div>
        </section>
        
        <section id="about-me-section" class="about-me-section">
            <div class="about-me-container">
                <div class="about-me-content hidden fade-in-left" data-delay="500">
                    <h1>Know me better.</h1>
                    <p>
                         I am a 18 year old student currently studying computer science at ITI A.Monaco in Calabria, Italy. 
                         <br><br>
                         I built this entire website with HTML, CSS and JS. <br> Learning new technologies such as React, Tailwind etc. <br>
                         I also love reading and photography!
                         <br>Enough talking... 
                        
                    </p>
                </div>
                <div class="about-me-works">
                    <div class="linkto-works hidden fade-in-right" data-delay="900">
                        <a href="#works">
                            Let’s see my works... <br>
                            <i class="fi fi-rr-arrow-small-down"></i>
                        </a>
                    </div>
                    <div class="about-me-imgs hidden fade-in-up" data-delay="900">
                        <img src="images/pwa-logo-512.png" alt="Minecraft-Italia's Logo">
                        <img src="images/CRIA.png" alt="Cria Pl's Logo">
                    </div>
                </div>
            </div>
        </section>

        <section id="works"class="works full-screen-section">
            <div class="works-container">
                <div class="works-header">
                    <div class="works-title hidden fade-in-left">
                        <h1>My projects</h1>
                        <p>
                           In these years I have worked in many projects and did a lot of things. <br>
                           Here some of my stand-outs!
                        </p>
                    </div>
                    <div class="skills hidden fade-in-right">
                        <h2>My stack</h2>
                        <ul class="skills-list">
                            <li class="skills-item">
                                <i class="fi fi-sr-html-file"></i> <p>HTML</p>
                            </li>
                            <li class="skills-item">
                                <i class="fi fi-sr-file-css"></i> <p>CSS</p>
                            </li>
                            <li class="skills-item">
                                <i class="fi fi-brands-js"></i> <p>JavaScript</p>
                            </li>
                            <li class="skills-item">
                                <i class="fi fi-bs-react"></i> <p>React JS</p>
                            </li>
                            <li class="skills-item">
                                <i class="fi fi-brands-figma"></i> <p>Design Tool</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="works-cards hidden fade-in-up">
                    <div class="works-card">
                        <img src="images/pwa-logo-512.png" alt="Minecraft Italia's Logo">
                        <h1>Minecraft-Italia</h1>
                        <p>Staff recruitment management and community project coordination for Minecraft-Italia (5M+ views, 50k+ members)</p>
                        <p><i class="fi fi-sr-master-plan"></i>2022-2025</p>
                        <a href="criapl.altervista.org"><i class="fi fi-sr-info"></i>Let's visit</a>
                    </div>
                    <div class="works-card">
                        <img src="images/CRIA.png" alt="">
                        <h1>Cria PL's Website</h1>
                        <p>Developed a fully functional website for CriaPL</p>
                        <p>PROVA PROVA PROVA</p>
                        <a href="criapl.altervista.org"><i class="fi fi-sr-info"></i></i>Let's visit</a>
                    </div>
                    <div class="works-card">
                        <img src="images/intelli_logo.jpg" alt="">
                        <h1>Intelli Learn</h1>
                        <p>Developed a Quiz Game for a school project.</p>
                        <a href="criapl.altervista.org"><i class="fi fi-sr-info"></i>Let's visit</a>

                    </div>
                    <div class="works-card">
                        <img src="images/Screenshot-2025-06-14-184642.webp" alt="A screenshot of my portfolio">
                        <h1>My Portfolio</h1>
                        <p>Developed this portfolio website to showcase my skills and projects.</p>
                        <a href="armandodev.altervista.org"><i class="fi fi-sr-info"></i>Let's visit</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="contacts" class="contacts">
            <div class="contact-container">
                <div class="contact-text-container fade-in-left">
                    <h1>Wanna Talk? <br> Let's do it.</h1>  
                    <p>Send me an email at <a href="mailto:">armando.andreani07@gmail.com</a></p>
                </div>
                <div class="contactslist-container fade-in-up">
                    <ul class="contacts-list">
                        <li class="contacts-list-item"><a href="https://github.com/armandoandreani" target="_blank"><i class="fi fi-brands-github"></i></a></li>
                        <li class="contacts-list-item"><a href="https://x.com/AndreaniAr40309"target="_blank"><i class="fi fi-brands-twitter-alt-circle"></i></a></li>
                        <li class="contacts-list-item"><a href="https://www.instagram.com/aarm.ndo/"target="_blank"><i class="fi fi-brands-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>

    </main>
</body>
</html>