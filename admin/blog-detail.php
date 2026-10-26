<?php 
include 'auth.php'; // 
include 'header.php';
include 'inculude/config.php';

$sql = "SELECT * FROM blog_posts ORDER BY id ASC"; // Fetch all jobs
$result = mysqli_query($conn, $sql);


?>

<section class="job-style-two pt-100 pb-70">
            
       
<table border="1" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Blog Title</th>
            <th>slug</th>
            <th>View</th>
            <th>Date</th>
             <th>Delete</th>
             <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['title']."</td>
                         <td>".$row['slug']."</td>
                        <td>" .$row ['views']."</td>
                        <td>" .$row ['created_at']."</td>
                        <td><a href='delete_blog.php?id=".$row['id']." 'onclick=\"return confirm('Are you sure you want to delete this blog post?');\">Delete</a></td>
                        <td><a href='edit_blog.php?id=".$row['id']."' >Edit</a></td>
                           </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No blog posts found</td></tr>";
        }
        ?>
    </tbody>
</table>
</div>
</section>



<style>
table {
        width: 60%!important;
        border-collapse: collapse;
        margin-top: 20px;
        margin:auto;
    }
     th, td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
        font-size:10px;
    }
    th {
        background-color: #fd1616;
        color: white;
    }
</style>

<?php
include 'footer.php';
?>