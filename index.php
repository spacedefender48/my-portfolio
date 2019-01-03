<?php get_header(); ?>



    <section id="content">
        <section id="about-sec" class="about-wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title">About Me</h2>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-md-6 col-xs-12 animation-element slide-left">
                        <div class="portrait-wrap">
                            <img src="<?php bloginfo('template_url') ?>/img/portrait.jpg" alt="Portrait Image">
                        </div>
                    </div>

                    <div class="col-md-6 col-xs-12 animation-element slide-right">
                        <div class="desc-wrap">
                            <h3 class="desc-wrap--title">Hi guys!</h3>
                            <p class="desc-wrap--text">
                                I am Plamen Kolarov, a front-end developer from Varna, Bulgaria. As a front-end developer, I create modern websites that are of high quality and at the same time responsive for many types of devices. I can create a website from scratch or with WordPress as content management system.
                            </p>
                            <p class="desc-wrap--text">
                                My passion for programming started during my time in university. In 2015 I graduated from the University of Sofia 'St. Kliment Ohridski' with a Bachelor's degree in Software Engineering. Since then, I am always keen to learn the latest technologies in web development that will make both the development of the site and the final user experience easier.
                            </p>
                            <p class="desc-wrap--text">
                                I am always open to new job opportunities. Feel free to check my CV below. 
                            </p>

                            <div class="desc-wrap--link-wrap">
                                <a href="<?php echo wp_get_attachment_url( 4 ); ?>" class="desc-wrap--link">Download CV</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services-sec" class="services-sec">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title">What I do</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-xs-12 animation-element slide-left">
                        <div class="service-wrap">
                            <div class="service-wrap--icon">
                                <i class="fas fa-globe"></i>
                            </div>

                            <h2 class="service-wrap--title">Quality websites</h2>

                            <p class="service-wrap--desc">
                                All website that I make are made with high quality, as quality is a must when I work on projects
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-xs-12 animation-element slide-left">
                        <div class="service-wrap">
                            <div class="service-wrap--icon">
                                <i class="fab fa-wordpress"></i>
                            </div>

                            <h2 class="service-wrap--title">WordPress websites</h2>

                            <p class="service-wrap--desc">
                                I develop and maintain sites on WordPress, like blog and news sites.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-xs-12 animation-element slide-right">
                        <div class="service-wrap">
                            <div class="service-wrap--icon">
                                <i class="fas fa-layer-group"></i>
                            </div>

                            <h2 class="service-wrap--title">PSD to HTML</h2>

                            <p class="service-wrap--desc">
                                I can also create websites by converting PSD files to HTML with high accuracy
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-xs-12 animation-element slide-right">
                        <div class="service-wrap">
                            <div class="service-wrap--icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>

                            <h2 class="service-wrap--title">Responsive websites</h2>

                            <p class="service-wrap--desc">
                                All website are responsive for desktop and mobile, from smallest to largest devices
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-xs-12 animation-element slide-left">
                        <div class="service-wrap">
                            <div class="service-wrap--icon">
                                <i class="fas fa-cogs"></i>
                            </div>

                            <h2 class="service-wrap--title">Customizations</h2>

                            <p class="service-wrap--desc">
                                Making modifications to sites is needed in order to keep up with latest trends
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-xs-12 animation-element slide-left">
                        <div class="service-wrap">
                            <div class="service-wrap--icon">
                                <i class="fas fa-code"></i>
                            </div>

                            <h2 class="service-wrap--title">Clean code</h2>

                            <p class="service-wrap--desc">
                                My code is clean and have a clear naming convention. Thus the code is easier to modify and add new features
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-xs-12 animation-element slide-right">
                        <div class="service-wrap">
                            <div class="service-wrap--icon">
                                <i class="fas fa-user-friends"></i>
                            </div>

                            <h2 class="service-wrap--title">Team player</h2>

                            <p class="service-wrap--desc">
                                I am a team player and can collaborate in small or big teams for projects
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-xs-12 animation-element slide-right">
                        <div class="service-wrap">
                            <div class="service-wrap--icon">
                                <i class="fas fa-comments"></i>
                            </div>

                            <h2 class="service-wrap--title">Fast communication</h2>

                            <p class="service-wrap--desc">
                                I can answer requests and questions within 24 hours
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="history-sec" class="history-sec">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-xs-12 col-frame">
                        <div class="history-wrap">
                            <div class="title-wrap">
                                <div class="title-wrap--icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <h2 class="title-wrap--text">Education</h2>
                            </div>

                            <div class="post-wrap">
                                <h3 class="post-wrap--title">Bachelor degree 'Software Engineering'</h3>
                                <p class="post-wrap--date">2011 - 2015</p>
                                <p class="post-wrap--desc">
                                    University of Sofia 'St. Kliment Ohridski'
                                </p>
                            </div>

                            <div class="post-wrap">
                                <h3 class="post-wrap--title">High School education</h3>
                                <p class="post-wrap--date">2007 - 2011</p>
                                <p class="post-wrap--desc">
                                    IV Language school 'Frederic Joliot-Curie', Varna. Primary language - french
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xs-12 col-frame">
                        <div class="history-wrap">
                            <div class="title-wrap">
                                <div class="title-wrap--icon">
                                    <i class="fas fa-award"></i>
                                </div>
                                <h2 class="title-wrap--text">Certificates</h2>
                            </div>

                            <div class="post-wrap">
                                <h3 class="post-wrap--title">Front-end Fundamentals, Advance Academy in Varna</h3>
                                <p class="post-wrap--date">Oct 2017 - Dec 2017</p>
                                <p class="post-wrap--desc">
                                    In this course I learned from the grounds up everything that was needed to make a website. This includes HTML, CSS, JavaScript, jQuery, Bootstrap.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio-sec">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2 class="portfolio-sec--title">Portfolio</h2>
                    </div>
                </div>

                <div class="row">
                    <div id="portfolio-slider" class="col-12 owl-carousel">
                        <div class="item">
                            <div class="portfolio-wrap">

                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio-wrap blue">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills-sec" class="skills-sec">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2 class="skills-sec--title">My skills</h2>
                    </div>
                </div>  

                <div class="row">
                    <div class="col-sm-6 col-12 category-wrap">
                        <h3 class="skills-title">Front-end</h3>
                        <ul class="skills-list">
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/img/skills/html5.png" alt="HTML5" title="HTML5">
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/img/skills/css3.png" alt="CSS3" title="CSS3">
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/img/skills/js.png" alt="JavaScript" title="JavaScript">
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/img/skills/sass.png" alt="SASS" title="SASS">
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-12 category-wrap">
                        <h3 class="skills-title">Back-end</h3>
                        <ul class="skills-list">
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/img/skills/php.png" alt="PHP" title="PHP">
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/img/skills/mysql.png" alt="MySQL" title="MySQL">
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-12 category-wrap">
                        <h3 class="skills-title">Frameworks</h3>
                        <ul class="skills-list">
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/img/skills/bootstrap.png" alt="Bootstrap" title="Bootstrap">
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/img/skills/jquery.png" alt="jQuery" title="jQuery">
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/img/skills/wordpress.png" alt="WordPress" title="WordPress">
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-12 category-wrap">
                        <h3 class="skills-title">Tools</h3>
                        <ul class="skills-list">
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/img/skills/git.png" alt="Git" title="Git">
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/img/skills/github.png" alt="GitHub" title="GitHub">
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url') ?>/img/skills/visual-studio.png" alt="Visual Studio Code" title="Visual Studio Code">
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <section class="contact-form-wrap" id="contact-sec" data-parasssllax="scroll" data-image-src="<?php bloginfo('template_url') ?>/img/bg.jpg">

            <div class="overlay-background"></div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-form-wrap--title">Get in touch</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="form-wrap">
                            <form action="#" method="GET" id="contact-form">
                                <div class="input-frame">
                                    <input type="text" name="f_name" placeholder="Name" class="field-text" id="name_field" required>

                                    <p class="error-text--name">REQUIRED</p>
                                </div>

                                <div class="input-frame">
                                    <input type="email" name="f_email" placeholder="Email" class="field-text" id="email_field" required>

                                    <p class="error-text--email">REQUIRED</p>
                                </div>

                                <div class="input-frame">
                                    <input type="text" name="f_subject" placeholder="Subject" class="field-text" id="subject_field" required>

                                    <p class="error-text--subject">REQUIRED</p>
                                </div>

                                <div class="input-frame">
                                    <textarea name="f_message" placeholder="Your Message" class="field-area" id="message_field" required></textarea>
                                    <p class="error-text--message">REQUIRED</p>
                                </div> 

                                <input type="submit" name="f_submit" value="Send Message" class="submit-btn">

                                <p class="error-text--message" id="ajax-text"></p>

                                <?php 
                                    wp_nonce_field('send_email', 'form_email_nonce');
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="dialog" class="my-dialog" title="Sent email">
            I'm a dialog
        </div>
    </section>


<?php get_footer();?>