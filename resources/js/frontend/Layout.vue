<template>       
    <!-- Loader -->

        
    <div class="loader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
    </div>

        <!-- Header -->

        <header class="navbar navbar-responsive">
        <div class="container">
            <a href="#" class="brand js-target-scroll helvica-font header-logo">
                <img width="200" style="width: 200px;margin-top: -15px;" src="/img/legacy-ventures-logo.png"  alt="Legacy Ventures Malta">
            </a>

            <!-- Navigation Desctop -->

            <nav class="nav nav-desctop hidden-xs hidden-sm">
            <ul class="nav-desctop-list inter-font">
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <!-- <li><a href="#portfolio">Portfolio</a></li> -->
                <li><a href="#team">Team</a></li>
                <li><a href="#clients">Clients</a></li>
                <li><a href="#careers">Careers</a></li>
            </ul>
            </nav>

            <!-- Navigation Mobile -->

            <button type="button" class="navbar-toggle collapsed  hidden-md hidden-lg" data-toggle="collapse" data-target="#nav-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>

            <nav class="nav nav-mobile">
            <div class="collapse" id="nav-collapse"> 
                <ul class="nav-mobile-list inter-font">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <!-- <li><a href="#portfolio">Portfolio</a></li> -->
                    <li><a href="#team">Team</a></li>
                    <li><a href="#clients">Clients</a></li>
                    <li><a href="#careers">Careers</a></li>
                </ul>
            </div>
            </nav> 
        </div>
        </header>
        
        <!-- Home -->
            
        <main class="main" id="home" style=" width: 100vw;height: 100vh;">
        
        <!-- <div class="arrow-left hidden-xs"></div>
        <div class="arrow-right hidden-xs"></div> -->

        <!-- Start revolution slider -->
        <div class="overlay">
                <!-- <i class="fa fa-times close-icon" @click="closeVideo"></i> -->
                <!-- <div class="popup"> -->
                    <iframe 
                        src="https://player.vimeo.com/video/833409461?h=32f88f374?rel=0&autoplay=1&loop=1&background=1" 
                        frameborder="0" 
                        allow="autoplay; fullscreen" 
                        allowfullscreen
                        webkitallowfullscreen
                        mozallowfullscreen
                        muted
                        style="padding: 0px; background: transparent;">
                    </iframe>
                    <div class="bg-pattern" style="background-image: url('/img/pattern.png');"></div>
                <!-- </div> -->
        </div>
        <!-- <div class="rev_slider_wrapper">
            
            <div id="rev_slider" class="rev_slider fullscreenbanner">
            <ul>


                <li  data-transition="incube-horizontal" data-masterspeed="1000" data-fsmasterspeed="1000">

                <img src="/img/header-1.jpg"  alt="Luxury apartment building in Malta developed by Legacy Ventures Malta" data-bgposition="center center" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="7">

                <div class="tp-caption tp-shape tp-shape-mask tp-shapewrapper" 
                    data-x="center" data-hoffset="" 
                    data-y="left" data-voffset="" 
                    data-basealign="slide" 
                    data-width="['14000']"
                    data-height="['14000']"
                    data-transform_idle="o:1;"
                    data-transform_in="opacity:0;s:1000;s:1000s:1000;e:Power3.easeInOut;" 
                    data-transform_out="opacity:0;s:1000;s:1000s:1000;e:Power3.easeInOut;"  
                    data-start="0" 
                    data-responsive_offset="on" style="background-color:rgba(10,10,10,0.5);"></div>

                </li>

                <li  data-transition="incube-horizontal" data-masterspeed="1000" data-fsmasterspeed="1000">

                    <img src="/img/header-2.jpg"  alt="Luxury apartment building in Malta developed by Legacy Ventures Malta" data-bgposition="center center" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="7">

                    <div class="tp-caption tp-shape tp-shape-mask tp-shapewrapper" 
                        data-x="center" data-hoffset="" 
                        data-y="left" data-voffset="" 
                        data-basealign="slide" 
                        data-width="['14000']"
                        data-height="['14000']"
                        data-transform_idle="o:1;"
                        data-transform_in="opacity:0;s:1000;s:1000s:1000;e:Power3.easeInOut;" 
                        data-transform_out="opacity:0;s:1000;s:1000s:1000;e:Power3.easeInOut;"  
                        data-start="0" 
                        data-responsive_offset="on" style="background-color:rgba(10,10,10,0.5);"></div>
                </li>

                <li  data-transition="incube-horizontal" data-masterspeed="1000" data-fsmasterspeed="1000">

                    <img src="/img/header-3.jpg"  alt="Luxury apartment building in Malta developed by Legacy Ventures Malta" data-bgposition="center center" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="7">
                    
                    <div class="tp-caption tp-shape tp-shape-mask tp-shapewrapper" 
                        data-x="center" data-hoffset="" 
                        data-y="left" data-voffset="" 
                        data-basealign="slide" 
                        data-width="['14000']"
                        data-height="['14000']"
                        data-transform_idle="o:1;"
                        data-transform_in="opacity:0;s:1000;s:1000s:1000;e:Power3.easeInOut;" 
                        data-transform_out="opacity:0;s:1000;s:1000s:1000;e:Power3.easeInOut;"  
                        data-start="0" 
                        data-responsive_offset="on" style="background-color:rgba(10,10,10,0.5);"></div>
                </li>
            </ul>
            </div>
            
        </div> -->
        <!-- <div class="video-lv">
                <h1 class="video-title-lv">
                    Legacy Ventues Malta
                </h1>
                <h2 class="video-subtitle-lv">
                    Lorem ipsum dolor sit amet.
                </h2>
                <button class="video-button-lv" @click="openVideo">
                    <div class="icon">
                        <i class="fa fa-play"></i>
                    </div>
                    <div>
                        <span>
                            WHO WE ARE
                        </span>
                    </div>
                </button>
        </div> -->
        
        <div class="mouse-helper">
            <span>Scroll Down</span>
            <i class="icon ion-mouse"></i>
        </div>
        </main>

        <div class="content"> 

        <!-- Services -->

        <section id="services" class="features bg-dark section">
            <div class="container services-section">
                <!-- <div class="row-base row"> 
                    <h2 class="section-title text-center col-md-12 inter-font">
                        Lorem ipsum dolor
                    </h2>
                </div> -->
                <div class="row-base row">
                    <div class="col-base col-feature col-sm-6 col-md-4 wow fadeInUp">
                        <!-- <div class="media-left"><img src="/img/icons/painting.svg" style="margin-top: 2.5vh;" width="56" height="56" alt="Painting and plastering service by Legacy Ventures Malta"></div> -->
                        <div class="media-right">
                            <h4 class="text-white service-title text-center inter-font">GENERAL CONTRACING</h4>
                            <p class="text-center inter-font">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper lacus quis tincidunt imperdiet. Nulla.</p>
                        </div>
                    </div>
                    <div class="col-base col-feature col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.4s" >
                        <!-- <div class="media-left"><img src="/img/icons/tiling.svg" style="margin-top: 2.5vh;" width="56" height="56" alt="Tiling service by Legacy Ventures Malta"></div> -->
                        <div class="media-right">
                            <h4 class="text-white service-title text-center inter-font">PROJECT MANAGEMENT</h4>
                            <p class="text-center inter-font">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper lacus quis tincidunt imperdiet. Nulla.</p>
                        </div>
                    </div>
                    <div class="clearfix visible-sm"></div>
                    <div class="col-base col-feature col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                        <!-- <div class="media-left"><img src="/img/icons/gypsum.svg" style="margin-top: 2.5vh;" width="56" height="56" alt="Gypsum service by Legacy Ventures Malta"></div> -->
                        <div class="media-right">
                            <h4 class="text-white service-title text-center inter-font">OWNER REPRESENTATION</h4>
                            <p class="text-center inter-font">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper lacus quis tincidunt imperdiet. Nulla.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="solutions section bg-dark" style="padding-top: 0;padding-bottom: 0;">
            <div class="solutions-section">
                <!-- <div class="solutions-title-div">
                    <h2 class="section-title inter-font">Our Services</h2>
                </div> -->
                <div class="solutions-rows">
                    <div class="solutions-row">
                        <div class="solutions-image" style="background-image:url('/img/portfolio-1.jpg');filter:grayscale(90%);"></div>
                        <div class="solutions-col">
                            <div class="solutions-text">
                                <h3 class="inter-font">
                                    PLASTERING & PAINTING
                                </h3>
                                <p class="inter-font">
                                    We excel in the art of plastering. With a focus on protecting and preparing your ceilings, walls, and structures, we ensure a solid foundation before adding exquisite moulding and decorative elements to enhance both the interior and exterior of your building. Our expertise lies in providing the perfect finishing touches that bring your vision to life.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="solutions-row">
                        <div class="solutions-image" style="background-image:url('/img/portfolio-2.jpg');filter:grayscale(90%);"></div>
                        <div class="solutions-col">
                            <div class="solutions-text">   
                                <h3 class="inter-font">
                                    TILING WORKS
                                </h3>
                                <p class="inter-font">
                                    With our expertise and meticulous craftsmanship, we specialize in providing professional tile installation services for floors, walls, bathrooms, facades, and stunning feature walls, using tiles of any size and material to bring your vision to life. Our skilled team ensures precise placement and flawless finishes, transforming your space into a work of art.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="solutions-row">
                        <div class="solutions-image" style="background-image:url('/img/portfolio-3.jpg');filter:grayscale(90%);"></div>
                        <div class="solutions-col">
                            <div class="solutions-text"> 
                                <h3 class="inter-font">
                                    GYPSUM BORAD INSTALLATION
                                </h3>
                                <p class="inter-font">
                                    This modern technique is being used as an effective method to divide rooms according to a client's  requirements. We ensure a neat finish and make use of a high European standard of quality materials to ensure durability and longevity of your investment. Gypsum boards used are also fire rated and resistant to humidity. 
                                </p>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Portfolio -->

        <!-- <section id="portfolio" class="porftolio">
            <div class="isotope js-gallery">
            <div class="isotope-item livingroom">
                <a href="/img/portfolio-1.jpg" title="Portfolio Image 1">
                <figure class="showcase-item">
                    <div class="showcase-item-thumbnail"><img alt="Legacy Ventures Malta Portfolio 1" src="/img/portfolio-1.jpg"></div>
                    <figcaption class="showcase-item-hover hover-dark">
                    <div class="showcase-item-info">
                        <div class="showcase-item-title inter-font">Portfolio Image 1</div>
                        <i class="ion-ios-plus-empty"></i>
                    </div>
                    </figcaption>
                </figure>
                </a>
            </div>  
            <div class="isotope-item kitchen">
                <a href="/img/portfolio-2.jpg" title="Portfolio Image 2">
                <figure class="showcase-item">
                    <div class="showcase-item-thumbnail"><img alt="Legacy Ventures Malta Portfolio 2" src="/img/portfolio-2.jpg" style="filter: grayscale(90%);"></div>
                    <figcaption class="showcase-item-hover hover-dark">
                    <div class="showcase-item-info">
                        <div class="showcase-item-title inter-font">Portfolio Image 2</div>
                        <i class="ion-ios-plus-empty"></i>
                    </div>
                    </figcaption>
                </figure>
                </a>
            </div>
            <div class="isotope-item terrace">
                <a href="/img/portfolio-3.jpg" title="Portfolio Image 3">
                <figure class="showcase-item">
                    <div class="showcase-item-thumbnail"><img alt="Legacy Ventures Malta Portfolio 3" src="/img/portfolio-3.jpg" style="filter: grayscale(90%);"></div>
                    <figcaption class="showcase-item-hover hover-dark">
                    <div class="showcase-item-info">
                        <div class="showcase-item-title inter-font">Portfolio Image 3</div>
                        <i class="ion-ios-plus-empty"></i>
                    </div>
                    </figcaption>
                </figure>
                </a>
            </div> 
            <div class="isotope-item kitchen">
                <a href="/img/portfolio-4.jpg" title="Portfolio Image 4">
                <figure class="showcase-item">
                    <div class="showcase-item-thumbnail"><img alt="Legacy Ventures Malta Portfolio 4" src="/img/portfolio-4.jpg" style="filter: grayscale(90%);"></div>
                    <figcaption class="showcase-item-hover hover-dark">
                    <div class="showcase-item-info">
                        <div class="showcase-item-title inter-font">Portfolio Image 4</div>
                        <i class="ion-ios-plus-empty"></i>
                    </div>
                    </figcaption>
                </figure>
                </a>
            </div>
            <div class="isotope-item terrace">
                <a href="/img/portfolio-5.jpg" title="Portfolio Image 5">
                <figure class="showcase-item">
                    <div class="showcase-item-thumbnail"><img alt="Legacy Ventures Malta Portfolio 5" src="/img/portfolio-5.jpg" style="filter: grayscale(90%);"></div>
                    <figcaption class="showcase-item-hover hover-dark">
                    <div class="showcase-item-info">
                        <div class="showcase-item-title inter-font">Portfolio Image 5</div>
                        <i class="ion-ios-plus-empty"></i>
                    </div>
                    </figcaption>
                </figure>
                </a>
            </div> 
            </div>
        </section> -->

        <!-- Team -->
        <section id="team" class="team section pb-0" style="padding-top: 4em;">
                <div class="container">
                <div class="row">
                    <header class="text-center col-md-12">
                    <h2 class="section-title inter-font">Meet the team</h2>
                    <p class="section-lead inter-font">Our people are the key to our success. Legacy Ventures has built a culture of focused and passionate people who, together, collaborate to deliver quality outcomes for our partners and clients.</p>
                    </header>
                </div>
                </div>
                <div class="section-content">
                <div class="clearfix">
                    <div class="col-team col-sm-6 col-lg-3">
                    <figure class="team-profile">
                        <img alt="Legacy Ventures Malta" src="/img/8.jpg">
                        <figcaption class="team-caption white">
                        <div class="team-meta">
                            <strong class="team-name inter-font">Martin Azzopardi</strong>
                            <span class="team-spec inter-font">Managing Director</span>
                        </div>
                        <ul class="team-social social-list">
                            <li>
                                <a id="envelope-icon" href="mailto:martin@legacyventuresmalta.com" class="fa fa-envelope"></a>
                                &nbsp;
                                <a id="team-member-email" class="inter-font" href="mailto:martin@legacyventuresmalta.com">martin@legacyventuresmalta.com</a>
                            </li>
                        </ul>
                        </figcaption>
                    </figure>
                    </div>
                    <div class="col-team col-sm-6 col-lg-3">
                    <figure class="team-profile">
                        <img alt="Legacy Ventures Malta" src="/img/6.jpg">
                        <figcaption class="team-caption white">
                        <div class="team-meta">
                            <strong class="team-name inter-font">Etienne Pavia</strong>
                            <span class="team-spec inter-font">Project Manager</span>
                        </div>
                        <ul class="team-social social-list">
                            <li>
                                <a id="envelope-icon" href="mailto:etienne@legacyventuresmalta.com" class="fa fa-envelope"></a>
                                &nbsp;
                                <a id="team-member-email" class="inter-font" href="mailto:etienne@legacyventuresmalta.com">etienne@legacyventuresmalta.com</a>
                            </li>
                        </ul>
                        </figcaption>
                    </figure>
                    </div>
                    <div class="col-team col-sm-6 col-lg-3">
                    <figure class="team-profile">
                        <img alt="Legacy Ventures Malta" src="/img/11.jpg">
                        <figcaption class="team-caption white">
                        <div class="team-meta">
                            <strong class="team-name inter-font">Gianluca Vella Valletta</strong>
                            <span class="team-spec inter-font">Project Manager</span>
                        </div>
                        <ul class="team-social social-list">
                            <li>
                                <a id="envelope-icon" href="mailto:gianluca@legacyventuresmalta.com" class="fa fa-envelope"></a>
                                &nbsp;
                                <a id="team-member-email" class="inter-font" href="mailto:gianluca@legacyventuresmalta.com">gianluca@legacyventuresmalta.com</a>
                            </li>
                        </ul>
                        </figcaption>
                    </figure>
                    </div>
                    <div class="col-team col-sm-6 col-lg-3">
                    <figure class="team-profile">
                        <img alt="Legacy Ventures Malta" src="/img/1.jpg">
                        <figcaption class="team-caption white">
                        <div class="team-meta">
                            <strong class="team-name inter-font">Lorraine Pavia</strong>
                            <span class="team-spec inter-font">Office Administrator</span>
                        </div>
                        <ul class="team-social social-list">
                            <li>
                                <a id="envelope-icon" href="mailto:lorraine@legacyventuresmalta.com" class="fa fa-envelope"></a>
                                &nbsp;
                                <a id="team-member-email" class="inter-font" href="mailto:lorraine@legacyventuresmalta.com">lorraine@legacyventuresmalta.com</a>
                            </li>
                        </ul>
                        </figcaption>
                    </figure>
                    </div>
                </div>
                </div>
            </section>
        

        <!-- Clients -->

        <section id="clients" :class="vacancies.length ? 'clients section bg-black' : 'clients section bg-dark'" >
            <div class="container">
                <div class="row">
                <header class="text-center col-md-12">
                <h2 class="section-title inter-font">Testimonials</h2>
                <p class="section-lead inter-font">Our team of experts has competences of different branches and specializations.</p>
                </header>
                </div>
            </div>
            <div class="section-content">
                <div class="container-fluid">
                <div class="col-md-9" style="margin-left: 15%;margin-right: 15%;">
                    <div class="clients-wrapper">
                    <div class="client-carousel js-client-carousel">
                        <div class="client">
                        <span class="quote">"</span>
                        <p class="client-text inter-font">
                            I was impressed by the efficiency and attention to detail of Legacy during my tiling project. The team completed the project on time and within the discussed budget. I highly recommend them for finishing services.</p>
                        <span class="h5 client-name inter-font">Steve Caruana</span>
                        </div>
                        <div class="client">
                        <span class="quote">"</span>
                        <p class="client-text inter-font">
                            I worked with Legacy Ventures for gypsum board installation, plastering and painting of my new shop in St.Julians. The project was handled from start to finish and the quality workmanship and cleanliness was exceptional.</p>
                        <span class="h5 client-name inter-font">Silvan Mifsud</span>
                        </div>
                        <div class="client">
                        <span class="quote">"</span>
                        <p class="client-text inter-font">
                            Great guys and a very simple and transparent process from start to finish. I have no problem recommending these guys and their brand and will not hesitate to use them again. Thanks for a professional job. Thanks gents, Phil.</p>
                        <span class="h5 client-name inter-font">Phillip Hogan</span>
                        </div>
                        <div class="client">
                        <span class="quote">"</span>
                        <p class="client-text inter-font">
                            I contacted legacy for a bathroom renovation. Martin contacted me and made an appointment to visit. He gave us a quote, which my wife and myself agreed with. The job was done quickly and they even cleaned up after themselves.</p>
                        <span class="h5 client-name inter-font">Michael Scicluna</span>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>


        <!-- news -->

        <section id="careers" class="news section" v-if="vacancies.length">
            <div class="container">
            <div class="row">
                <header class="text-center col-md-10 col-md-offset-1">
                    <h2 class="section-title inter-font">Careers</h2>
                    <p class="section-lead inter-font">Legacy Ventures wouldn't be the business we are today without our people. We're proud to support our members with an engaging workplace where leadership and initiative are rewarded.</p>
                </header>
            </div>
            </div>
            <div class="section-content">
                <div class="container">
                    <div class="row row-news">
                        <div class="col-news col-md-4" v-for="(vacancy, index) in vacancies.slice(0, 3)" :key="vacancy.id">
                            <div class="col-news-wrapper">
                                <img alt="" v-bind:src="'/img/' +vacancy.image">
                                <div class="col-news-content">
                                <span class="col-news-date">
                                    {{formatDate(vacancy.created_at)}}
                                </span>
                                <h4 class="col-news-title">{{vacancy.name}}</h4>
                                <p>{{vacancy.description}}</p>
                                <br><br>
                                <a data-toggle="modal" class="wow swing inter-font" href="#request">Contact us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </section>

        <!-- Banner -->

        <section class="promo section bg-black" style="padding-top: 9.1em !important;">
            <div class="container">
                <h2 class="careers-title inter-font">Our clients are the heart of our business, which is why we go the extra mile to build lasting relationships.</h2>
                    <p class="section-lead inter-font">Contact us to schedule an appointment with one of our project managers.</p><br>
            <a href="#request" data-toggle="modal" class="btn btn-dark wow swing inter-font">Let's talk</a>
            </div>
        </section>


        <!-- Footer -->

        <footer id="footer" class="footer">     
            <div class="container">
            <div class="row-base row">
                <div class="brand-info col-base col-sm-6 col-md-4" style="margin-top: 20px;">
                <a href="#top" class="brand js-target-scroll helvica-font footer-logo">
                    <img width="330" style="width: 330px;" src="/img/legacy-ventures-logo.png"  alt="Legacy Ventures Malta">
                </a>
                <p class="inter-font">we are dedicated to providing high-quality finished for construction projects, from commercial buildings to residential homes.</p>
                </div>

                <div class="col-contacts col-base col-sm-6 col-md-4 col-md-offset-1">
                <!-- <a href="tel:88005553535" class="phone">+8 800 555 35 35</a><br> -->
                    <a href="mailto:info@legacyventuresmalta.eu" class="email inter-font">Info@legacyventuresmalta.eu</a>
                    <br>
                    <ul class="social-list" style="margin-top: 15px;">
                            <li><a style="font-size: 1.5em;" href="https://www.facebook.com/legacyventuresmalta" class="fa fa-facebook"></a></li>
                            <li><a style="font-size: 1.5em;" href="https://instagram.com/legacyventuresmalta?igshid=YmMyMTA2M2Y=" class="fa fa-instagram"></a></li>
                    </ul>  
                </div>
                <div class="col-subscribe col-base col-sm-6 col-md-3 mobile-top-spacing">
                <div class="subscribe-title inter-font">Subscribe to our newsletter</div>
                <form class="subscribe-form js-subscribe-form" @submit.prevent="subscribe">
                    <div class="input-group">
                    <input id="mc-email" type="email" class="input-round form-control" placeholder="Email" v-model="subscribeEmail" style="color: black;">
                    <span class="input-group-btn">
                        <button class="btn btn-dark" type="submit"><span class="arrow-right"></span></button>
                    </span>
                    </div>
                    <label class="mc-label" for="mc-email" id="mc-notification"></label>
                </form>
                </div>
            </div>
            </div>
            <div class="footer-bottom">
            <div class="container">
                <div class="copyrights inter-font">
                © Copyright 2023 Legacy. All Rights Reserved
                </div>
                
            </div>
            </div>
        </footer>
        </div>

        <!-- Modals -->

    <div id="request" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div style="min-width: 50%;">
                    <div class="modal-header" v-if="talkStatus == 1">
                        <span class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                        <h2 class="modal-title inter-font">Thank you</h2>
                        <p class="modal-info inter-font">Your message is successfully sent...</p>
                    </div>
                    <div class="modal-header" v-else-if="talkStatus == 2">
                        <span class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                        <h2 class="modal-title inter-font">Sorry</h2>
                        <p class="modal-info inter-font"> Something went wrong </p>
                    </div>
                    <div class="modal-header" v-else>
                        <span class="close" data-dismiss="modal" aria-label="Close">&times;</span>
                        <h2 class="modal-title inter-font">Get in touch</h2>
                        <p class="modal-info inter-font">Leave your contact and your enquiry, <br> and our managers will contact you shortly.</p>
                    </div>
                    <div class="modal-body">
                        <form class="form-request" @submit.prevent="letsTalk">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Name" v-model="talkName">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" required placeholder="Email *" v-model="talkEmail">
                                </div>
                            <div class="form-group">
                                <textarea rows="3" name="message" placeholder="Message" v-model="talkMessage"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-dark btn-block inter-font">Get start</button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="modal-map">
                    <GoogleMap
                        :apiKey="yourApiKey"
                        :mapOptions="mapOptions"
                        :mapStyles="darkModeStyles"
                        :markers="markers"
                    ></GoogleMap>
                </div>
                    
            </div>
        </div>
    </div>

    <!-- Modals success -->

    <div id="success" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <span class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                <h2 class="modal-title inter-font">Thank you</h2>
                <p class="modal-subtitle inter-font">Your message is successfully sent...</p>
            </div>
            </div>
        </div>
    </div>

    <!-- Modals error -->

    <div id="error" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <span class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                <h2 class="modal-title inter-font">Sorry</h2>
                <p class="modal-subtitle inter-font"> Something went wrong </p>
            </div>
            </div>
        </div>
    </div>
</template>
<script>
import GoogleMap from './components/GoogleMap.vue';

export default {
    name: "MainLayout",
    data() {
        return {
            vacancies: [],
            talkName: '',
            talkEmail: '',
            talkMessage: '',
            talkStatus: 0,
            showVideo: false,
            subscribeEmail: '',
            subscribeStatus : 0,
            yourApiKey: 'AIzaSyAv7yHHRfNmHaOf_TYmu73fI-Br95QGweA',
            mapOptions: {
                center: { lat: 35.911617070952886, lng: 14.481233984799264 },
                zoom: 14,
                disableDefaultUI: true,
                zoomControl: false,
                mapTypeControl: false,
                streetViewControl: false,
                fullscreenControl: false,
                rotateControl: false,
                scaleControl: false,
            },
            darkModeStyles:
                [
                    {
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#212121"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [
                        {
                            "visibility": "off"
                        }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [
                        {
                            "color": "#757575"
                        }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [
                        {
                            "color": "#212121"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry",
                        "stylers": [
                        {
                            "color": "#757575"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative.country",
                        "elementType": "labels.text.fill",
                        "stylers": [
                        {
                            "color": "#9e9e9e"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "stylers": [
                        {
                            "visibility": "off"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative.locality",
                        "elementType": "labels.text.fill",
                        "stylers": [
                        {
                            "color": "#bdbdbd"
                        }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text.fill",
                        "stylers": [
                        {
                            "color": "#757575"
                        }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                        {
                            "color": "#181818"
                        }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.fill",
                        "stylers": [
                        {
                            "color": "#616161"
                        }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                        {
                            "color": "#1b1b1b"
                        }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry.fill",
                        "stylers": [
                        {
                            "color": "#2c2c2c"
                        }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.text.fill",
                        "stylers": [
                        {
                            "color": "#8a8a8a"
                        }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                        {
                            "color": "#373737"
                        }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [
                        {
                            "color": "#3c3c3c"
                        }
                        ]
                    },
                    {
                        "featureType": "road.highway.controlled_access",
                        "elementType": "geometry",
                        "stylers": [
                        {
                            "color": "#4e4e4e"
                        }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels.text.fill",
                        "stylers": [
                        {
                            "color": "#616161"
                        }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "labels.text.fill",
                        "stylers": [
                        {
                            "color": "#757575"
                        }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                        {
                            "color": "#000000"
                        }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [
                        {
                            "color": "#3d3d3d"
                        }
                        ]
                    }
            ],
            markers: [
                {
                    position: { lat: 35.911617070952886, lng: 14.481233984799264 },
                    title: '35 L. Apap, San Ġiljan',
                }
            ],
        }
    },
        
    components: {
        GoogleMap,
    },
    created() {
        this.$axios.get('/api/posts')
            .then(response => {
                this.vacancies = response.data;
            })
            .catch(function(error) {
                console.log(error);
            });
    },
    methods:{
        showModal(selector) {
            const modal = document.querySelector(selector);
            modal.classList.add('show');
            modal.removeAttribute('aria-hidden');
            modal.style.display = 'block';
        },
        formatDate(dateString) {
            const months = [
                'January', 'February', 'March', 'April', 'May', 'June',
                'July', 'August', 'September', 'October', 'November', 'December'
            ];

            const date = new Date(dateString);
            const day = date.getDate();
            const month = months[date.getMonth()];
            const year = date.getFullYear();

            return `${day} ${month} ${year}`;
        },
        letsTalk(e) {
            const config = {
                headers: {
                    'content-type': 'multipart/form-data'
                }
            }

            const formData = new FormData();
            formData.append('name', this.talkName);
            formData.append('email', this.talkEmail);
            formData.append('message', this.talkMessage);

            this.$axios.post('/api/send-message', formData, config)
            .then(response => {
                this.talkStatus = 1;
            })
            .catch(function(error) {
                this.talkStatus = 2;
            });
        },
        subscribe(e) {
            const config = {
                headers: {
                    'content-type': 'multipart/form-data'
                }
            }

            const formData = new FormData();
            formData.append('email', this.subscribeEmail);

            this.$axios.post('/api/subscribe', formData, config)
            .then(response => {
                this.subscribeStatus = 1;
            })
            .catch(function(error) {
                this.subscribeStatus = 2;
            });
        },
        openVideo() {
            this.showVideo = true;
            document.body.style.overflow = 'hidden';
        },
        closeVideo() {
            this.showVideo = false;
            document.body.style.overflow = '';
        }
    }
}


</script>

<style>

.careers-title{
    font-weight: 500;
    font-size: 1.4em;
}

.services-section{
    width: 1200px;
}

@media (max-width: 1200px) {
    .services-section{
        width: 992px;
    }
}
@media (max-width: 992px) {
    .services-section{
        width: 768px;
    }
}
@media (max-width: 768px) {
    .services-section{
        width: auto;
    }
}
@media (min-width: 992px) {
    .service-title{
          height: 45px;  
    }
}

.service-title{
    font-size: 1.5em;
}

.helvica-font{
    font-family: Helvetica, sans-serif;
}

.playfair-font{
    font-family: 'Playfair Display', serif;
}

.inter-font{
    font-family: 'Inter', sans-serif;
}

.header-logo{
    font-size: 1.575em;
}

.footer-logo{
    font-size: 1.875em;
}

#team-member-email{
    display: none;
}
#envelope-icon:hover + #team-member-email{
    display: contents;
}

#team-member-email:hover{
    display: contents;
}

.navbar-responsive.affix {
    padding-top: 1.7em;
}

@media (max-width: 500px) {
    .mobile-top-spacing{
        margin-top: 5em !important;
    }
}

.overlay {
    /* z-index: 7;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.7);
    display: flex;
    align-items: center;
    justify-content: center; */
    position: relative;
    width: 100vw; /* Full viewport width */
    height: 100vh; /* Full viewport height */
    overflow: hidden;
}
iframe{
    position: absolute;
    top: 0;
    left: 50%;
    width: 100%;
    height: 112%;
    transform: translateX(-50%);
}
/* Adjusting for mobile screens */
/* @media (max-width: 768px) {
    .overlay {
        padding-bottom: 0;
        height: 100vh; 
    }
} */
.bg-pattern{
    background-repeat: repeat;
    width: 100%;
    height: 100%;
    z-index: 1;
    position: absolute;
    top: 0;
    left: 0;
}

@media screen and (max-width: 1900px) {
    iframe{
        width: 430%;
    }
}
/* .popup {
    position: relative;
}



@media (max-width: 768px){
    .popup iframe {
        width: 100%;
        height: 100%;
    }
}
@media (min-width: 992px)
{
    .popup iframe {
        width: 100%;
        height: 100%;
    }
} */


.close-icon {
    position: absolute;
    top: 1.75rem;
    right: 1.75rem;
    cursor: pointer;
    color: #fff;
    font-size: 2.5rem;
}
.fa-times::before{
    content: '\00d7' !important;
}
@media screen and (max-width: 768px) {
    .solutions-row {
        flex-direction: column !important;
        margin: 0 2rem !important;
    }


    .solutions-image {
        justify-content: center !important;
    }

    .solutions-col {
        width: 100% !important;
        padding: 0 2rem;
    }
    .solutions-image{
        width: 100% !important;
        margin: 0 0 2.5rem 0 !important;
        height: 30vh !important;
    }
    .solutions-text{
        width: 100% !important;
        max-width: 35rem !important;
    }
}
.solutions-section{
    display: flex;
    flex-direction: column;
    gap: 3rem;
}
.solutions-title-div{
    align-items: center;
    text-align: center;
}

.solutions-rows{
    display: flex;
    flex-direction: column;
    gap: 0rem;

}
.solutions-row{
    display: flex;
    flex-direction: row-reverse;
    align-items: center;
    background-color:  #1c1c1c;
    /* margin: 0 20rem; */
}

.solutions-row:nth-child(even) {
  flex-direction: row;
}


.solutions-col{
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    
    width: 60%;
}

.solutions-text{
    max-width: 30rem;
    width: 100%;
}
.solutions-image{
    /* justify-content: flex-end; */
}
.solutions-image {
    height: 50vw;
    max-height: 65vh;
    background: gray;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    width: 60%;
    margin: 0;
}








</style>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
</style>
