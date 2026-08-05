<body>
<?php 

$pageTitle = "Best Software Development Company in India | YourCompany";
$pageDescription = "We provide WordPress, PHP, Shopify & Ecommerce development services.";
$pageKeywords = "software development, wordpress development, php development";

include 'includes/header.php';

?>

 <!-- Page Hero -->
  <section class="page-hero">
    <div class="page-hero-blob page-hero-blob-1"></div>
    <div class="page-hero-blob page-hero-blob-2"></div>
    <div class="container">
      <div class="page-hero-content" data-aos="fade-up">
        <div class="page-hero-tag">Our Work</div>
        <h1 class="page-hero-title">240+ Projects, <br />One Standard of Excellence</h1>
        <p class="page-hero-text">From seed-stage startups to Fortune 500 enterprises every project gets the same
          obsessive attention to quality.</p>
        <nav class="breadcrumb-custom">
          <div class="breadcrumb-item-custom"><a href="index">Home</a></div>
          <span class="breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></span>
          <div class="breadcrumb-item-custom active">Portfolio</div>
        </nav>
      </div>
    </div>
  </section>

  <!-- Portfolio -->
  <section class="section-py">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <div class="section-tag">Our Work</div>
        <h2 class="section-title">Selected <span class="text-gradient">Case Studies</span></h2>
        <p class="section-subtitle mx-auto">A curated selection of our most impactful projects across industries.</p>
      </div>
      <!-- Filter Buttons -->
      <div class="portfolio-filters mb-5" data-aos="fade-up" data-aos-delay="100">
        <button class="portfolio-filter-btn active" data-filter="*">All Projects</button>
        <button class="portfolio-filter-btn" data-filter=".cat-web">Web Apps</button>
        <button class="portfolio-filter-btn" data-filter=".cat-mobile">Mobile</button>
        <button class="portfolio-filter-btn" data-filter=".cat-ai">AI & ML</button>
        <button class="portfolio-filter-btn" data-filter=".cat-cloud">Cloud</button>
        <button class="portfolio-filter-btn" data-filter=".cat-design">UI/UX</button>
      </div>

      <!-- Grid -->
      <div class="portfolio-grid" id="portfolio-grid">
        <!-- Item 1 -->
        <div class="col-md-6 col-lg-4 portfolio-item cat-web cat-ai" data-aos="fade-up">
          <a href="portfolio-single" class="portfolio-card d-block">
            <img src="assets/img/portfolio/port-1.jpg" alt="FinTrack Dashboard" class="portfolio-card-img"
              loading="lazy" />
            <div class="portfolio-card-overlay">
              <div class="portfolio-card-info">
                <div class="portfolio-card-cat">Web App AI</div>
                <div class="portfolio-card-title">FinTrack Dashboard</div>
                <div class="portfolio-card-actions">
                  <span class="portfolio-card-btn">View Case Study <i class="fa-solid fa-arrow-right"></i></span>
                </div>
              </div>
            </div>
          </a>
        </div>

        <!-- Item 2 -->
        <div class="col-md-6 col-lg-4 portfolio-item cat-mobile" data-aos="fade-up" data-aos-delay="100">
          <a href="portfolio-single" class="portfolio-card d-block">
            <img src="assets/img/portfolio/port-2.jpg" alt="Pulse Health App" class="portfolio-card-img"
              loading="lazy" />
            <div class="portfolio-card-overlay">
              <div class="portfolio-card-info">
                <div class="portfolio-card-cat">Mobile iOS & Android</div>
                <div class="portfolio-card-title">Pulse Health App</div>
                <div class="portfolio-card-actions">
                  <span class="portfolio-card-btn">View Case Study <i class="fa-solid fa-arrow-right"></i></span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- Item 3 -->
        <div class="col-md-6 col-lg-4 portfolio-item cat-cloud cat-web" data-aos="fade-up" data-aos-delay="200">
          <a href="portfolio-single" class="portfolio-card d-block">
            <img src="assets/img/portfolio/port-3.jpg" alt="AuroraMart" class="portfolio-card-img" loading="lazy" />
            <div class="portfolio-card-overlay">
              <div class="portfolio-card-info">
                <div class="portfolio-card-cat">E-Commerce Cloud</div>
                <div class="portfolio-card-title">AuroraMart Platform</div>
                <div class="portfolio-card-actions">
                  <span class="portfolio-card-btn">View Case Study <i class="fa-solid fa-arrow-right"></i></span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- Item 4 -->
        <div class="col-md-6 col-lg-4 portfolio-item cat-ai" data-aos="fade-up">
          <a href="portfolio-single" class="portfolio-card d-block">
            <img src="assets/img/portfolio/port-4.jpg" alt="VisionSort AI" class="portfolio-card-img"
              loading="lazy" />
            <div class="portfolio-card-overlay">
              <div class="portfolio-card-info">
                <div class="portfolio-card-cat">AI Computer Vision</div>
                <div class="portfolio-card-title">VisionSort AI System</div>
                <div class="portfolio-card-actions">
                  <span class="portfolio-card-btn">View Case Study <i class="fa-solid fa-arrow-right"></i></span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- Item 5 -->
        <div class="col-md-6 col-lg-4 portfolio-item cat-design cat-web" data-aos="fade-up" data-aos-delay="100">
          <a href="portfolio-single" class="portfolio-card d-block">
            <img src="assets/img/portfolio/port-5.jpg" alt="Zena SaaS" class="portfolio-card-img" loading="lazy" />
            <div class="portfolio-card-overlay">
              <div class="portfolio-card-info">
                <div class="portfolio-card-cat">SaaS UI/UX</div>
                <div class="portfolio-card-title">Zena SaaS Platform</div>
                <div class="portfolio-card-actions">
                  <span class="portfolio-card-btn">View Case Study <i class="fa-solid fa-arrow-right"></i></span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- Item 6 -->
        <div class="col-md-6 col-lg-4 portfolio-item cat-cloud" data-aos="fade-up" data-aos-delay="200">
          <a href="portfolio-single" class="portfolio-card d-block">
            <img src="assets/img/portfolio/port-6.jpg" alt="CloudNest" class="portfolio-card-img" loading="lazy" />
            <div class="portfolio-card-overlay">
              <div class="portfolio-card-info">
                <div class="portfolio-card-cat">Cloud DevOps</div>
                <div class="portfolio-card-title">CloudNest Infrastructure</div>
                <div class="portfolio-card-actions">
                  <span class="portfolio-card-btn">View Case Study <i class="fa-solid fa-arrow-right"></i></span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- Item 7 -->
        <div class="col-md-6 col-lg-4 portfolio-item cat-mobile cat-design" data-aos="fade-up">
          <a href="portfolio-single" class="portfolio-card d-block">
            <img src="assets/img/portfolio/port-7.jpg" alt="Nomad App" class="portfolio-card-img" loading="lazy" />
            <div class="portfolio-card-overlay">
              <div class="portfolio-card-info">
                <div class="portfolio-card-cat">Mobile UI/UX</div>
                <div class="portfolio-card-title">Nomad Travel App</div>
                <div class="portfolio-card-actions">
                  <span class="portfolio-card-btn">View Case Study <i class="fa-solid fa-arrow-right"></i></span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- Item 8 -->
        <div class="col-md-6 col-lg-4 portfolio-item cat-web cat-design" data-aos="fade-up" data-aos-delay="100">
          <a href="portfolio-single" class="portfolio-card d-block">
            <img src="assets/img/portfolio/port-8.jpg" alt="Orbit CMS" class="portfolio-card-img" loading="lazy" />
            <div class="portfolio-card-overlay">
              <div class="portfolio-card-info">
                <div class="portfolio-card-cat">Web App Design</div>
                <div class="portfolio-card-title">Orbit Content Platform</div>
                <div class="portfolio-card-actions">
                  <span class="portfolio-card-btn">View Case Study <i class="fa-solid fa-arrow-right"></i></span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- Item 9 -->
        <div class="col-md-6 col-lg-4 portfolio-item cat-ai cat-cloud" data-aos="fade-up" data-aos-delay="200">
          <a href="portfolio-single" class="portfolio-card d-block">
            <img src="assets/img/portfolio/port-9.jpg" alt="Synthex AI" class="portfolio-card-img"
              loading="lazy" />
            <div class="portfolio-card-overlay">
              <div class="portfolio-card-info">
                <div class="portfolio-card-cat">AI Data Engineering</div>
                <div class="portfolio-card-title">Synthex Data Engine</div>
                <div class="portfolio-card-actions">
                  <span class="portfolio-card-btn">View Case Study <i class="fa-solid fa-arrow-right"></i></span>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>

      <!-- Load More -->
      <div class="text-center mt-5" data-aos="fade-up">
        <button class="btn-outline-custom">Load More Projects <i class="fa-solid fa-arrow-down"></i></button>
      </div>
    </div>
  </section>

  <!-- Counter -->
  <div class="section-py counter-section" id="stats">
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
          <div class="counter-item">
            <div class="counter-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 5H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-2"/><rect x="9" y="3" width="6" height="4" rx="1"/><path d="m9 12 2 2 4-4"/></svg></div>
            <div class="counter-value">
              <span class="counter-number" data-count="400" data-suffix="+">400+</span>
            </div>
            <div class="counter-label">Projects Completed</div>
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <div class="counter-item">
            <div class="counter-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
            <div class="counter-value">
              <span class="counter-number" data-count="2000" data-suffix="+">2000+</span>
            </div>
            <div class="counter-label">Happy Clients</div>
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <div class="counter-item">
            <div class="counter-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/><path d="M7 4h10l-1 7a5 5 0 0 1-10 0z"/><path d="M17 4h3v3a3 3 0 0 1-3 3"/><path d="M7 4H4v3a3 3 0 0 0 3 3"/></svg></div>
            <div class="counter-value">
              <span class="counter-number" data-count="48" data-suffix="+">48+</span>
            </div>
            <div class="counter-label">Industry Awards</div>
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="counter-item">
            <div class="counter-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></div>
            <div class="counter-value">
              <span class="counter-number" data-count="32" data-suffix="+">32+</span>
            </div>
            <div class="counter-label">Countries Served</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CTA -->
  <section class="cta-section section-py section-border-none">
    <div class="cta-blob cta-blob-1"></div>
    <div class="cta-blob cta-blob-2"></div>
    <div class="container">
      <div class="cta-content text-center" data-aos="fade-up">
        <div class="section-tag mx-auto section-tag--cta">Your Project Next</div>
        <h2 class="cta-title mt-3">Have a Project in Mind?</h2>
        <p class="cta-text">Join 180+ companies that trust NexVera to build their most ambitious technology products.
        </p>
        <div class="d-flex justify-content-center flex-wrap gap-3 mt-4">
          <a href="contact" class="btn-white-custom">Start Your Project <i class="fa-solid fa-arrow-right"></i></a>
          <a href="pricing" class="btn-ghost-white">View Pricing</a>
        </div>
      </div>
    </div>
  </section>
<?php include 'includes/footer.php';?>
</body>