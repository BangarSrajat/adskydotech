<?php
include 'inculude/config.php'; // Your DB connection

if(isset($_GET['id'])){
    $id = $_GET['id'];

    // Prepare statement to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM dataparadise_contact WHERE id = ?");
    $stmt->bind_param("i", $id);

    if($stmt->execute()){
        echo "<script>alert('Data deleted successfully!'); window.location.href='customer.php';</script>";
    } else {
        echo "<script>alert('Error data delete post: " . $conn->error . "');</script>";
    }
    $stmt->close();
    $conn->close();
}
?>
