<?php 
require('top.php');
if(isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_LOGIN']=='yes'){
	?>
	<script>
	window.location.href='my_order.php';
	</script>
	<?php
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
</head>
<body>
  <form action="reg.php" method="post">
    <h1>Registration</h1>
    Username : <input type="password" name="name"> <br><br>
    Email : <input type="text" name="email"><br><br>
    Password : <input type="password" name="passsword"> <br><br>
    Mob : <input type="text" name="mobile"><br><br>

    <input type="submit" value="submit">

    
  </form>

</body>
<?php require('footer.php')?>   
</html>