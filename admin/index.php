<?php

session_start(); // ✅ sabse pehle

if(!isset($_SESSION['admin'])){
    header("Location: admin.php");
    exit();
}

include 'header.php';

include 'inculude/config.php';



// Total blog posts
$postQuery = mysqli_query($conn, "SELECT COUNT(*) as total_posts FROM blog_posts");
$postData = mysqli_fetch_assoc($postQuery);
$totalPosts = $postData['total_posts'];

// Total views (sum of all posts)
$viewQuery = mysqli_query($conn, "SELECT SUM(views) as total_views FROM blog_posts");
$viewData = mysqli_fetch_assoc($viewQuery);
$totalViews = $viewData['total_views'];
if($totalViews == null) $totalViews = 0;


?>


  <!-- MAIN CONTENT -->
  <main id="content" class="content py-10">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-12">
         
        </div>
      </div>
      <div class="row g-3 mb-3">
        <div class="col-lg-3 col-12">

          <div class="card p-4  bg-primary bg-opacity-10 border border-primary border-opacity-25 rounded-2">

            <div class="d-flex gap-3 ">
              <div class="icon-shape icon-md bg-primary text-white rounded-2">
                <i class="ti ti-report-analytics fs-4"></i>
              </div>
              <div>
                <h2 class="mb-3 fs-6"> Total Blog</h2>
                <h3 class="fw-bold mb-0"><?php echo $totalPosts; ?></h3>
                
              </div>
            </div>
          </div>


        </div>
        
        
        <div class="col-lg-3 col-12">

          <div class="card p-4  bg-warning bg-opacity-10 border border-warning border-opacity-25 rounded-2">

            <div class="d-flex gap-3 ">
              <div class="icon-shape icon-md bg-warning text-white rounded-2">
                <i class="ti ti-notes fs-4"></i>
              </div>
              <div>
                <h2 class="mb-3 fs-6">Total Views</h2>
                <h3 class="fw-bold mb-0"><?php echo $totalViews; ?></h3>
                
              </div>
            </div>
          </div>

        </div>


        <div class="col-lg-3 col-12">

          <div class="card p-4  bg-warning bg-opacity-10 border border-warning border-opacity-25 rounded-2">

            <div class="d-flex gap-3 ">
              <div class="icon-shape icon-md bg-warning text-white rounded-2">
                <i class="ti ti-notes fs-4"></i>
              </div>
              <div>
                <h2 class="mb-3 fs-6">All Blog</h2>
                <h3 class="fw-bold mb-0"><?php echo $totalPosts; ?></h3>
                
              </div>
            </div>
          </div>

        </div>

      </div>
    

      </div>
      
     


<?php
include 'footer.php';
?>


</body>

</html>