/*-----------------------------------------------------------------------------------

    Template Name: NexVera â€“ Technology & IT Solutions HTML Template HTML Template
    Author: Themiverse
    Support: techsupport@themiverse.com
    Description: NexVera â€“ Technology Solutions HTML Template
    Version: 1.0

-----------------------------------------------------------------------------------
   TABLE OF CONTENTS
   01. Preloader
   02. Navbar Scroll & Mobile Toggle
   03. AOS (Animate on Scroll)
   04. Typed.js (Hero Typing)
   05. CountUp.js (Animated Counters)
   06. Swiper (Testimonials & Sliders)
   07. Portfolio Filter (Vanilla JS)
   08. GLightbox (Lightbox)
   09. Back to Top
   10. Pricing Toggle
   11. Sticky Active Nav
   12. Form Submission
   13. Info Panel
   14. Faqs Tabs Active State
   ============================================================ */

(function () {
  "use strict";

  /* ============================================================
     01. PRELOADER
     ============================================================ */
  function initPreloader() {
    var preloader = document.querySelector(".preloader");
    if (!preloader) return;
    document.body.style.overflow = "hidden";
    window.addEventListener("load", function () {
      setTimeout(function () {
        preloader.classList.add("fade-content");
        setTimeout(function () {
          preloader.classList.add("slide-up");
          setTimeout(function () {
            preloader.style.display = "none";
            document.body.style.overflow = "";
          }, 900);
        }, 300);
      }, 1600);
    });
  }

  /* ============================================================
     02. NAVBAR SCROLL & MOBILE TOGGLE
     ============================================================ */
  function initNavbar() {
    var header = document.querySelector(".site-header");
    if (!header) return;

    /* Scroll effect â€” add shadow when user scrolls */
    function onScroll() {
      if (window.scrollY > 50) {
        header.classList.add("scrolled");
      } else {
        header.classList.remove("scrolled");
      }
    }
    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();

    /* Mobile toggle */
    var toggler = document.querySelector(".navbar-toggler-custom");
    var nav = document.querySelector(".main-nav");


    function openNav() {
      if (!nav) return;
      nav.classList.add("is-open");
      header.classList.add("is-open");
      document.body.style.overflow = "hidden";
    }

    function closeNav() {
      if (!nav) return;
      nav.classList.remove("is-open");
      header.classList.remove("is-open");
      document.body.style.overflow = "";
    }

    if (toggler) toggler.addEventListener("click", function () {
      if (nav && nav.classList.contains("is-open")) { closeNav(); } else { openNav(); }
    });

    /* Close panel on any nav link or dropdown link click (mobile) */
    var navLinks = document.querySelectorAll(".main-nav .nav-link:not(.nav-link-parent)");
    navLinks.forEach(function (link) {
      link.addEventListener("click", function () {
        if (window.innerWidth < 1200) closeNav();
      });
    });
    document.querySelectorAll(".nav-dropdown-link").forEach(function (link) {
      link.addEventListener("click", function () {
        if (window.innerWidth < 1200) closeNav();
      });
    });

    /* Active link â€” covers both top-level and dropdown links */
    var currentPath = window.location.pathname.split("/").pop() || "index.html";
    navLinks.forEach(function (link) { link.classList.remove("active"); });
    document.querySelectorAll(".nav-dropdown-link").forEach(function (link) { link.classList.remove("active"); });
    navLinks.forEach(function (link) {
      if (link.getAttribute("href") === currentPath) link.classList.add("active");
    });
    document.querySelectorAll(".nav-dropdown-link").forEach(function (link) {
      if (link.getAttribute("href") === currentPath) {
        link.classList.add("active");
        var parentLink = link.closest(".nav-item-dropdown") && link.closest(".nav-item-dropdown").querySelector(".nav-link-parent");
        if (parentLink) parentLink.classList.add("active");
      }
    });

    /* Mobile accordion for dropdown items */
    document.querySelectorAll(".nav-link-parent").forEach(function (parentLink) {
      parentLink.addEventListener("click", function (e) {
        if (window.innerWidth >= 1200) return;
        e.preventDefault();
        var dropdown = this.closest(".nav-item-dropdown").querySelector(".nav-dropdown");
        var isOpen = this.classList.contains("is-open");
        document.querySelectorAll(".nav-link-parent.is-open").forEach(function (l) {
          l.classList.remove("is-open");
          var d = l.closest(".nav-item-dropdown").querySelector(".nav-dropdown");
          if (d) d.classList.remove("is-open");
        });
        if (!isOpen) {
          this.classList.add("is-open");
          if (dropdown) dropdown.classList.add("is-open");
        }
      });
    });
  }

  /* ============================================================
     03. AOS â€” ANIMATE ON SCROLL
     ============================================================ */
  function initAOS() {
    if (typeof AOS === "undefined") return;
    AOS.init({
      duration: 700,
      easing: "cubic-bezier(0.4, 0, 0.2, 1)",
      once: true,
      offset: 60,
      delay: 0,
    });

    /* Images/fonts still loading at DOMContentLoaded can shift layout after
       AOS has already cached element offsets, leaving elements stuck
       mid-animation (off-screen transform never cleared). Recalculate once
       everything has actually finished loading. */
    window.addEventListener("load", function () {
      AOS.refresh();
    });
  }

  /* ============================================================
     04. TYPED.JS â€” HERO TYPING EFFECT
     ============================================================ */
  function initTyped() {
    if (typeof Typed === "undefined") return;
    var el = document.querySelector(".hero-typed");
    if (!el) return;
    var strings = el.getAttribute("data-typed-strings");
    if (!strings) return;
    new Typed(".hero-typed", {
      strings: JSON.parse(strings),
      typeSpeed: 65,
      backSpeed: 40,
      backDelay: 2200,
      loop: true,
      cursorChar: "|",
      smartBackspace: true,
    });
  }

  /* ============================================================
     05. COUNTUP.JS â€” ANIMATED COUNTERS
     ============================================================ */
  function initCounters() {
    var CULib = typeof countUp !== "undefined" ? countUp
      : typeof CountUp !== "undefined" ? CountUp : null;
    if (!CULib) return;
    var CUClass = CULib.CountUp || CULib;

    var counters = document.querySelectorAll(".counter-number");
    if (!counters.length) return;

    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            var el = entry.target;
            var end = parseFloat(el.getAttribute("data-count")) || 0;
            var decimals = el.getAttribute("data-decimals") || 0;
            var suffix = el.getAttribute("data-suffix") || "";
            var opts = {
              startVal: 0,
              duration: 2.2,
              decimalPlaces: parseInt(decimals, 10),
              suffix: suffix,
              useEasing: true,
              useGrouping: true,
              separator: ",",
            };
            var cu = new CUClass(el, end, opts);
            if (!cu.error) cu.start();
            observer.unobserve(el);
          }
        });
      },
      { threshold: 0.2 }
    );

    counters.forEach(function (counter) {
      observer.observe(counter);
    });
  }

  /* ============================================================
     06. SWIPER â€” SLIDERS
     ============================================================ */
  function initSwipers() {
    if (typeof Swiper === "undefined") return;

    /* Testimonials */
    var testSwiper = document.querySelector(".testimonials-swiper");
    if (testSwiper) {
      new Swiper(".testimonials-swiper", {
        slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        autoplay: { delay: 5000, disableOnInteraction: false },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          640: { slidesPerView: 2 },
          1024: { slidesPerView: 3 },
        },
      });
    }

    /* Hero slider (if needed) */
    var heroSwiper = document.querySelector(".hero-swiper");
    if (heroSwiper) {
      new Swiper(".hero-swiper", {
        slidesPerView: 1,
        loop: true,
        autoplay: { delay: 6000, disableOnInteraction: false },
        effect: "fade",
        fadeEffect: { crossFade: true },
        pagination: { el: ".hero-swiper-pagination", clickable: true },
      });
    }

    /* Blog slider */
    var blogSwiper = document.querySelector(".blog-swiper");
    if (blogSwiper) {
      new Swiper(".blog-swiper", {
        slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        autoplay: { delay: 4500, disableOnInteraction: false },
        navigation: {
          nextEl: ".blog-swiper-next",
          prevEl: ".blog-swiper-prev",
        },
        breakpoints: {
          640: { slidesPerView: 2 },
          1024: { slidesPerView: 3 },
        },
      });
    }
  }

  /* ============================================================
     07. PORTFOLIO FILTER (Vanilla JS â€” no external library)
     ============================================================ */
  function initPortfolioFilter() {
    var grid = document.querySelector(".portfolio-grid");
    if (!grid) return;

    var itemSel = grid.querySelector(".portfolio-item") ? ".portfolio-item" : ".portfolio-grid-item";
    var items = grid.querySelectorAll(itemSel);
    var filterBtns = document.querySelectorAll(".portfolio-filter-btn");

    filterBtns.forEach(function (btn) {
      btn.addEventListener("click", function () {
        filterBtns.forEach(function (b) {
          b.classList.remove("active");
        });
        btn.classList.add("active");

        var filter = btn.getAttribute("data-filter");
        var filterClass = filter === "*" ? null : filter.replace(".", "");

        items.forEach(function (item) {
          var show = !filterClass || item.classList.contains(filterClass);
          item.style.display = show ? "" : "none";
        });
      });
    });
  }

  /* ============================================================
     08. GLIGHTBOX â€” LIGHTBOX
     ============================================================ */
  function initGLightbox() {
    if (typeof GLightbox === "undefined") return;
    GLightbox({
      selector: ".glightbox",
      touchNavigation: true,
      loop: true,
      autoplayVideos: true,
    });
    GLightbox({
      selector: ".portfolio-glightbox",
      touchNavigation: true,
      loop: true,
    });
  }

  /* ============================================================
     09. BACK TO TOP
     ============================================================ */
  function initBackToTop() {
    var btn = document.querySelector(".back-to-top");
    if (!btn) return;

    window.addEventListener(
      "scroll",
      function () {
        if (window.scrollY > 400) {
          btn.classList.add("visible");
        } else {
          btn.classList.remove("visible");
        }
      },
      { passive: true }
    );

    btn.addEventListener("click", function () {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }

  /* ============================================================
     10. PRICING TOGGLE (MONTHLY / ANNUAL)
     ============================================================ */
  function initPricingToggle() {
    var toggle = document.querySelector(".pricing-toggle-input");
    if (!toggle) return;

    var monthly = document.querySelectorAll(".price-monthly");
    var annual = document.querySelectorAll(".price-annual");

    function updatePrices() {
      if (toggle.checked) {
        monthly.forEach(function (el) {
          el.classList.remove("d-inline");
          el.classList.add("d-none");
        });
        annual.forEach(function (el) {
          el.classList.remove("d-none");
          el.classList.add("d-inline");
        });
      } else {
        monthly.forEach(function (el) {
          el.classList.remove("d-none");
          el.classList.add("d-inline");
        });
        annual.forEach(function (el) {
          el.classList.remove("d-inline");
          el.classList.add("d-none");
        });
      }
    }

    toggle.addEventListener("change", updatePrices);
    updatePrices();
  }

  /* ============================================================
     11. STICKY ACTIVE NAV (SCROLL SPY)
     ============================================================ */
  function initScrollSpy() {
    var sections = document.querySelectorAll("section[id]");
    var navLinks = document.querySelectorAll(".main-nav .nav-link[href^='#']");
    if (!sections.length || !navLinks.length) return;

    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            navLinks.forEach(function (link) {
              link.classList.remove("active");
              if (link.getAttribute("href") === "#" + entry.target.id) {
                link.classList.add("active");
              }
            });
          }
        });
      },
      { threshold: 0.4 }
    );

    sections.forEach(function (section) {
      observer.observe(section);
    });
  }

  /* ============================================================
     12. FORM SUBMISSION
     ============================================================ */
  function initForms() {
    var forms = document.querySelectorAll(".contact-form-el");
    forms.forEach(function (form) {
      form.addEventListener("submit", function (e) {
        e.preventDefault();
        var btn = form.querySelector("[type='submit']");
        if (!btn) return;
        var originalText = btn.innerHTML;
        btn.innerHTML =
          '<i class="fa-solid fa-arrows-rotate" style="animation:spin 0.6s linear infinite;display:inline-block"></i> Sending...';
        btn.disabled = true;
        setTimeout(function () {
          btn.innerHTML = '<i class="fa-solid fa-circle-check"></i> Message Sent!';
          btn.style.background = "#13C2A3";
          btn.style.borderColor = "#13C2A3";
          setTimeout(function () {
            btn.innerHTML = originalText;
            btn.disabled = false;
            btn.style.background = "";
            btn.style.borderColor = "";
            form.reset();
          }, 3000);
        }, 1800);
      });
    });

    /* Newsletter form */
    var newsletterForms = document.querySelectorAll(".newsletter-form-el");
    newsletterForms.forEach(function (form) {
      form.addEventListener("submit", function (e) {
        e.preventDefault();
        var input = form.querySelector("input[type='email']");
        if (!input || !input.value) return;
        var btn = form.querySelector("button");
        if (!btn) return;
        btn.innerHTML = "âœ“";
        btn.style.background = "#13C2A3";
        setTimeout(function () {
          btn.innerHTML = "Subscribe";
          btn.style.background = "";
          if (input) input.value = "";
        }, 2500);
      });
    });
  }

  /* ============================================================
     13. INFO PANEL 
     ============================================================ */
  function initInfoPanel() {
    var triggerBtn = document.querySelector(".info-panel-btn");
    var panel = document.querySelector(".info-panel");
    var overlay = document.querySelector(".info-panel-overlay");
    if (!triggerBtn || !panel || !overlay) return;

    function openPanel() {
      panel.classList.add("is-open");
      overlay.classList.add("is-open");
      document.body.style.overflow = "hidden";
    }

    function closePanel() {
      panel.classList.remove("is-open");
      overlay.classList.remove("is-open");
      document.body.style.overflow = "";
    }

    triggerBtn.addEventListener("click", openPanel);
    overlay.addEventListener("click", closePanel);
    panel.querySelector(".info-panel-close").addEventListener("click", closePanel);
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape") closePanel();
    });
  }

  /* ============================================================
      14. Faqs Tabs Active State
      ============================================================ */
  const links = document.querySelectorAll('.faq-cat-link');
  const sections = ['faq-general', 'faq-pricing', 'faq-process', 'faq-technical', 'faq-support'].map(id => document.getElementById(id));
  function onScroll() {
    let current = sections[0];
    sections.forEach(sec => { if (sec && window.scrollY + 140 >= sec.offsetTop) current = sec; });
    links.forEach(l => {
      l.classList.toggle('active', current && l.getAttribute('href') === '#' + current.id);
    });
  }
  window.addEventListener('scroll', onScroll, { passive: true });

  /* ============================================================
     INIT ALL
     ============================================================ */
  document.addEventListener("DOMContentLoaded", function () {
    initPreloader();
    initNavbar();
    initInfoPanel();
    initAOS();
    initTyped();
    initCounters();
    initSwipers();
    initPortfolioFilter();
    initGLightbox();
    initBackToTop();
    initPricingToggle();
    initScrollSpy();
    initForms();
  });
})();