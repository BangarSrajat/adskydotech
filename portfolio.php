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

    <section class="section-py">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6" data-aos="fade-right">
          <div class="about-image-wrap">
            <div class="about-exp-badge">
              <div class="about-exp-number">12+</div>
              <div class="about-exp-text">Years of<br>Excellence</div>
            </div>
            <div class="about-image-main">
              <img src="assets/img/about/about-1.jpg" alt="NexVera Office" loading="lazy" />
            </div>
            <div class="about-image-accent">
              <img src="assets/img/about/about-3.jpg" alt="Team collaboration" loading="lazy" />
            </div>
          </div>
        </div>
        <div class="col-lg-6 pl-lg-5" data-aos="fade-left" data-aos-delay="150">
        
          
           <div class="faq-section" id="faq-process" data-aos="fade-up">
            <div class="faq-section-label"><i class="fa-solid fa-list-check"></i> Process &amp; Delivery</div>
            <div class="accordion faq-accordion" id="faqProcess">

              <div class="accordion-item faq-item">
                <h2 class="accordion-header">
                  <button class="accordion-button faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#proc1">
                    How do projects typically get started?
                  </button>
                </h2>
                <div id="proc1" class="accordion-collapse collapse show" data-bs-parent="#faqProcess">
                  <div class="accordion-body faq-body">We start with a scoping call (30–60 min) to understand your goals, constraints, and timeline. We then prepare a tailored proposal with a recommended team composition, engagement model, and projected roadmap. Once agreed, we kick off with an onboarding sprint to align on tooling, communication rhythms, and first deliverables.</div>
                </div>
              </div>

              <div class="accordion-item faq-item">
                <h2 class="accordion-header">
                  <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#proc2">
                    What methodology do you use — Agile, Scrum, Kanban?
                  </button>
                </h2>
                <div id="proc2" class="accordion-collapse collapse" data-bs-parent="#faqProcess">
                  <div class="accordion-body faq-body">We default to two-week Agile sprints with structured ceremonies — sprint planning, daily standups, sprint reviews, and retrospectives. If your team already uses Kanban or a custom workflow, we adapt to fit. We optimise for delivery, not adherence to a specific label.</div>
                </div>
              </div>

              <div class="accordion-item faq-item">
                <h2 class="accordion-header">
                  <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#proc3">
                    How do you handle project handoffs and documentation?
                  </button>
                </h2>
                <div id="proc3" class="accordion-collapse collapse" data-bs-parent="#faqProcess">
                  <div class="accordion-body faq-body">Every engagement ends with a structured handoff: full codebase documentation, architecture decision records (ADRs), deployment runbooks, and a knowledge-transfer session with your team. We want you to feel entirely independent after we leave — or confident enough to bring us back for the next phase.</div>
                </div>
              </div>

              <div class="accordion-item faq-item">
                <h2 class="accordion-header">
                  <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#proc4">
                    Do you sign NDAs?
                  </button>
                </h2>
                <div id="proc4" class="accordion-collapse collapse" data-bs-parent="#faqProcess">
                  <div class="accordion-body faq-body">Yes, we sign mutual NDAs before any substantive discussions. We understand that your ideas and product details are sensitive. Confidentiality is a baseline expectation, not an extra.</div>
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
  </section>


  <!-- ============================================================
       TESTIMONIALS
       ============================================================ -->
  <section class="section-py testimonials-section">
    <div class="container">

      <div class="text-center mb-5" data-aos="fade-up">
        <div class="section-tag">Client Reviews</div>
        <h2 class="section-title">What Our Clients <span class="text-gradient">Say About Us</span></h2>
      </div>

      <div class="swiper testimonials-swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-card">
              <span class="testimonial-quote">"</span>
              <div class="testimonial-rating">
                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                  class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
              </div>
              <p class="testimonial-text">Adskydo.tech delivered our entire platform in 4 months on time, on budget, and far
                exceeding our expectations. Their engineering quality is unmatched.</p>
              <div class="testimonial-author">
                <img src="assets/img/avatars/user-1.jpg" alt="Alex Morgan" class="testimonial-avatar"
                  loading="lazy" />
                <div>
                  <div class="testimonial-name">Alex Morgan</div>
                  <div class="testimonial-role">CTO, Finova Corp</div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-card">
              <span class="testimonial-quote">"</span>
              <div class="testimonial-rating">
                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                  class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
              </div>
              <p class="testimonial-text">The AI pipeline they built for us processes 2M events per day with 99.97%
                accuracy. The ROI was visible within the first quarter after launch.</p>
              <div class="testimonial-author">
                <img src="assets/img/avatars/user-2.jpg" alt="Priya Sharma"
                  class="testimonial-avatar" loading="lazy" />
                <div>
                  <div class="testimonial-name">Priya Sharma</div>
                  <div class="testimonial-role">Head of Data, NovaSys</div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-card">
              <span class="testimonial-quote">"</span>
              <div class="testimonial-rating">
                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                  class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i>
              </div>
              <p class="testimonial-text">From discovery to launch, the Adskydo.tech team was a true partner. The
                communication, design thinking, and code quality are at a completely different level.</p>
              <div class="testimonial-author">
                <img src="assets/img/avatars/user-3.jpg" alt="Carlos Mendez" class="testimonial-avatar"
                  loading="lazy" />
                <div>
                  <div class="testimonial-name">Carlos Mendez</div>
                  <div class="testimonial-role">CEO, Axiom Ventures</div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-card">
              <span class="testimonial-quote">"</span>
              <div class="testimonial-rating">
                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                  class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
              </div>
              <p class="testimonial-text">Our mobile app went from concept to the App Store in 90 days. 50,000 downloads
                in the first month. Adskydo.tech made the impossible happen.</p>
              <div class="testimonial-author">
                <img src="assets/img/avatars/user-4.jpg" alt="Sarah Chen" class="testimonial-avatar"
                  loading="lazy" />
                <div>
                  <div class="testimonial-name">Sarah Chen</div>
                  <div class="testimonial-role">Founder, FitPulse</div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="swiper-pagination swiper-pagination-custom mt-4"></div>
      </div>

    </div>
  </section>
<?php include 'includes/footer.php';?>
</body>