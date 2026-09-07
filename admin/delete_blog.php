<?php
include 'inculude/config.php'; // Your DB connection

if(isset($_GET['id'])){
    $id = $_GET['id'];

    // Prepare statement to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM blog_posts WHERE id = ?");
    $stmt->bind_param("i", $id);

    if($stmt->execute()){
        echo "<script>alert('Blog post deleted successfully!'); window.location.href='blog-detail.php';</script>";
    } else {
        echo "<script>alert('Error deleting blog post: " . $conn->error . "');</script>";
    }
    $stmt->close();
    $conn->close();
}
?>
