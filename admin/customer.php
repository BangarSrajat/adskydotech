<?php 
include 'auth.php'; // 
include 'header.php';
include 'inculude/config.php';

$sql = "SELECT * FROM contact_submissions ORDER BY id ASC"; // Fetch all jobs
$result = mysqli_query($conn, $sql);


?>

<section class="job-style-two pt-100 pb-70">
            
       
<table border="1" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Last Name </th>
            <th>Email</th>
            <th>Phone</th>
            <th>Company</th>
             <th>Budget</th>
             <th>Service(s) Needed</th>
             <th>Message</th>
             <th>created_at</th>
             <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['first_name']."</td>
                        <td>".$row['last_name']."</td>
                        <td>" .$row ['email']."</td>
                        <td>" .$row ['phone']."</td>
                        <td>" .$row ['company']."</td>
                        <td>" .$row ['budget']."</td>
                        <td>" .$row ['services']."</td>     
                         <td>" .$row ['message']."</td>
                        <td>" .$row ['created_at']."</td>
                        <td><a href='delete_customer.php?id=".$row['id']." 'onclick=\"return confirm('Are you sure you want to delete this Data?');\">Delete</a></td>
                       
                           </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No Customer Entry</td></tr>";
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