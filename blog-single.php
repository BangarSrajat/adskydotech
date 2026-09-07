<?php
session_start();
$pageTitle = "Best Software Development Company in India | YourCompany";
$pageDescription = "We provide WordPress, PHP, Shopify & Ecommerce development services.";
$pageKeywords = "software development, wordpress development, php development";
include 'includes/config.php';
include 'includes/header.php';

$id = intval($_GET['id'] ?? 0);

/* current blog post */
$query = mysqli_query($conn, "SELECT * FROM blog_posts WHERE id = '$id'");
$row = mysqli_fetch_assoc($query);

// Agar post exist nahi karta to redirect ya error dikhao
if (!$row) {
    echo "<div class='container section-py'><p>Blog post not found.</p></div>";
    include 'includes/footer.php';
    exit;
}

$pageTitle       = $row['title'] . " | YourCompany";
$pageDescription = substr(strip_tags($row['description']), 0, 160);

/* recent posts (sidebar) */
$recent = mysqli_query($conn, "SELECT id, title, image FROM blog_posts WHERE id != '$id' ORDER BY id DESC LIMIT 3");

/* previous / next post */
$prevQuery = mysqli_query($conn, "SELECT id, title FROM blog_posts WHERE id < '$id' ORDER BY id DESC LIMIT 1");
$prev = mysqli_fetch_assoc($prevQuery);

$nextQuery = mysqli_query($conn, "SELECT id, title FROM blog_posts WHERE id > '$id' ORDER BY id ASC LIMIT 1");
$next = mysqli_fetch_assoc($nextQuery);

/* tags (agar comma-separated column me stored hain) */
$tagsArray = !empty($row['tags']) ? explode(',', $row['tags']) : [];

/* comments (agar blog_comments table hai) */
// $comments = mysqli_query($conn, "SELECT * FROM blog_comments WHERE blog_id = '$id' ORDER BY created_at ASC");
// $commentCount = $comments ? mysqli_num_rows($comments) : 0;
?>

<section class="page-hero page-hero--blog">
  <div class="page-hero-blob page-hero-blob-1"></div>
  <div class="page-hero-blob page-hero-blob-2"></div>
  <div class="container">
    <div class="page-hero-content" data-aos="fade-up">
      <div class="page-hero-tag"><?php echo htmlspecialchars($row['category'] ?? 'Article'); ?></div>
      <h1 class="page-hero-title"><?php echo htmlspecialchars($row['title']); ?></h1>
      <div class="blog-post-meta-hero">
        <img src="uploads/<?php echo htmlspecialchars($row['author_img'] ?? 'default-author.jpg'); ?>"
          alt="<?php echo htmlspecialchars($row['author_name'] ?? 'Author'); ?>" class="blog-post-author-img" />
        <div>
          <strong><?php echo htmlspecialchars($row['author_name'] ?? 'Admin'); ?></strong>
          &mdash; <?php echo htmlspecialchars($row['author_role'] ?? 'Editor'); ?>
          <div class="d-flex flex-wrap gap-3 mt-1 blog-post-meta-date">
            <span><i class="fa-solid fa-calendar me-1"></i><?php echo date('M d, Y', strtotime($row['created_at'])); ?></span>
            <span><i class="fa-regular fa-clock me-1"></i><?php echo htmlspecialchars($row['read_time'] ?? '5 min read'); ?></span>
          
          </div>
        </div>
      </div>
      <nav class="breadcrumb-custom mt-4">
        <div class="breadcrumb-item-custom"><a href="index.php">Home</a></div>
        <span class="breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></span>
        <div class="breadcrumb-item-custom"><a href="blog.php">Blog</a></div>
        <span class="breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></span>
        <div class="breadcrumb-item-custom active"><?php echo htmlspecialchars($row['title']); ?></div>
      </nav>
    </div>
  </div>
</section>

<!-- Article + Sidebar -->
<section class="section-py">
  <div class="container">
    <div class="row g-5">

      <!-- Article Column -->
      <div class="col-lg-8">

        <!-- Cover Image -->
        <div >
          <img src="uploads/<?php echo htmlspecialchars($row['image']); ?>"
            alt="<?php echo htmlspecialchars($row['alt_text'] ?? $row['title']); ?>" loading="lazy" />
        </div>

        <!-- Article Body -->
        <div class="article-body" data-aos="fade-up">
          <?php echo $row['description']; // agar HTML content hai to bina strip kiye echo karo ?>
        </div><!-- /article-body -->

       
          

        <!-- Author Card -->
      

        <!-- Prev / Next Navigation -->
        <div class="article-post-nav" data-aos="fade-up">
          <?php if ($prev): ?>
            <a href="blog-single.php?id=<?php echo $prev['id']; ?>" class="article-nav-item">
              <div class="article-nav-label"><i class="fa-solid fa-arrow-left"></i> Previous</div>
              <div class="article-nav-title"><?php echo htmlspecialchars($prev['title']); ?></div>
            </a>
          <?php else: ?>
            <span></span>
          <?php endif; ?>

          <?php if ($next): ?>
            <a href="blog-single.php?id=<?php echo $next['id']; ?>" class="article-nav-item article-nav-item--next">
              <div class="article-nav-label">Next <i class="fa-solid fa-arrow-right"></i></div>
              <div class="article-nav-title"><?php echo htmlspecialchars($next['title']); ?></div>
            </a>
          <?php endif; ?>
        </div>

      

      </div><!-- /col-lg-8 -->

      <!-- Sidebar -->
      <div class="col-lg-4">
        <aside class="blog-sidebar" data-aos="fade-left">

          <!-- Search -->
          <div class="sw">
            <div class="sw-title">Search</div>
            <form action="blog.php" method="GET" class="sw-search">
              <input type="text" name="search" class="sw-search-input" placeholder="Search articles&hellip;" aria-label="Search articles" />
              <button type="submit" class="sw-search-btn" aria-label="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
          </div>

          <!-- Recent Posts -->
          <div class="sw">
            <div class="sw-title">Recent Posts</div>
            <div class="sw-recent">
              <?php while ($r = mysqli_fetch_assoc($recent)): ?>
                <a href="blog-single.php?id=<?php echo $r['id']; ?>" class="sw-recent-item">
                  <img src="uploads/<?php echo htmlspecialchars($r['image']); ?>" alt="<?php echo htmlspecialchars($r['title']); ?>" class="sw-recent-img" loading="lazy" />
                  <div class="sw-recent-info">
                    <div class="sw-recent-title"><?php echo htmlspecialchars($r['title']); ?></div>
                  </div>
                </a>
              <?php endwhile; ?>
            </div>
          </div>

          <!-- Contact CTA -->
          <div class="sw-contact-cta">
            <div class="sw-contact-cta-glow"></div>
            <div class="sw-contact-cta-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.98.5-2.5 0-3l-3-3c-.5-.5-2.02-.71-3 0z"></path><path d="M12 15l-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path></svg>
            </div>
            <h2 class="sw-contact-cta-title h4">Have a Project in Mind?</h2>
            <p class="sw-contact-cta-text">Let's build something great together. Our team is ready to turn your idea into reality.</p>
            <a href="contact.php" class="sw-contact-cta-btn">Get in Touch <i class="fa-solid fa-arrow-right"></i></a>
          </div>

        </aside>
      </div><!-- /col-lg-4 -->

    </div><!-- /row -->
  </div>
</section>

<?php include 'includes/footer.php'; ?>