<?php get_header(); ?>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png"
                alt="" class="img-fluid"></a>

        <!-- .navbarStart -->
        <nav id="navbar" class="navbar">
            <ul>
            <?php /* Primary navigation */
                wp_nav_menu( array(
                'menu' => 'primary_menu',
                'depth' => 2,
                'container' => 'nav',
                'container_class' => 'navbar',
                'container_id'=>'navbar',
                'menu_class' => 'navbar',                
                ))
            ?>
            
            <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
             </ul>
               </nav>
            <!-- .navbar -->
    </div>
</header>
<!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container-fluid" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1>Hi! My name is Andrei Sandu</h1>
                <h2>Technology enthusiast web developer</h2>
                <div>
                    <a href="#about" class="btn-get-started scrollto">About me</a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/hero-img.png" class="img-fluid animated"
                    alt="" />
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/about.jpg" class="img-fluid"
                        alt="" />
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                    <h3>
                        Hi, I'm Andrei. I am a passionate web and android app developer.
                    </h3>
                    <p class="fst-italic">
                        I love to build new interesting things and I get my joy from the
                        visual and functional result of my work.
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-check-circle"></i> Web developement fascinates me.
                            Keep wondering what is the next cool thing.
                        </li>
                        <li>
                            <i class="bi bi-check-circle"></i> Android development field is
                            another intriguing field.
                        </li>
                        <li>
                            <i class="bi bi-check-circle"></i> However it all comes together
                            when cyber security is included in the developement process.
                        </li>
                        <li>
                            <i class="bi bi-check-circle"></i> I write about what I do and
                            what I find interesting.
                        </li>
                    </ul>
                    <a href="#" class="read-more">Read More <i class="bi bi-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">
            <div class="row counters justify-content-center">
                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Clients</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="84" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Projects</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="325" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Hours Of Support</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Skills</h2>
                <p>
                    Because I do what I do for a long time I manage to aquire various
                    usefull skills
                </p>
            </div>

            <div class="row gy-4">
                <!-- HTML -->
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-blue">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                </path>
                            </svg>
                            <i class="bx bxl-html5"></i>
                        </div>
                        <h4><a href="">HTML 5</a></h4>
                        <p>
                            I like HTML because it is a simple and straight forward way to
                            write a website structure.
                        </p>
                    </div>
                </div>
                <!-- Java Script -->
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-orange">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                                </path>
                            </svg>
                            <i class="bx bxl-javascript"></i>
                        </div>
                        <h4><a href="">Java Script</a></h4>
                        <p>
                            After having a deep dive in Java it was a bit challenging to get
                            JavaScript and getting arround the concept that everything is an
                            object in JavaScript
                        </p>
                    </div>
                </div>
                <!-- css3 -->
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-pink">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                                </path>
                            </svg>
                            <i class="bx bxl-css3"></i>
                        </div>
                        <h4><a href="">CSS3</a></h4>
                        <p>
                            I am skilled in CSS 3 and also in using productivity enhancing
                            tech like Sass
                        </p>
                    </div>
                </div>
                <!-- php -->
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-yellow">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813">
                                </path>
                            </svg>
                            <i class="bx bxl-php"></i>
                        </div>
                        <h4><a href="">PHP</a></h4>
                        <p>
                            Powerful backend language that is easy to pickup and a bit more
                            challenging to master.
                        </p>
                    </div>
                </div>
                <!-- Android -->
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-green">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572">
                                </path>
                            </svg>
                            <i class="bx bxl-android"></i>
                        </div>
                        <h4><a href="">Android Dev</a></h4>
                        <p>
                            I have a couple of apps builds that got me to understand the main
                            concepts behind android development both in Java and Kotlin
                        </p>
                    </div>
                </div>
                <!-- Google Cloud -->
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-teal">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762">
                                </path>
                            </svg>
                            <i class="bx bxl-google-cloud"></i>
                        </div>
                        <h4><a href="">Google Cloud</a></h4>
                        <p>
                            Beautiful platform that allowed me to test and practice the use of
                            their various types of databases for all of my apps
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->

    <!-- Github Calendar -->
    <section id="portfolio" class="portfolio">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="section-title">
                <h2>Portfolio</h2>
                <p>My GitHub Calendar</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-ms 6">
                    <div class="calendar"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <p>My project sumary</p>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">Web</li>
                        <li data-filter=".filter-card">Android</li>
                        <li data-filter=".filter-web">Misc</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">
                
                <!-- Loopp for web projects -->
            <?php if(have_posts()):
                    while(have_posts()) : the_post(); ?>



                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="<?php the_post_thumbnail_url();?>"
                            class="img-fluid" alt="" />
                        <div class="portfolio-info">
                            <h4><?php the_title(); ?></h4>
                            <p></p>
                        </div>
                        <div class="portfolio-links">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-1.jpg"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i
                                    class="bx bx-plus"></i></a>
                            <a href="<?php echo get_post_meta($post -> ID, 'View on GitHub', true); ?>" title="View on GitHub"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <?php endwhile;
                        endif; ?>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-2.jpg"
                            class="img-fluid" alt="" />
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-2.jpg"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-3.jpg"
                            class="img-fluid" alt="" />
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>App</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-3.jpg"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-4.jpg"
                            class="img-fluid" alt="" />
                        <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-4.jpg"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-5.jpg"
                            class="img-fluid" alt="" />
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-5.jpg"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-6.jpg"
                            class="img-fluid" alt="" />
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>App</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-6.jpg"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-7.jpg"
                            class="img-fluid" alt="" />
                        <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-7.jpg"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-8.jpg"
                            class="img-fluid" alt="" />
                        <div class="portfolio-info">
                            <h4>Card 3</h4>
                            <p>Card</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-8.jpg"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-9.jpg"
                            class="img-fluid" alt="" />
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-9.jpg"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Contact</h2>
                <p>
                    Here are some contact channels ...
                </p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>My Address</h3>
                        <p>Bloxwich, UK</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Me</h3>
                        <p>contact@andreisandu.net</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Dm Me</h3>
                        <p>Ch1llZone#1949</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19379.885714898206!2d-2.0184803532539273!3d52.61506621617164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48709f146ea9f321%3A0x5b6a7b60dc7ae2ef!2sBloxwich%2C%20Walsall!5e0!3m2!1sro!2suk!4v1645100608985!5m2!1sro!2suk"
                        width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <div class="col-lg-6">
                    <form method="post" id="messageForm" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required />
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required />
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required />
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">
                                Your message has been sent. Thank you!
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->
</main>
<!-- End #main -->

<?php get_footer(); ?>