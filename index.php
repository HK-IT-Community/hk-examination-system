<?php 
session_start();
if(isset($_SESSION['examineeSession']['examineenakalogin']) == true) header("location:home.php");

 ?>

<?php 

include("login-ui/index.php");



 ?>
<center> <p style="font-size: 17px;">Don't Have Account - <a href="./login-ui/signup.html"style="font-size: 17px;"> Create Account</a></p></center>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/sweetalert.js"></script>