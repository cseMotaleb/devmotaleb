    <?php 
    /*
    Template Name: Home page
    Author Name  : Motaleb Hossain 
    */
    get_header();
    ?>
    <!-- main area part start -->
    <main>
      <section class="home-area">
        <div class="container">
          <div class="row g-4">
            <div class="col-xl-4">
              <div class="card profile-card">
                <div class="card-body">
                  <div class="image text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/profile.png" alt="profile">
                  </div>
                  <div class="text">
                    <h3 class="card-title">Cris Rayaan 👋</h3>
                    <p>A Passionate <span>Full Stack Developer</span> 🖥️ & <span>Product Designer</span> having <span>12
                        years</span> of Experiences over 24+
                      Country Worldwide.</p>
                    <div class="common-button-groups">
                      <a class="btn btn-call" href="#">
                        <svg class="icon" width="25" height="24" viewBox="0 0 25 24" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M5.5 4H9.5L11.5 9L9 10.5C10.071 12.6715 11.8285 14.429 14 15.5L15.5 13L20.5 15V19C20.5 19.5304 20.2893 20.0391 19.9142 20.4142C19.5391 20.7893 19.0304 21 18.5 21C14.5993 20.763 10.9202 19.1065 8.15683 16.3432C5.3935 13.5798 3.73705 9.90074 3.5 6C3.5 5.46957 3.71071 4.96086 4.08579 4.58579C4.46086 4.21071 4.96957 4 5.5 4Z"
                            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M15.5 7C16.0304 7 16.5391 7.21071 16.9142 7.58579C17.2893 7.96086 17.5 8.46957 17.5 9"
                            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M15.5 3C17.0913 3 18.6174 3.63214 19.7426 4.75736C20.8679 5.88258 21.5 7.4087 21.5 9"
                            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Book A call
                      </a>
                      <button class="btn btn-copy" data-clipboard-text="example@example.com">
                        <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M8 10C8 9.46957 8.21071 8.96086 8.58579 8.58579C8.96086 8.21071 9.46957 8 10 8H18C18.5304 8 19.0391 8.21071 19.4142 8.58579C19.7893 8.96086 20 9.46957 20 10V18C20 18.5304 19.7893 19.0391 19.4142 19.4142C19.0391 19.7893 18.5304 20 18 20H10C9.46957 20 8.96086 19.7893 8.58579 19.4142C8.21071 19.0391 8 18.5304 8 18V10Z"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          <path
                            d="M16 8V6C16 5.46957 15.7893 4.96086 15.4142 4.58579C15.0391 4.21071 14.5304 4 14 4H6C5.46957 4 4.96086 4.21071 4.58579 4.58579C4.21071 4.96086 4 5.46957 4 6V14C4 14.5304 4.21071 15.0391 4.58579 15.4142C4.96086 15.7893 5.46957 16 6 16H8"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Copy Email
                      </button>
                    </div>
                    <div class="social-media-icon">
                      <ul class="list-unstyled">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fab fa-github"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4">
              <div class="row g-4">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body work-experiance-card">
                      <h3 class="card-title">Work Experience</h3>
                      <div class="work-experiance-main">
                        <ul class="work-experiance-slider list-unstyled">
                          <li>
                            <div class="date">
                              <p>2021-2024</p>
                            </div>
                            <div class="info">
                              <div class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/adobe.svg" alt="adobe">
                              </div>
                              <div class="text">
                                <h4 class="title">Adobe</h4>
                                <h6 class="subtitle">Senior UI UX Designer</h6>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="date">
                              <p>2021-2024</p>
                            </div>
                            <div class="info">
                              <div class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/google.svg" alt="google">
                              </div>
                              <div class="text">
                                <h4 class="title">Google Inc.
                                </h4>
                                <h6 class="subtitle">Senior Product Designer
  
                                </h6>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="date">
                              <p>2021-2024</p>
                            </div>
                            <div class="info">
                              <div class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/meta.svg" alt="meta">
                              </div>
                              <div class="text">
                                <h4 class="title">Meta Inc.
                                </h4>
                                <h6 class="subtitle">Product Designer
                                </h6>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="date">
                              <p>2021-2024</p>
                            </div>
                            <div class="info">
                              <div class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/adobe.svg" alt="adobe">
                              </div>
                              <div class="text">
                                <h4 class="title">Adobe</h4>
                                <h6 class="subtitle">Senior UI UX Designer</h6>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <ul class="work-experiance-slider list-unstyled">
                          <li>
                            <div class="date">
                              <p>2021-2024</p>
                            </div>
                            <div class="info">
                              <div class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/adobe.svg" alt="adobe">
                              </div>
                              <div class="text">
                                <h4 class="title">Adobe</h4>
                                <h6 class="subtitle">Senior UI UX Designer</h6>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="date">
                              <p>2021-2024</p>
                            </div>
                            <div class="info">
                              <div class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/google.svg" alt="google">
                              </div>
                              <div class="text">
                                <h4 class="title">Google Inc.
                                </h4>
                                <h6 class="subtitle">Senior Product Designer
  
                                </h6>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="date">
                              <p>2021-2024</p>
                            </div>
                            <div class="info">
                              <div class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/meta.svg" alt="meta">
                              </div>
                              <div class="text">
                                <h4 class="title">Meta Inc.
                                </h4>
                                <h6 class="subtitle">Product Designer
                                </h6>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="date">
                              <p>2021-2024</p>
                            </div>
                            <div class="info">
                              <div class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/adobe.svg" alt="adobe">
                              </div>
                              <div class="text">
                                <h4 class="title">Adobe</h4>
                                <h6 class="subtitle">Senior UI UX Designer</h6>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="card expertise-card">
                    <div class="card-body">
                      <h3 class="card-title">My Expert Area
                      </h3>
                      <div class="expertise-main mt-24">
                        <div class="row g-3">
                          <div class="col-xl-4 col-md-4 col-sm-6 col-6">
                            <div class="expertise-item">
                              <div class="image text-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/figma.svg" alt="figma">
                              </div>
                              <div class="text">
                                <h4 class="title">Figma</h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-4 col-sm-6 col-6">
                            <div class="expertise-item">
                              <div class="image text-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/notion.svg" alt="notion">
                              </div>
                              <div class="text">
                                <h4 class="title">Notion</h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-4 col-sm-6 col-6">
                            <div class="expertise-item">
                              <div class="image text-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/mico.svg" alt="micro">
                              </div>
                              <div class="text">
                                <h4 class="title">Miro</h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-4 col-sm-6 col-6">
                            <div class="expertise-item">
                              <div class="image text-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/framer.svg" alt="framer">
                              </div>
                              <div class="text">
                                <h4 class="title">Framer</h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-4 col-sm-6 col-6">
                            <div class="expertise-item">
                              <div class="image text-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/webflow.svg" alt="webflow">
                              </div>
                              <div class="text">
                                <h4 class="title">Webflow</h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-4 col-sm-6 col-6">
                            <div class="expertise-item">
                              <div class="image text-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/zeplin.svg" alt="zeplin">
                              </div>
                              <div class="text">
                                <h4 class="title">Zeplin</h4>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4">
              <div class="card card-projects">
                <div class="card-body">
  
                  <h3 class="card-title">Recent Projects <a class="link-btn" href="portfolio.html">All Projects
                      <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.16699 10H15.8337" stroke="#4770FF" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round" />
                        <path d="M10.833 15L15.833 10" stroke="#4770FF" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round" />
                        <path d="M10.833 5L15.833 10" stroke="#4770FF" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round" />
                      </svg>
  
                    </a></h3>
                  <div class="projects-main mt-24">
                    <div class="row g-4 parent-container">
                      <div class="col-lg-12">
                        <div class="project-item">
                          <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/project-1.png" alt="project-1" class="img-fluid w-100">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/projects/project-1.png"
                              class="gallery-popup full-image-preview parent-container">
                              <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                <path d="M10 4.167v11.666M4.167 10h11.666"></path>
                              </svg>
                            </a>
                            <div class="info">
                              <span class="category">Product Design</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="project-item">
                          <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/projects/project-2.png" alt="project-2" class="img-fluid w-100">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/projects/project-2.png"
                              class="gallery-popup full-image-preview parent-container">
                              <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                <path d="M10 4.167v11.666M4.167 10h11.666"></path>
                              </svg>
                            </a>
                            <div class="info">
                              <span class="category">Product Design</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="services-area mt-24">
            <div class="row g-4">
              <div class="col-xl-8">
                <div class="card services-card">
                  <div class="card-body">
                    <h3 class="card-title">Services I Offered
                      <a class="link-btn" href="services.html"> See All Services
                        <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <path d="M4.16699 10H15.8337" stroke="#4770FF" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                          <path d="M10.833 15L15.833 10" stroke="#4770FF" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                          <path d="M10.833 5L15.833 10" stroke="#4770FF" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        </svg>
  
                      </a></h3>
                    <div class="services-main mt-24">
                      <div class="row g-4">
                        <div class="col-md-3 col-sm-6 col-6">
                          <div class="services-item text-center">
                            <div class="image">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ui-ux.svg" alt="ui-ux">
                            </div>
                            <div class="text">
                              <h3 class="title">UI UX Design</h3>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6">
                          <div class="services-item text-center">
                            <div class="image">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/app.svg" alt="app">
                            </div>
                            <div class="text">
                              <h3 class="title">Mobile App</h3>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6">
                          <div class="services-item text-center">
                            <div class="image">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/prd-design.svg" alt="prd-design">
                            </div>
                            <div class="text">
                              <h3 class="title">Product Design</h3>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6">
                          <div class="services-item text-center">
                            <div class="image">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/branding.svg" alt="branding">
                            </div>
                            <div class="text">
                              <h3 class="title">Branding</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4">
                <div class="card lets-talk-together-card">
                  <div class="card-body">
                    <div class="scrolling-info">
                      <div class="slider-item">
                        <p>
                          Available For Hire 🚀 Crafting Digital Experiences 🎨 Available For Hire 🚀 Crafting Digital
                          Experiences 🎨
                        </p>
                      </div>
                    </div>
                    <h3 class="card-title">Let's👋
                      <span class="d-block">Work Together</span>
                    </h3>
                    <a class="link-btn" href="contact.html"> Let's Talk
                      <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.5 11.6665V6.6665H12.5" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round" />
                        <path d="M17.5 6.6665L10 14.1665L2.5 6.6665" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- background shape area start -->
      <div class="background-shapes">
        <div class="shape-1 common-shape">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg/banner-shape-1.png" alt="banner-shape-1">
        </div>
        <div class="shape-2 common-shape">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg/banner-shape-1.png" alt="banner-shape-1">
        </div>
        <div class="threed-shape-1 move-with-cursor" data-value="1">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg/object-3d-1.png" alt="object-3d-1">
        </div>
        <div class="threed-shape-2 move-with-cursor" data-value="1">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg/object-3d-2.png" alt="object-3d-2">
        </div>
      </div>
      <!-- background shape area end -->
    </main>
    <!-- main area part end -->

    <?php get_footer(); ?>