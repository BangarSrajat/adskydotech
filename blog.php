<?php 
$pageTitle = "Best Software Development Company in India | YourCompany";
$pageDescription = "We provide WordPress, PHP, Shopify & Ecommerce development services.";
$pageKeywords = "software development, wordpress development, php development";
include 'includes/header.php';
include 'includes/config.php';
$limit = 6;

/* current page */
$page = isset($_GET['page']) ? $_GET['page'] : 1;

/* offset */
$offset = ($page - 1) * $limit;

/* fetch blogs */
$result = mysqli_query($conn,"SELECT * FROM blog_posts ORDER BY id DESC LIMIT $limit OFFSET $offset");

/* total blogs */
$total_query = mysqli_query($conn,"SELECT COUNT(*) as total FROM blog_posts");
$total_row = mysqli_fetch_assoc($total_query);
$total_blogs = $total_row['total'];

/* total pages */
$total_pages = ceil($total_blogs / $limit);
?>

<!-- Page Hero -->
  <section class="page-hero">
    <div class="page-hero-blob page-hero-blob-1"></div>
    <div class="page-hero-blob page-hero-blob-2"></div>
    <div class="container">
      <div class="page-hero-content" data-aos="fade-up">
        <div class="page-hero-tag">AdskydoTech Blog</div>
        <h1 class="page-hero-title">Ideas &amp; Insights From<br />The Engineering Floor</h1>
        <p class="page-hero-text">Deep dives on AI, architecture, product strategy, and the future of software from
          people building it daily.</p>
        <nav class="breadcrumb-custom">
          <div class="breadcrumb-item-custom"><a href="index">Home</a></div>
          <span class="breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></span>
          <div class="breadcrumb-item-custom active">Blog</div>
        </nav>
      </div>
    </div>
  </section>

<section class="section-py" id="blog">
    <div class="container">
      <div class="row g-4">
         <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
         

          <div class="blog-card">
            <div class="blog-card-img-wrap">
              <img src="uploads/<?php echo $row['image']; ?>" alt="<?php echo $row['alt_text']; ?>" class="blog-card-img"
                loading="lazy" />
            </div>
            <div class="blog-card-body">
            
              <a href="blog/<?php echo $row['slug']; ?>">
                <p>👁 view: <?php echo $row['views']; ?></p>
                <h2 class="blog-card-title "><?php echo $row['title']; ?></h2>
              </a>
              <p class="blog-card-excerpt"><?php echo substr(strip_tags($row['description']), 0, 120) . '...'; ?></p>
              <div class="blog-card-meta">
                <div class="blog-meta-author">
                 
                  
<a href="blog/<?php echo $row['slug']; ?>"><span class="blog-meta-name">Read More</span></a>
                </div>
                <!-- <span class="blog-meta-read"><i class="fa-regular fa-calendar"></i> Dec 14, 2024</span> -->
              </div>
              
            </div>
          
          </div>
           
        </div>
            <?php } ?>  
      </div>
      
    </div>
     <nav class="blog-pag-nav" data-aos="fade-up" aria-label="Blog pages">
           <?php for($i=1;$i<=$total_pages;$i++){ ?>

<a href="blog?page=<?php echo $i; ?>" 
class="<?php if($i==$page) echo 'blog-pag-btn active'; else echo 'blog-pag-btn'; ?> ">
<?php echo $i; ?>
</a>

<?php } ?>
          </nav>
  </section>
          <!-- Section Label -->
    
  <?php include 'includes/footer.php';?>
