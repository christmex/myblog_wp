<?php get_header(); ?>
    <ul class="circles">
        <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
    </ul>

    <nav id="menu-web">
        <div style="width: 1100px;margin: 0 auto;position: relative;">
            <ul class="menu-web">
                <li class="active"><a href="#home">Home</a></li>
                <li><a href="#skill">Skills</a></li>
                <li><a href="#career">Career</a></li>
                <li><a href="#project">Projects</a></li>
                <li><a href="#whyme">Why Me</a></li>
            </ul>
        </div>
    </nav>
        
    <!-- HEADER -->
    <header id="home" class="page">
        <div class="container">
            <div class="display-flex">
                <div class="hero-desc flex-1">
                    <div class="wow zoomInDown">
                        <h5>Jonathan Christian</h5>
                        <span>JR SOFTWARE ENGINEER AND IT SECURITY ENTHUSIAST</span>
                    </div>
                    <div class="wow fadeInDown">
                        <p>I am a child from a simple family who likes to learn things about technology, such as Cyber Security ,Web Technology and UI/UX design.</p>
                        <a href="https://api.whatsapp.com/send?phone=+6289695590347&text=hi%20jonathan%20christian%2c%20i%20am%20interested%20in%20hiring%20you%2c%20let%27s%20discuss%20for%20more">Let's Chat</a>
                    </div>
                </div>
                <div class="hero-pic flex-1 wow flipInY">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/hero.svg" alt="Jonathan Christian">
                </div>
            </div>
            <h3 class="title-section text-center wow zoomIn">All things <span>Start</span> here</h3>
        </div>
    </header>

    <!-- SKILLS -->
    <section id="skill" class="page">
        <div class="container">
            <div class="wow fadeInDown">
                <h3 class="title-section">My <span>Skills</span></h3>
                <span class="desc-section">I use several programming languages to make programs</span>
            </div>
            <div class="display-flex">
                <div class="programming-lag flex-1 wow fadeInLeft">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/icon-skill/html.svg" alt="html5">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/icon-skill/css.svg" alt="css3">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/icon-skill/js.svg" alt="javascript">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/icon-skill/php.svg" alt="php">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/icon-skill/python.svg" alt="python">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/icon-skill/sql.svg" alt="sql">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/icon-skill/laravel.svg" alt="laravel">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/icon-skill/react.svg" alt="react">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/icon-skill/wordpress.svg" alt="wordpress">
                    <a href="<?= get_template_directory_uri(); ?>/assets/CV.pdf">Download CV</a>
                </div>
                <div class="tools flex-1 wow fadeInRight">
                    <h3 class="title-section">The <span>Tools</span></h3>
                    <span class="desc-section">I can use several tools to help my task</span>
                    <ul>
                        <li class="fi">Figma</li>
                        <li class="ht">Hootsuite</li>
                        <li class="gt">Gtmetrix & pagespeed</li>
                        <li class="se">Selenium</li>
                        <li class="ga">Google Analytics</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CAREER -->
    <section id="career" class="page">
        <div class="container">
            <div class="display-flex text-center">
                <div class="title flex-1">
                    <div class="wow zoomInDown">
                        <h3 class="title-section">Career <span>Summary</span></h3>
                        <span class="desc-section">My work experience before I became a freelancer</span>
                    </div>
                </div>    
                <div class="img wow fadeInDown">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/career.svg" alt="Jonathan Christian">
                </div>
            </div>
            <div class="career-boxes">
                <div class="display-flex">
                    <div class="career-box wow fadeInUp career-box-fly-1">
                        <h5 class="title">Jr Software Engineer</h5>
                        <span class="place">Terkini ID - South Sulawesi</span>
                        <span class="date">2019 - 2020</span>
                        <ul>
                            <li>Designs and creates software for company</li>
                            <li>Improve system speed and security</li>
                            <li>Modifies code to fix errors integrate social media with hootsuite</li>
                            <li>Integrate Program with Google Analytics</li>
                            <li>Create and develop wordpress templates</li>
                        </ul>
                    </div>
                    <div class="career-box wow fadeInUp career-box-fly-2">
                        <h5 class="title">Jr Software Engineer</h5>
                        <span class="place">BPSDMD - Central Java(Internship)</span>
                        <span class="date">2018 - 2018</span>
                        <ul>
                            <li>Designs and creates software for BPSDMD</li>
                            <li>Reports bug based on the outcome of QA test cycles.</li>
                            <li>Modifies code to fix errors</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="project" class="text-center page" >
        <div class="container">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/project.svg" alt="" class="wow zoomInDown">
            <div class="wow zoomInDown">
                <h3 class="title-section"><span>Selected Projects</span></h3>
                <span class="desc-section">I make a few design for my own projects</span>
            </div>

            <div class="project-show">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/projects/project1.png" alt="">
            </div>
        </div>
    </section>

    <section id="partner">
        <div class="container text-center">
            <h3 class="title-section">I'm <span>happy</span> to have <span>collaborated</span> with some <span>great clients</span></h3>
            <ul>
                <li><img src="<?= get_template_directory_uri(); ?>/assets/img/partner/logo-davestpay.png" alt=""></li>
                <li><img src="<?= get_template_directory_uri(); ?>/assets/img/partner/logo-bpsdmd.png" alt=""></li>
                <li><img src="<?= get_template_directory_uri(); ?>/assets/img/partner/logo-terkini.png" alt=""></li>
                <li><img src="<?= get_template_directory_uri(); ?>/assets/img/partner/logo-basic.png" alt=""></li>
            </ul>
        </div>
    </section>

    <section id="whyme" class="page">
        <div class="container">
            <div class="wow fadeInDown">
                <h3 class="title-section">Why <span>Me</span></h3>
                <span class="desc-section">Here are some considerations why you should hire me</span>
            </div>
            <div class="why-boxes display-flex">
                <div class="why-box one wow fadeInUp">
                    <h5>Guarantee</h5>
                    <span>In order to maintain client trust, I always ensure that projects are made optimally and according to client needs</span>
                </div>

                <div class="why-box three wow fadeInDown">
                    <h5>Fast</h5>
                    <span>Speed is the main thing on the website, for that I always do tests to increase web speed</span>
                </div>

                <div class="why-box two wow fadeInUp">
                    <h5>Secure</h5>
                    <span>Every time I do a project I always test security of every application that I work on</span>
                </div>
            </div>
            <div class="hireme text-right wow fadeIn">
                <a href="https://api.whatsapp.com/send?phone=+6289695590347&text=hi%20jonathan%20christian%2c%20i%20am%20interested%20in%20hiring%20you%2c%20let%27s%20discuss%20for%20more&source=&data=&app_absent=">Let's work together</a>
            </div>
            <hr class="cool">
        </div>
    </section>

    <footer>
        <div class="container text-center">
            <div class="sosmed">
                <a href="https://www.linkedin.com/in/christmex/" class="linkedin" target="_blank"></a>
                <a href="http://instagram.com/christmex" class="ig" target="_blank"></a>
                <a href="mailto:christmex@yahoo.com" class="email" target="_blank"></a>
            </div>
            <div class="copyright">
                Made with love by me <span>&copy;</span> Jonathan Christian
            </div>
        </div>
    </footer>

<?php get_footer(); ?>