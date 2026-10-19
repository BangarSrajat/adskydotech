<?php
session_start();
include 'includes/config.php';

$slug = trim($_GET['slug'] ?? '');
$id   = intval($_GET['id'] ?? 0);

/* current blog post: slug se, ya purane ?id= URL ke liye id se */
if ($slug !== '') {
    $stmt = mysqli_prepare($conn, "SELECT * FROM blog_posts WHERE slug = ? LIMIT 1");
    mysqli_stmt_bind_param($stmt, "s", $slug);
} else {
    $stmt = mysqli_prepare($conn, "SELECT * FROM blog_posts WHERE id = ? LIMIT 1");
    mysqli_stmt_bind_param($stmt, "i", $id);
}
mysqli_stmt_execute($stmt);
$row = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));

/* Agar post exist nahi karta */
if (!$row) {
    http_response_code(404);
    $pageTitle       = "Blog post not found | YourCompany";
    $pageDescription = "The requested blog post could not be found.";
    include 'includes/header.php';
    echo "<div class='container section-py'><p>Blog post not found.</p></div>";
    include 'includes/footer.php';
    exit;
}

$id = (int)$row['id'];

/* purana ?id= URL aaye to 301 redirect naye blog/slug URL par */
if ($slug === '' && !empty($row['slug'])) {
    header("Location: " . rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\') . "/blog/" . $row['slug'], true, 301);
    exit;
}

/* SEO title/description (header.php se PEHLE set hona zaroori hai) */
$pageTitle       = $row['title'] . " | YourCompany";
$pageDescription = mb_substr(strip_tags($row['description']), 0, 160);

include 'includes/header.php';

$ip = $_SERVER['REMOTE_ADDR'];

/* 🔥 CHECK IF ALREADY VIEWED (abhi band) */
// $check = mysqli_query($conn, "SELECT id FROM blog_views 
// WHERE blog_id = '$id' AND ip_address = '$ip'");
// if(mysqli_num_rows($check) == 0){
//     mysqli_query($conn, "INSERT INTO blog_views (blog_id, ip_address) VALUES ('$id', '$ip')");
//     mysqli_query($conn, "UPDATE blog_posts SET views = views + 1 WHERE id = '$id'");
// }

/* recent posts (sidebar) */
$recent = mysqli_query($conn, "SELECT id, title, image, slug FROM blog_posts WHERE id != '$id' ORDER BY id DESC LIMIT 3");

/* previous / next post */
$prevQuery = mysqli_query($conn, "SELECT id, title, slug FROM blog_posts WHERE id < '$id' ORDER BY id DESC LIMIT 1");
$prev = mysqli_fetch_assoc($prevQuery);

$nextQuery = mysqli_query($conn, "SELECT id, title, slug FROM blog_posts WHERE id > '$id' ORDER BY id ASC LIMIT 1");
$next = mysqli_fetch_assoc($nextQuery);

/* tags (agar comma-separated column me stored hain) */
$tagsArray = !empty($row['tags']) ? explode(',', $row['tags']) : [];
?>

<section class="page-hero page-hero--blog">
  <div class="page-hero-blob page-hero-blob-1"></div>
  <div class="page-hero-blob page-hero-blob-2"></div>
  <div class="container">
    <div class="page-hero-content" data-aos="fade-up">
      <div class="page-hero-tag"><?php echo htmlspecialchars($row['category'] ?? 'Article'); ?></div>
      <h1 class="page-hero-title"><?php echo htmlspecialchars($row['title']); ?></h1>
       <div class="blog-post-meta-hero">
        
        <div> 
          <p class="sw-contact-cta-text">👁️ Views: <?php echo $row['views']; ?></p>
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
          <?php echo $row['description']; // HTML content hai, bina strip kiye echo ?>
        </div><!-- /article-body -->

        <!-- Prev / Next Navigation -->
        <div class="article-post-nav" data-aos="fade-up">
          <?php if ($prev): ?>
            <a href="<?php echo htmlspecialchars($prev['slug']); ?>" class="article-nav-item">
              <div class="article-nav-label"><i class="fa-solid fa-arrow-left"></i> Previous</div>
              <div class="article-nav-title"><?php echo htmlspecialchars($prev['title']); ?></div>
            </a>
          <?php else: ?>
            <span></span>
          <?php endif; ?>

          <?php if ($next): ?>
            <a href="<?php echo htmlspecialchars($next['slug']); ?>" class="article-nav-item article-nav-item--next">
              <div class="article-nav-label">Next <i class="fa-solid fa-arrow-right"></i></div>
              <div class="article-nav-title"><?php echo htmlspecialchars($next['title']); ?></div>
            </a>
          <?php endif; ?>
        </div>

      </div><!-- /col-lg-8 -->

      <!-- Sidebar -->
      <div class="col-lg-4">
        <aside class="blog-sidebar" data-aos="fade-left">

         

          <!-- Recent Posts -->
          <div class="sw">
            <div class="sw-title">Recent Posts</div>
            <div class="sw-recent">
              <?php while ($r = mysqli_fetch_assoc($recent)): ?>
                <a href="<?php echo htmlspecialchars($r['slug']); ?>" class="sw-recent-item">
                  <img src="uploads/<?php echo htmlspecialchars($r['image']); ?>" alt="<?php echo htmlspecialchars($r['title']); ?>" class="sw-recent-img" loading="lazy" />
                  <div class="sw-recent-info">
                    <div class="sw-recent-title"><?php echo htmlspecialchars($r['title']); ?></div>
                  </div>
                </a>
              <?php endwhile; ?>
            </div>
          </div>

         

        </aside>
      </div><!-- /col-lg-4 -->

    </div><!-- /row -->
  </div>
</section>

<?php include 'includes/footer.php'; ?>