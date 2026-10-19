<?php
include 'includes/header.php';
include 'includes/config.php';

$message = "";

if(isset($_POST['submit'])){

$email = mysqli_real_escape_string($conn,$_POST['email']);

$insert = "INSERT INTO email_subscribers (email,status) 
VALUES ('$email','unsubscribed')";

mysqli_query($conn,$insert);

$message = "Your email has been unsubscribed successfully.";

}

?>


<style>



.box{
background:white;
padding:40px;
border-radius:10px;
box-shadow:0 10px 25px rgba(0,0,0,0.1);
width:380px;
text-align:center;
margin:50px auto;
}

h2{
margin-bottom:10px;
}

p{
color:#666;
font-size:14px;
}

input{
width:100%;
padding:12px;
margin-top:15px;
border:1px solid #ddd;
border-radius:5px;
font-size:14px;
margin-bottom: 15px;
}

/* button{
width:100%;
padding:12px;
margin-top:15px;
background:#313828;
border:none;
color:white;
font-size:16px;
border-radius:5px;
cursor:pointer;
} */



.success{
margin-top:15px;
color:#2d7a46;
background:#eafaf1;
padding:10px;
border-radius:5px;
}

</style>

</head>

<body>

<div class="box">

<h2>Unsubscribe</h2>

<p>Enter your email address to stop receiving our emails.</p>

<form method="post">

<input type="email" name="email" required placeholder="Enter your email">

<button type="submit" name="submit" class="footer-newsletter-btn">Unsubscribe</button>

</form>

<?php if($message!=""){ ?>

<p class="success"><?php echo $message; ?></p>

<?php } ?>

</div>

<?php
include 'includes/footer.php';
?>
