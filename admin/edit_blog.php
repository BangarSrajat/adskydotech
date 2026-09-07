<?php 
include 'auth.php'; // ðŸ‘ˆ sabse pehle

include 'header.php';

include 'inculude/config.php';


// Step 1: Fetch record by ID
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM blog_posts WHERE id='$id'");
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

$title = mysqli_real_escape_string($conn, $_POST['title']);
$alt_text = mysqli_real_escape_string($conn, $_POST['alt_text']);
$description = mysqli_real_escape_string($conn, $_POST['description']);

$image = $_FILES['image']['name'];

if($image != ""){

    $tmp_name = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp_name, "../uploads/".$image);

    $update = "UPDATE blog_posts SET 
        title='$title',
        alt_text='$alt_text',
        image='$image',
        description='$description'
        WHERE id='$id'";

}else{

    $update = "UPDATE blog_posts SET 
        title='$title',
        alt_text='$alt_text',
        description='$description'
        WHERE id='$id'";
}

mysqli_query($conn, $update);

echo "<script>alert('Blog post updated successfully!'); window.location.href='blog-detail.php';</script>";

}
?>
<div class="container-blog">
<form action="" method="POST" enctype="multipart/form-data">

<label>Blog Title</label>
<input type="text" name="title" value="<?php echo $row['title']; ?>" required>

<label>Image Alt Text</label>
<input type="text" name="alt_text" value="<?php echo $row['alt_text']; ?>" required>

<label>Old Image</label><br>
<img src="uploads/<?php echo $row['image']; ?>" width="100"><br>

<label>Upload New Image (optional)</label>
<input type="file" name="image">

<label>Description</label>
<textarea name="description" id="description"><?php echo $row['description']; ?></textarea>

<br>
<button type="submit" name="update">Update Blog</button>
</div>
</form>

<?php include 'footer.php'; ?>