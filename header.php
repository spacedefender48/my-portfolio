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
                    <div class="col-3 clear">

                        <div id="logo">
                            <a href="<?php echo home_url(); ?>" title="Logo">
                                <img src="<?php bloginfo('template_url') ?>/img/logo.png" alt="Logo"> 
                                <p class="logo--initials">PK</p>
                            </a>
                            
                        </div>
                    </div>

                    <?php if (!is_page(43)) { ?>
                        <div class="col-md-9 d-xs-none d-sm-none d-md-block clear" id="main-menu-nav">

                            <ul class="clear">
                                <li>
                                    <a href="#">Intro</a>
                                </li>
                                <li>
                                    <a href="#about-sec">About</a>
                                </li>
                                <li>
                                    <a href="#services-sec">Services</a>
                                </li>
                                <li>
                                    <a href="#history-sec">History</a>
                                </li>
                                <li>
                                    <a href="#portfolio-sec">Portfolio</a>
                                </li>
                                <li>
                                    <a href="#skills-sec">Skills</a>
                                </li>
                                <li>
                                    <a href="#contact-sec">Contact</a>
                                </li>
                            </ul>
                        </div>

                        <div class="d-lg-none col-9 canvas-btn--wrap">
                            <div class="canvas-btn">
                                <div class="top"></div>
                                <div class="middle"></div>
                                <div class="bottom"></div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="row">
                    <div class="d-lg-none col-12">
                        <div class="canvas-menu--wrap">
                            <ul class="canvas-menu">
                                <li>
                                    <a href="#">Intro</a>
                                </li>
                                <li>
                                    <a href="#about-sec">About</a>
                                </li>
                                <li>
                                    <a href="#services-sec">Services</a>
                                </li>
                                <li>
                                    <a href="#history-sec">History</a>
                                </li>
                                <li>
                                    <a href="#portfolio-sec">Portfolio</a>
                                </li>
                                <li>
                                    <a href="#skills-sec">Skills</a>
                                </li>
                                <li>
                                    <a href="#contact-sec">Contact</a>
                                </li>                    
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            
        </nav>


        <?php 
            if (!is_page(43)) {
                ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="details-wrap">
                        <p class="details-wrap--intro">Hi This is</p>
                        <h1 class="details-wrap--name">Plamen Kolarov</h1>
                        <p class="details-wrap--title">Front-end Web Developer</p>
                    </div>

                    <div class="social-icons-wrap">
                        <a href="https://www.facebook.com/profile.php?id=100001624546227" class="social-icons-wrap--icon-link facebook" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://github.com/spacedefender48/" class="social-icons-wrap--icon-link github" target="_blank">
                            <i class="fab fa-github-alt"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/plamen-kolarov-62bbb7141/" class="social-icons-wrap--icon-link linkedin" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://plus.google.com/113944910930564683462" class="social-icons-wrap--icon-link google" target="_blank">
                            <i class="fab fa-google-plus-g"></i>
                        </a>

                    </div>

                    <div class="contact-wrap">
                        <a href="#contact-sec" class="contact-wrap--link">Contact Me</a>
                    </div>

                    <div id="scroll-down-btn" class="scroll-down-wrap">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
            </div>
        </div>

        <?php } else {
                ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="details-wrap">
                        <p class="details-wrap--intro">Hi This is</p>
                        <h1 class="details-wrap--name">Plamen Kolarov</h1>
                        <p class="details-wrap--title">Front-end Web Developer</p>
                    </div>

                    <div class="social-icons-wrap">
                        <a href="https://www.facebook.com/profile.php?id=100001624546227" class="social-icons-wrap--icon-link facebook" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://github.com/spacedefender48/" class="social-icons-wrap--icon-link github" target="_blank">
                            <i class="fab fa-github-alt"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/plamen-kolarov-62bbb7141/" class="social-icons-wrap--icon-link linkedin" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://plus.google.com/113944910930564683462" class="social-icons-wrap--icon-link google" target="_blank">
                            <i class="fab fa-google-plus-g"></i>
                        </a>

                    </div>

                    <div class="contact-wrap">
                        <a href="<?php echo home_url(); ?>" class="contact-wrap--link">Home</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
    </header>