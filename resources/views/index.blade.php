<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navid Dev - Responsive Minimal Langing Page</title>

    <!--=============== FAVICON ===============-->
    <!-- <link rel="shortcut icon" href="" type="image/x-icon" /> -->

    <!--=============== Box Icons ===============-->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
</head>

<body>
    <!--==================== HEADER ====================-->
    <header>
        <div class="container header">
            <a href="/" class="logo"><img src="{{ asset('assets/img/logoge.png') }}" alt="logo" /></a>
            <nav class="desktop-menu mobile-hidden">
                <ul>
                    <li><a href="#home_section">Home</a></li>
                    <li><a href="#about_section">About</a></li>
                    <li><a href="#products_section">products</a></li>
                    <li><a href="#team_section">Team</a></li>
                    <li><a href="#blog_section">Blog</a></li>
                    <li><a href="#contact_section">Contact</a></li>
                </ul>
            </nav>
            <div id="trigger-menu" class="menu-icon desktop-hidden">
                <i class="bx bx-menu"></i>
            </div>

            <!--==================== Navbar ====================-->
        </div>
    </header>
    <div id="menu-mobile-container">
        <div class="dark-part"></div>
        <nav id="mobile-menu" class="menu mobile">
            <ul>
                <li><a href="#home_section">Home</a></li>
                <li><a href="#about_section">About</a></li>
                <li><a href="#products_section">products</a></li>
                <li><a href="#team_section">Team</a></li>
                <li><a href="#blog_section">Blog</a></li>
                <li><a href="#contact_section">Contact</a></li>
            </ul>
        </nav>
    </div>

    <!--==================== Main ====================-->

    <main>
        <!--==================== Hero ====================-->
        <section id="home_section" class="section flex-desktop flex-row-reverse container">
            <div class="img pop-animation">
                <img src="assets/img/slider-img.png" alt="hero image" />
            </div>
            <div class="description">
                <p class="top-title">Amazing Creative Team</p>
                <h1 class="title">We Develop Best Solutions for Your Business</h1>
                <p class="paragraph">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam
                    in aliquid suscipit odit sed sequi.
                </p>
                <button class="primary-btn">Full Story</button>
            </div>
        </section>

        <!--==================== About ====================-->

        <section id="about_section" class="section flex-desktop container">
            <div class="img img-center pop-animation">
                <img src="assets/img/about-img.png" alt="about image" />
            </div>
            <div class="description">
                <p class="top-title">About Us</p>
                <h2 class="title">We Innovate Digital Goods</h2>
                <p class="paragraph">
                    Topre eohen derit in voluptate velit esse cillum Lorem ipsum dolor
                    sit amet, conse ctetur adipisicing elit, sed do eiusmod te mpor
                    incididunt ut labore et dolore ma gna aliqua. Ut enim ad minim
                    veniam quis nostrud exercitation ullamco
                </p>
                <p class="paragraph">
                    Topre eohen derit in voluptate velit esse cillum Lorem ipsum dolor
                    sit amet, conse ctetur adipisicing elit, sed do eiusmod te mpor
                    incididunt ut labore et dolone.
                </p>
                <button class="secondery-btn">More About us</button>
            </div>
        </section>

        <!--==================== service ====================-->
        <section id="why_us" class="section flex-desktop flex-row-reverse container">
            <div class="img img-center pop-animation">
                <img src="assets/img/service-img.png" alt="service image" />
            </div>
            <div class="description">
                <p class="top-title">Service</p>
                <h2 class="title">Industry Standard Service</h2>
                <div class="icon-box-container">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-data"></i></div>
                        <h3 class="icon-box-title">Web Solutions</h3>
                        <p class="icon-box-des">
                            Dunt ut labore et dolore ma gna aliquaim ad minim
                        </p>
                    </div>
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-store"></i></div>
                        <h3 class="icon-box-title">Digital Marketing</h3>
                        <p class="icon-box-des">
                            Dunt ut labore et dolore ma gna aliquaim ad minim
                        </p>
                    </div>
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-sketch"></i></div>
                        <h3 class="icon-box-title">Mobile Application</h3>
                        <p class="icon-box-des">
                            Dunt ut labore et dolore ma gna aliquaim ad minim
                        </p>
                    </div>
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-message-square-dots"></i></div>
                        <h3 class="icon-box-title">Consultancy</h3>
                        <p class="icon-box-des">
                            Dunt ut labore et dolore ma gna aliquaim ad minim
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== Features ====================-->
        <div class="bg-section">
            <section class="section flex-desktop container">
                <div class="img pop-animation">
                    <img src="assets/img/feature-img.png" alt="about image" />
                </div>
                <div class="description">
                    <p class="top-title">Why Choose Us</p>
                    <h2 class="title">Never compromise with Quality</h2>
                    <p class="paragraph">
                        Dunt ut labore et dolore ma gna aliquaim ad minim vul koreo amare
                        ki mone pore na ami todiba.
                    </p>
                    <p class="paragraph">
                        Praesent mattis, orci in vulputate ultrices, turpis ipsum imp
                        erdiet nibh, in porta lectus diam non nis.
                    </p>
                    <button class="secondery-btn">Why Choose Us</button>
                </div>
            </section>
        </div>
        <!--==================== Products ====================-->
        <section id="products_section" class="section container">
            <div class="text-center">
                <p class="top-title">Our Product</p>
                <h2 class="title">We Develope Amazing Products</h2>
            </div>
            <div class="product-box-container">
                <div class="product-box">
                    <h3 class="product-box-title">Custom CMS</h3>
                    <img src="assets/img/product-icon1.png" alt="" />
                    <p>
                        Ovitae purus sodaDuis eu eros auctor augue ultricies bibend um.
                        Phasellus semattis
                    </p>
                    <button class="secondery-btn">View Details</button>
                </div>
                <div class="product-box">
                    <h3 class="product-box-title">Blogging Tool</h3>
                    <img src="assets/img/product-icon2.png" alt="" />
                    <p>
                        Ovitae purus sodaDuis eu eros auctor augue ultricies bibend um.
                        Phasellus semattis
                    </p>
                    <button class="secondery-btn">View Details</button>
                </div>
                <div class="product-box">
                    <h3 class="product-box-title">Photo Editor</h3>
                    <img src="assets/img/product-icon3.png" alt="" />
                    <p>
                        Ovitae purus sodaDuis eu eros auctor augue ultricies bibend um.
                        Phasellus semattis
                    </p>
                    <button class="secondery-btn">View Details</button>
                </div>
                <div class="product-box">
                    <h3 class="product-box-title">Accounting App</h3>
                    <img src="assets/img/product-icon4.png" alt="" />
                    <p>
                        Ovitae purus sodaDuis eu eros auctor augue ultricies bibend um.
                        Phasellus semattis
                    </p>
                    <button class="secondery-btn">View Details</button>
                </div>
                <div class="product-box">
                    <h3 class="product-box-title">Keyword Tool</h3>
                    <img src="assets/img/product-icon5.png" alt="" />
                    <p>
                        Ovitae purus sodaDuis eu eros auctor augue ultricies bibend um.
                        Phasellus semattis
                    </p>
                    <button class="secondery-btn">View Details</button>
                </div>
                <div class="product-box">
                    <h3 class="product-box-title">Social Media Tool</h3>
                    <img src="assets/img/product-icon6.png" alt="" />
                    <p>
                        Ovitae purus sodaDuis eu eros auctor augue ultricies bibend um.
                        Phasellus semattis
                    </p>
                    <button class="secondery-btn">View Details</button>
                </div>
            </div>
        </section>

        <!--==================== Features ====================-->
        <section class="section flex-desktop container">
            <div class="description">
                <p class="top-title">Features</p>
                <h2 class="title">Top Features that Keep Us Ahed</h2>
                <p class="paragraph">
                    Phasellus seiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam
                </p>

                <div class="icon-box-container">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-upside-down"></i></div>
                        <h3 class="icon-box-title">Friendly Design</h3>
                        <p class="icon-box-des">
                            Phasellus seiusmod tempor incididunt ut labore et dolore magna
                            aliqu ad minim veniam
                        </p>
                    </div>
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-user-pin"></i></div>
                        <h3 class="icon-box-title">User Experience</h3>
                        <p class="icon-box-des">
                            Phasellus seiusmod tempor incididunt ut labore et dolore magna
                            aliqu ad minim veniam
                        </p>
                    </div>
                </div>
            </div>

            <div class="img pop-animation">
                <img src="assets/img/feature2-img.png" alt="about image" />
            </div>
        </section>

        <!--==================== Latest News ====================-->
        <div class="bg-section">
            <section class="section container latest-news">
                <div class="text-center">
                    <p class="top-title">Latest News</p>
                    <h2 class="title">They Are Amazing</h2>
                </div>
                <div id="testimonial" class="testimonial-carousel">
                    <div class="testimonial-item">
                        <p class="testimonial-text">
                            1Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eius mod tempor incididunt ut labore et dolore magna aliqu
                            Lor em ipsum dolor sit amet, consecte tur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore tomra keu ki
                            dite paro premikar.
                        </p>
                        <div class="testimonial-user">
                            <img src="assets/img/testi-author.png" alt="" />
                            <div class="user-info">
                                <h5>James Parker</h5>
                                <p>Web Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <p class="testimonial-text">
                            2Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eius mod tempor incididunt ut labore et dolore magna aliqu
                            Lor em ipsum dolor sit amet, consecte tur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore tomra keu ki
                            dite paro premikar.
                        </p>
                        <div class="testimonial-user">
                            <img src="assets/img/testi-author.png" alt="" />
                            <div class="user-info">
                                <h5>James Parker</h5>
                                <p>Web Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <p class="testimonial-text">
                            3Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eius mod tempor incididunt ut labore et dolore magna aliqu
                            Lor em ipsum dolor sit amet, consecte tur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore tomra keu ki
                            dite paro premikar.
                        </p>
                        <div class="testimonial-user">
                            <img src="assets/img/testi-author.png" alt="" />
                            <div class="user-info">
                                <h5>James Parker</h5>
                                <p>Web Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <p class="testimonial-text">
                            4Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eius mod tempor incididunt ut labore et dolore magna aliqu
                            Lor em ipsum dolor sit amet, consecte tur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore tomra keu ki
                            dite paro premikar.
                        </p>
                        <div class="testimonial-user">
                            <img src="assets/img/testi-author.png" alt="" />
                            <div class="user-info">
                                <h5>James Parker</h5>
                                <p>Web Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <p class="testimonial-text">
                            5Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eius mod tempor incididunt ut labore et dolore magna aliqu
                            Lor em ipsum dolor sit amet, consecte tur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore tomra keu ki
                            dite paro premikar.
                        </p>
                        <div class="testimonial-user">
                            <img src="assets/img/testi-author.png" alt="" />
                            <div class="user-info">
                                <h5>James Parker</h5>
                                <p>Web Developer</p>
                            </div>
                        </div>
                    </div>

                    <div class="next"><i class="bx bx-chevron-right"></i></div>
                    <div class="perv"><i class="bx bx-chevron-left"></i></div>
                </div>
            </section>
        </div>

        <!--==================== Team Members ====================-->
        <section id="team_section" class="section flex-start container">
            <div class="text-left">
                <p class="top-title">Team Members</p>
                <h2 class="title">Amazing Team</h2>
                <p class="paragraph width-50">
                    Phasellus seiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam
                </p>
            </div>
            <div class="team-container">
                <div class="team-member">
                    <div class="team-member-img">
                        <img src="assets/img/team-img1.jpeg" alt="" />
                        <div class="socials-container">
                            <div class="socials">
                                <i class="bx bxl-facebook-square"></i>
                                <i class="bx bxl-linkedin-square"></i>
                                <i class="bx bxl-instagram"></i>
                            </div>
                        </div>
                    </div>
                    <h4>Johnson Doe</h4>
                    <p>Senior Attorney</p>
                </div>
                <div class="team-member">
                    <div class="team-member-img">
                        <img src="assets/img/team-img2.jpeg" alt="" />
                        <div class="socials-container">
                            <div class="socials">
                                <i class="bx bxl-facebook-square"></i>
                                <i class="bx bxl-linkedin-square"></i>
                                <i class="bx bxl-instagram"></i>
                            </div>
                        </div>
                    </div>
                    <h4>Johnson Doe</h4>
                    <p>Senior Attorney</p>
                </div>
                <div class="team-member">
                    <div class="team-member-img">
                        <img src="assets/img/team-img3.jpeg" alt="" />
                        <div class="socials-container">
                            <div class="socials">
                                <i class="bx bxl-facebook-square"></i>
                                <i class="bx bxl-linkedin-square"></i>
                                <i class="bx bxl-instagram"></i>
                            </div>
                        </div>
                    </div>
                    <h4>Johnson Doe</h4>
                    <p>Senior Attorney</p>
                </div>
                <div class="team-member">
                    <div class="team-member-img">
                        <img src="assets/img/team-img4.jpeg" alt="" />
                        <div class="socials-container">
                            <div class="socials">
                                <i class="bx bxl-facebook-square"></i>
                                <i class="bx bxl-linkedin-square"></i>
                                <i class="bx bxl-instagram"></i>
                            </div>
                        </div>
                    </div>
                    <h4>Johnson Doe</h4>
                    <p>Senior Attorney</p>
                </div>
            </div>
        </section>
        <!--==================== Partners ====================-->
        <section class="section partners container">
            <div class="text-left">
                <p class="top-title">Partners</p>
                <h2 class="title">Trusted By Brands</h2>
                <p class="paragraph width-50">
                    Kisicing elit, sed do eiusmod te mpor incididunt utlabore et dolore
                    ma gna aliqua. Ut enco laboris nisi ut aliquip ex ea com odo
                    consequat.
                </p>
            </div>
            <div class="partners-container">
                <img src="assets/img/brand-img1.png" alt="" />
                <img src="assets/img/brand-img2.png" alt="" />
                <img src="assets/img/brand-img3.png" alt="" />
                <img src="assets/img/brand-img4.png" alt="" />
                <img src="assets/img/brand-img6.png" alt="" />
                <img src="assets/img/brand-img7.png" alt="" />
                <img src="assets/img/brand-img8.png" alt="" />
                <img src="assets/img/brand-img9.png" alt="" />
            </div>
        </section>
        <!--==================== Blog ====================-->
        <div id="blog_section" class="bg-section">
            <section class="section blog container">
                <div class="text-left">
                    <p class="top-title">Latest News</p>
                    <h2 class="title">Form Our Blog</h2>
                    <p class="paragraph width-75">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea
                    </p>
                </div>
                <div class="blog-container">
                    <article class="blog">
                        <div class="blog-img">
                            <img src="assets/img/blog-img1.jpeg" alt="" />
                        </div>
                        <div class="blog-des">
                            <p>February 04, 2025</p>
                            <h3>
                                Lets make the begging to mankind to save the world again
                            </h3>
                        </div>
                        <a href="#"></a>
                    </article>
                    <article class="blog">
                        <div class="blog-img">
                            <img src="assets/img/blog-img2.jpeg" alt="" />
                        </div>
                        <div class="blog-des">
                            <p>February 04, 2025</p>
                            <h3>
                                Lets make the begging to mankind to save the world again
                            </h3>
                        </div>
                        <a href="#"></a>
                    </article>
                    <article class="blog">
                        <div class="blog-img">
                            <img src="assets/img/blog-img3.jpeg" alt="" />
                        </div>
                        <div class="blog-des">
                            <p>February 04, 2025</p>
                            <h3>
                                Lets make the begging to mankind to save the world again
                            </h3>
                        </div>
                        <a href="#"></a>
                    </article>
                </div>
            </section>
        </div>
        <!--==================== Contact ====================-->
        <section id="contact_section" class="section contact container">
            <div class="text-left">
                <p class="top-title">Contact Us</p>
                <h2 class="title">Stay Connected</h2>
                <p class="paragraph width-75">
                    Phasellus seiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam
                </p>
                <div class="address">
                    <ul>
                        <li>
                            <i class="bx bxs-map"></i>
                            <p>22/1 Bardeshi, Navid Bazar 2530</p>
                        </li>
                        <li>
                            <i class="bx bx-envelope"></i>
                            <p>hello@website.com</p>
                        </li>
                        <li>
                            <i class="bx bx-phone"></i>
                            <p>+123 456 7890</p>
                        </li>
                    </ul>
                </div>
            </div>
            <form action="" class="contact">
                <div class="input-container">
                    <input type="text" placeholder="Your Name" />
                    <input type="email" placeholder="Your Email" />
                    <input type="text" placeholder="Your Phone" />
                    <input type="text" placeholder="Subject" />
                </div>
                <textarea name="" id="" cols="30" rows="10" placeholder="Write your message"></textarea>
                <button class="primary-btn">Submit Now</button>
            </form>
        </section>
    </main>

    <!--==================== Footer ====================-->
    <footer class="footer container">
        <div class="top-footer">
            <div class="address">
                <h3 class="title">Address</h3>
                <ul>
                    <li>
                        <i class="bx bxs-map"></i>
                        <p>22/1 Bardeshi, Navid Bazar 2530</p>
                    </li>
                    <li>
                        <i class="bx bx-envelope"></i>
                        <p>hello@website.com</p>
                    </li>
                    <li>
                        <i class="bx bx-phone"></i>
                        <p>+123 456 7890</p>
                    </li>
                </ul>
            </div>
            <div class="links">
                <div class="link">
                    <h3 class="title">Links</h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Customer</a></li>
                        <li><a href="#">Career</a></li>
                    </ul>
                </div>
                <div class="link">
                    <h3 class="title">Help</h3>
                    <ul>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Doc</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Legal</a></li>
                    </ul>
                </div>
            </div>
            <div class="newsletter">
                <h3 class="title">Subscribe To Our Newsletter</h3>
                <p class="paragraph">
                    Fectetur adipisicing elit, sed do eius mod tempor incididunt
                </p>
                <div class="newsletter-input">
                    <input type="email" placeholder="Your email here..." />
                    <button aria-label="Subscribe">
                        <i class="bx bx-mail-send"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="copyright">
                All rights reserved © <a href="https://naviddev.com/">Naviddev.com</a>
            </div>
            <div class="foot-socials">
                <a href="https://www.youtube.com/channel/UCxd6yE9578AmHr1DIRAnJdA" aria-label="youtube"><i
                        class="bx bxl-youtube"></i></a>
                <a href="https://github.com/navidabdi/" aria-label="github"><i class="bx bxl-github"></i></a>
            </div>
        </div>
    </footer>
    <div id="gotoup" aria-label="gotoup"><i class="bx bx-chevron-up"></i></div>

    <!--===== GSAP =====-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

    <!--==================== Main JavaScript File ====================-->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
