<?php 
include 'auth.php'; //
include 'header.php';
include 'inculude/config.php';

if(isset($_POST['submit'])){
    $title = $conn->real_escape_string($_POST['title']);
    $alt = mysqli_real_escape_string($conn,$_POST['alt_text']);
    $description = $conn->real_escape_string($_POST['description']);
   

    // Image upload

    $image = '';

if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){

    $target_dir = "../uploads/";

    if(!is_dir($target_dir)){
        mkdir($target_dir,0755,true);
    }

    /* file extension check */
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    $allowed = array("jpg","jpeg","png","webp");

    if(in_array($file_ext,$allowed)){

        /* unique file name */
        $image = time().'_'.rand(1000,9999).'.'.$file_ext;

        move_uploaded_file($file_tmp,$target_dir.$image);

    }else{

        echo "Only JPG, PNG, WEBP images allowed";

    }
}
   

    // Check for duplicate job (title + company + location)
    $check = $conn->query("SELECT * FROM blog_posts  WHERE title='$title' AND alt_text='$alt' AND description='$description'");
    if($check->num_rows > 0){
        echo "<script>alert('This blog already exists!');</script>";
    } else {
        $sql = "INSERT INTO blog_posts (title, alt_text, description, image)
                VALUES ('$title', '$alt', '$description', '$image')";
        if($conn->query($sql)){
            echo "<script>alert('Job added successfully!'); window.location.href='".$_SERVER['PHP_SELF']."';</script>";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

?>

<div class="container-blog">

<form action="" method="POST" enctype="multipart/form-data">

<label>Blog Title</label>
<input type="text" name="title" required>

<label>Image Alt Text</label>
<input type="text" name="alt_text" required>

<label>Upload Image</label>
<input type="file" name="image" required>

<label>Description</label>
<textarea id="description" name="description"></textarea>
<br>
<button type="submit" name="submit">Publish Blog</button>

</form>

</div>

<?php
include 'footer.php';
?>