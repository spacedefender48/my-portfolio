<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plamen Kolarov | Front End Developer</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>



    <header class="site-header" data-parallax="scroll" data-image-src="<?php bloginfo('template_url') ?>/img/bg.jpg">

        <div class="overlay-background"></div>

        <nav id="main-nav">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 clear">

                        <div id="logo">
                            <a href="#" title="Logo">
                                <img src="<?php bloginfo('template_url') ?>/img/logo.png" alt="Logo"> 
                                <p class="logo--initials">PK</p>
                            </a>
                            
                        </div>

                        <ul class="clear">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#about-sec">About</a>
                            </li>
                            <li>
                                <a href="#services-sec">Services</a>
                            </li>
                            <li>
                                <a href="#history-sec">Resume</a>
                            </li>
                            <li>
                                <a href="#">Portfolio</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>


        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <div class="portrait-frame">
                        <img src="<?php //bloginfo('template_url') ?>/img/portrait.jpg" alt="Plamen's portrait">
                    </div> -->

                    <div class="details-wrap">
                        <p class="details-wrap--intro">Hi This is</p>
                        <h1 class="details-wrap--name">Plamen Kolarov</h1>
                        <p class="details-wrap--title">Front-end Web Developer</p>
                    </div>

                    <div class="social-icons-wrap">
                        <a href="#" class="social-icons-wrap--icon-link facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icons-wrap--icon-link github">
                            <i class="fab fa-github-alt"></i>
                        </a>
                        <a href="#" class="social-icons-wrap--icon-link linkedin">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-icons-wrap--icon-link google">
                            <i class="fab fa-google-plus-g"></i>
                        </a>

                    </div>

                    <div class="contact-wrap">
                        <a href="#" class="contact-wrap--link">Contact Me</a>
                    </div>

                    <div id="scroll-down-btn" class="scroll-down-wrap">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>