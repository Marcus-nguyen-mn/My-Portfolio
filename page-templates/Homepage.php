 <?php
 /**
 * template name: Home Page
 */
 get_header();
//  get_template_part('sections/carousel');
?>
  
  <div class="gaspar" data-magic-cursor="show" data-color="crimson">
    <!-- Pre L1oader -->
    <div id="preloader">
      <div class="loader_line"></div>
    </div>
    <!-- Pre Loader end -->
    <!-- ======= Header ======= -->
    <header id="header" class="header-transparent">
      <div class="profile">
        <img src="assets/img/me.jpg" alt="" class="img-fluid">
        <h1>Alex Smith</h1>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero"><i class="fas fa-house-user"></i>Home</a></li>
          <li><a class="nav-link scrollto" href="#about"><i class="fas fa-user-alt"></i>About</a></li>
          <li><a class="nav-link scrollto" href="#services"><i class="fas fa-poll"></i>Services</a></li>
          <li><a class="nav-link scrollto" href="#portfolio"> <i class="fas fa-briefcase"></i>Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#blog"><i class="fas fa-file"></i>Blog</a></li>
          <li><a class="nav-link scrollto" href="#contact"><i class="fas fa-envelope"></i>Contact</a></li>
        </ul>
        <i class="fas fa-bars mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <div class="social-links">
        <a href="javascript:void(0)" class="twitter"><i class="fab fa-twitter"></i></a>
        <a href="javascript:void(0)" class="facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="javascript:void(0)" class="instagram"><i class="fab fa-instagram"></i></a>
        <a href="javascript:void(0)" class="google-plus"><i class="fab fa-skype"></i></a>
      </div>
    </header><!-- End Header -->
 <!-- ======= Main Section ======= -->
    <main id="main">
      <!-- ======= Hero Section ======= -->
      <section id="hero" class="pt-30">
        <div class="container">
          <span class="background"></span>
          <div class="row">
            <div class="col-12 wow bounceInUp" data-wow-duration="3s">
              <div class="hero-img">
                <img src="assets/img/hero-bg.jpg" alt="">
              </div>
            </div>
            <div class="col-12 wow bounceInDown" data-wow-duration="3s">
              <div class="hero-box">
                <h1>Alex Smith</h1>
                <h2>I am <span class="typed"></span></h2>
                <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="fas fa-angle-down"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Hero -->
      <!-- ======= About Me Section ======= -->
      <section id="about" class="about">
        <div class="container wow fadeInLeftBig animated" data-wow-duration="1.5s">
          <div class="section-title wow fadeInDown animated" data-wow-duration="2s">
            <span>About Me</span>
            <h2>About Me</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
          <div class="row">
            <div
              class="col-xl-4 col-md-12 d-flex align-items-stretch justify-content-center justify-content-lg-start wow rollIn"
              data-wow-duration="2s">
              <div class="about-img">
                <div class="image">
                </div>
              </div>
            </div>
            <div class="col-xl-8 col-md-12 d-flex flex-column align-items-stretch">
              <div class="content ps-lg-4 d-flex flex-column justify-content-center">
                <div class="row wow fadeInLeft animated" data-wow-duration="2s">
                  <div class="col-sm-6">
                    <ul>
                      <li><i class="fas fa-arrow-right"></i><strong>Name:</strong> <span>Alex Smith</span>
                      </li>
                      <li><i class="fas fa-arrow-right"></i><strong>Website:</strong>
                       <a href="#"><span>www.example.com</span></a>
                      </li>
                      <li><i class="fas fa-arrow-right"></i><strong>Phone:</strong> <a href="tel:(+01)123-456-789"><span>(+01)123-456-789</span></a>
                      </li>
                      <li><i class="fas fa-arrow-right"></i><strong>City:</strong> <span>New York, USA</span>
                      </li>
                    </ul>
                  </div>
                  <div class="col-sm-6">
                    <ul>
                      <li><i class="fas fa-arrow-right"></i><strong>Age:</strong> <span>30</span></li>
                      <li><i class="fas fa-arrow-right"></i><strong>Degree:</strong> <span>Master</span></li>
                      <li><i class="fas fa-arrow-right"></i><strong>Email:</strong>
                       <a href="mailto:info@example.com"><span>info@example.com</span></a>
                      </li>
                      <li><i class="fas fa-arrow-right"></i><strong>Freelance:</strong> <span>Available</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="row wow bounceInRight" data-wow-duration="2s">
                  <div class="col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                      <i class="fas fa-smile" style="color: #20b38e;"></i>
                      <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                        class="purecounter"></span>
                      <p><strong>Happy Clients</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      </p>
                    </div>
                  </div>

                  <div class="col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                      <i class="fas fa-folder-open" style="color:#8a1ac2;"></i>
                      <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                        class="purecounter"></span>
                      <p><strong>Projects</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        tan
                      </p>
                    </div>
                  </div>

                  <div class="col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                      <i class="fas fa-clock" style="color: #2cbdee;"></i>
                      <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1"
                        class="purecounter"></span>
                      <p><strong>Years of experience</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      </p>
                    </div>
                  </div>

                  <div class="col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                      <i class="fas fa-award" style="color: #ffb459;"></i>
                      <span data-purecounter-start="0" data-purecounter-end="16" data-purecounter-duration="1"
                        class="purecounter"></span>
                      <p><strong>Awards</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      </p>
                    </div>
                  </div>
                </div>
              </div><!-- End .content-->
              <div class="row">
                <div class="skills-content ps-lg-4">
                  <div class="col-12 col-md-6">
                    <div class="progress">
                      <span class="skill">HTML <i class="val">100%</i></span>
                      <div class="progress-bar-wrap">
                        <div class="progress-bar  progress-bar-striped progress-bar-animated" role="progressbar"
                          aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <div class="progress">
                      <span class="skill">CSS <i class="val">90%</i></span>
                      <div class="progress-bar-wrap">
                        <div class="progress-bar  progress-bar-striped progress-bar-animated" role="progressbar"
                          aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                        </div>
                      </div>
                    </div>
                    <div class="progress">
                      <span class="skill">JavaScript <i class="val">75%</i></span>
                      <div class="progress-bar-wrap">
                        <div class="progress-bar  progress-bar-striped progress-bar-animated" role="progressbar"
                          aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="progress">
                      <span class="skill">React <i class="val">75%</i></span>
                      <div class="progress-bar-wrap">
                        <div class="progress-bar  progress-bar-striped progress-bar-animated" role="progressbar"
                          aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                        </div>
                      </div>
                    </div>
                    <div class="progress">
                      <span class="skill">Ui/Ux Design <i class="val">75%</i></span>
                      <div class="progress-bar-wrap">
                        <div class="progress-bar  progress-bar-striped progress-bar-animated" role="progressbar"
                          aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                        </div>
                      </div>
                    </div>
                    <div class="progress">
                      <span class="skill">jQuery <i class="val">75%</i></span>
                      <div class="progress-bar-wrap">
                        <div class="progress-bar  progress-bar-striped progress-bar-animated" role="progressbar"
                          aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="resume wow fadeInRightBig animated" data-wow-duration="1.5s">
            <div class="section-title wow fadeInDown animated" data-wow-duration="2s">
              <span>My Resume</span>
              <h2>My Resume</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="row">
              <div class="col-lg-6 wow bounceInLeft animated" data-wow-duration="2s">
                <h3 class="resume-title">Sumary</h3>
                <div class="resume-item pb-0">
                  <h4>Alice Barkley</h4>
                  <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and
                      developing user-centered digital/print marketing material from initial concept to final, polished
                      deliverable.</em></p>
                    <ul>
                      <li>Portland par 127,Orlando, FL</li>
                      <li>(123) 456-7891</li>
                      <li>info@example.com</li>
                    </ul>
                  </div>
                <h3 class="resume-title">Education</h3>
                <div class="resume-item">
                  <h4>Master of Fine Arts &amp; Graphic Design</h4>
                  <h5>2015 - 2016</h5>
                  <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                  <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum
                    qui
                    ut dignissimos deleniti nerada porti sand markend</p>
                </div>
                <div class="resume-item">
                  <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
                  <h5>2010 - 2014</h5>
                  <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                  <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione
                    eius
                    unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart
                    dila</p>
                </div>
              </div>
              <div class="col-lg-6 wow fadeInLeft animated" data-wow-duration="2s">
                <h3 class="resume-title">Professional Experience</h3>
                <div class="resume-item">
                  <h4>Senior graphic design specialist</h4>
                  <h5>2019 - Present</h5>
                  <p><em>Experion, New York, NY </em></p>
                    <ul>
                      <li>Lead in the design, development, and implementation of the graphic, layout, and production
                        communication materials</li>
                      <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the
                        project. </li>
                      <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of
                        the
                        design</li>
                      <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
                    </ul>
                </div>
                <div class="resume-item">
                  <h4>Graphic design specialist</h4>
                  <h5>2017 - 2018</h5>
                  <p><em>Stepping Stone Advertising, New York, NY</em></p>
                    <ul>
                      <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and
                        advertisements).</li>
                      <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                      <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                      <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End About Me Section -->

      <!-- ======= My Services Section ======= -->
      <section id="services" class="services">
        <div class="container wow rollIn animated" data-wow-duration="1.5s">

          <div class="section-title wow bounceIn animated" data-wow-duration="3s">
            <span>My Services</span>
            <h2>My Services</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>

          <div class="row">
            <div class="col-md-6 col-xl-3 d-flex align-items-stretch  mb-lg-0 wow swing animated"
              data-wow-duration="3s">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-palette"></i></div>
                <h4 class="title"><a href="">Web Design</a></h4>
                <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro autem, enim
                  necessitatibus quae ab placeat consectetur velit qui, sint aliquam sunt.</p>
              </div>
            </div>

            <div class="col-md-6 col-xl-3 d-flex align-items-stretch  mb-lg-0 wow swing animated"
              data-wow-duration="3s">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-radiation"></i></div>
                <h4 class="title"><a href="">Animation</a></h4>
                <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro autem, enim
                  necessitatibus quae ab placeat consectetur velit qui, sint aliquam sunt.</p>
              </div>
            </div>

            <div class="col-md-6 col-xl-3 d-flex align-items-stretch  mb-lg-0 wow swing animated"
              data-wow-duration="3s">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-code"></i></div>
                <h4 class="title"><a href="">Web Development</a></h4>
                <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro autem, enim
                  necessitatibus quae ab placeat consectetur velit qui, sint aliquam sunt.</p>
              </div>
            </div>

            <div class="col-md-6 col-xl-3 d-flex align-items-stretch  mb-lg-0  wow swing animated"
              data-wow-duration="3s">
              <div class="icon-box">
               <div class="icon"><i class="fas fa-arrows-alt"></i></div>
                <h4 class="title"><a href="">Fully Responsive</a></h4>
                <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro autem, enim
                  necessitatibus quae ab placeat consectetur velit qui, sint aliquam sunt.</p>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End My Services Section -->

      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials">
        <div class="container position-relative testimonials wow fadeIn" data-wow-duration="5s">
          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <i class="fas fa-quote-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                    Accusantium
                    quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="fas fa-quote-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class="fas fa-quote-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                    quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="fas fa-quote-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="fas fa-quote-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim
                    tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="fas fa-quote-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="fas fa-quote-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit
                    minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="fas fa-quote-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="fas fa-quote-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim
                    culpa
                    labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="fas fa-quote-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section><!-- End Testimonials Section -->

      <!-- ======= My Portfolio Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container wow fadeInUp" data-wow-duration="1.5s">

          <div class="section-title wow fadeInDown" data-wow-duration="2s">
            <span>My Portfolio</span>
            <h2>My Portfolio</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>

          <ul id="portfolio-flters" class="d-flex justify-content-center wow flipInX animated" data-wow-duration="2s">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>

          <div class="row portfolio-container">

            <div class="col-lg-4 col-sm-6 portfolio-item filter-app">
              <div class="portfolio-img wow bounceInLeft" data-wow-duration="2.5s"><img
                  src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link" title="App 1"><i class="fas fa-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                    class="fas fa-paperclip"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6 portfolio-item filter-web">
              <div class="portfolio-img wow bounceInUp" data-wow-duration="2.5s"><img
                  src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link" title="Web 3"><i class="fas fa-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                    class="fas fa-paperclip"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6 portfolio-item filter-app">
              <div class="portfolio-img wow bounceInRight" data-wow-duration="2.5s"><img
                  src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link" title="App 2"><i class="fas fa-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                    class="fas fa-paperclip"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6 portfolio-item filter-card">
              <div class="portfolio-img wow bounceInLeft" data-wow-duration="2.5s"><img
                  src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link" title="Card 2"><i class="fas fa-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                    class="fas fa-paperclip"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6 portfolio-item filter-web">
              <div class="portfolio-img wow bounceInDown" data-wow-duration="2.5s"><img
                  src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link" title="Web 2"><i class="fas fa-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                    class="fas fa-paperclip"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6 portfolio-item filter-app">
              <div class="portfolio-img wow bounceInRight" data-wow-duration="2.5s"><img
                  src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link" title="App 3"><i class="fas fa-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                    class="fas fa-paperclip"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6 portfolio-item filter-card">
              <div class="portfolio-img wow bounceInLeft" data-wow-duration="2.5s"><img
                  src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link" title="Card 1"><i class="fas fa-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                    class="fas fa-paperclip"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6 portfolio-item filter-card">
              <div class="portfolio-img wow bounceInUp" data-wow-duration="2.5s"><img
                  src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link" title="Card 3"><i class="fas fa-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                    class="fas fa-paperclip"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6 portfolio-item filter-web">
              <div class="portfolio-img wow bounceInRight" data-wow-duration="2.5s"><img
                  src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link" title="Web 3"><i class="fas fa-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                    class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End My Portfolio Section -->

      <!-- ======= Pricing Section ======= -->
      <section id="pricing" class="pricing">
        <div class="container wow bounceInUp animated" data-wow-duration="1.5s">
          <div class="section-title wow fadeInDown animated" data-wow-duration="2s">
            <span>Pricing</span>
            <h2>Pricing</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>

          <div class="row">

            <div class="col-lg-3 col-sm-6 wow rollIn animated" data-wow-duration="2s">
              <div class="box">
                <h3>Free</h3>
                <h4><sup>$</sup>0<span> / month</span></h4>
                <ul>
                  <li>Lorem, ipsum.</li>
                  <li>Lorem, ipsum dolor.</li>
                  <li class="na">Lorem ipsum dolor sit.</li>
                  <li class="na">Lorem, ipsum.</li>
                  <li class="na">Lorem, ipsum.</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow rollIn animated" data-wow-duration="3s">
              <div class="box featured">
                <h3>Business</h3>
                <h4><sup>$</sup>19<span> / month</span></h4>
                <ul>
                  <li>Lorem, ipsum.</li>
                  <li>Lorem, ipsum dolor.</li>
                  <li>Lorem ipsum dolor sit.</li>
                  <li class="na">Lorem, ipsum.</li>
                  <li class="na">Lorem, ipsum.</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6  wow rollIn animated" data-wow-duration="4s">
              <div class="box">
                <h3>Developer</h3>
                <h4><sup>$</sup>29<span> / month</span></h4>
                <ul>
                  <li>Lorem, ipsum.</li>
                  <li>Lorem, ipsum dolor.</li>
                  <li>Lorem ipsum dolor sit.</li>
                  <li>Lorem, ipsum.</li>
                  <li class="na">Lorem, ipsum.</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow rollIn animated" data-wow-duration="5s">
              <div class="box">
                <span class="advanced">Advanced</span>
                <h3>Ultimate</h3>
                <h4><sup>$</sup>49<span> / month</span></h4>
                <ul>
                  <li>Lorem, ipsum.</li>
                  <li>Lorem, ipsum dolor.</li>
                  <li>Lorem ipsum dolor sit.</li>
                  <li>Lorem, ipsum.</li>
                  <li>Lorem, ipsum.</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Pricing Section -->
      <!-- ======= My Blog Section ======= -->
      <section id="blog" class="blog">
        <div class="container">
          <div class="section-title wow fadeInDown animated" data-wow-duration="2s">
            <span>Blog</span>
            <h2>Blog</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
          <div class="row justify-content-center">
              <div class="col-xl-4 col-sm-6">
                <div class="blog-post">
                  <div class="blog-thumb">
                   <a href="blog-page.html"><img src="assets/img/blog/01.jpg" alt=""></a>
                  </div>
                  <div class="down-content">
                    <span>Nature</span>
                    <a href="blog-page.html">
                      <h4>Lorem, ipsum dolor.</h4>
                    </a>
                    <ul class="post-info">
                      <li><i class="fa fa-tags"></i></li>
                      <li><a href="#">Admin</a></li>
                      <li><a href="#">May 31, 2020</a></li>
                      <li><a href="#">12 Comments</a></li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, tempore.</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6">
                <div class="blog-post">
                  <div class="blog-thumb">
                    <a href="blog-page.html"><img src="assets/img/blog/02.jpg" alt=""></a>
                  </div>
                  <div class="down-content">
                    <span>Lifestyle</span>
                    <a href="blog-page.html">
                      <h4>Lorem, ipsum dolor.</h4>
                    </a>
                    <ul class="post-info">
                      <li><i class="fa fa-tags"></i></li>
                      <li><a href="#">Admin</a></li>
                      <li><a href="#">May 31, 2020</a></li>
                      <li><a href="#">12 Comments</a></li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, tempore.</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6">
                <div class="blog-post">
                  <div class="blog-thumb">
                    <a href="blog-page.html"><img src="assets/img/blog/03.jpg" alt=""></a>
                  </div>
                  <div class="down-content">
                    <span>Night</span>
                    <a href="blog-page.html">
                      <h4>Lorem, ipsum dolor.</h4>
                    </a>
                    <ul class="post-info">
                      <li><i class="fa fa-tags"></i></li>
                      <li><a href="#">Admin</a></li>
                      <li><a href="#">May 31, 2020</a></li>
                      <li><a href="#">12 Comments</a></li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, tempore.</p>
                  </div>
                </div>
              </div>
            <div class="col-lg-12">
              <ul class="page-numbers">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- End My Blog Section -->

      <!-- ======= Contact Me Section ======= -->
      <section id="contact" class="contact">
        <div class="container wow fadeInLeftBig animated" data-wow-duration="1.5s">
          <div class="section-title wow fadeInDownBig animated" data-wow-duration="2s">
            <span>Contact Me</span>
            <h2>Contact Me</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="row">
                <div class="col-md-12 wow bounceInDown animated" data-wow-duration="2s">
                  <div class="info-box m-0">
                    <i class="fas fa-share-alt"></i>
                    <h3>Social Profiles</h3>
                    <div class="social-links">
                      <a href="javascript:void(0)" class="twitter"><i class="fab fa-twitter"></i></a>
                      <a href="javascript:void(0)" class="facebook"><i class="fab fa-facebook"></i></a>
                      <a href="javascript:void(0)" class="instagram"><i class="fab fa-instagram"></i></a>
                      <a href="javascript:void(0)" class="google-plus"><i class="fab fa-google"></i></a>
                      <a href="javascript:void(0)" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 wow bounceInLeft animated" data-wow-duration="2s">
                  <div class="info-box">
                    <i class="fas fa-envelope"></i>
                    <h3>Email Me</h3>
                    <p>contact@example.com</p>
                  </div>
                </div>
                <div class="col-md-6 wow bounceInRight animated" data-wow-duration="2s">
                  <div class="info-box">
                    <i class="fas fa-phone-alt"></i>
                    <h3>Call Me</h3>
                    <p>+123456789</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 wow bounceIn animated" data-wow-duration="2s">
              <form class="email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input class="form-control" id="contact-email" type="email" name="email" placeholder="Email"
                      required="">
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>
        </div>
      </section><!-- End Contact Me Section -->
      <section>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="map">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2480.4419632115837!2d-0.31545398402676533!3d51.56013091466708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487613b3810101c3%3A0x62846e204598603f!2sWembley%2C%20UK!5e0!3m2!1sen!2sin!4v1646889711501!5m2!1sen!2sin"
                  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php 
 get_footer();
?>
