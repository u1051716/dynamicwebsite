<?php 

include('config.php');

session_start();

$edit_id=$_GET['edit_id'];

$sql="SELECT * FROM registration WHERE registerid='$edit_id'";

$res=mysqli_query($conn,$sql);

$row1=mysqli_fetch_array($res);



if(isset($_POST['update_register']))

{

  $registerid=$_POST['registerid'];

  $name=$_POST['name'];

  $phoneno=$_POST['phoneno'];

  $address=$_POST['address'];

  $password=$_POST['password'];



   $sql2="UPDATE registration SET `name`='$name',`phoneno`='$phoneno',`address`='$address',`password`='$password' WHERE registerid='$registerid'";



  mysqli_query($sql2);



  header('location:adminmanageuser.php');



}

?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<meta http-equiv="content-type" content="text/html; charset=UTF-8">

		<meta charset="utf-8">

		<title>Profile</title>

		<meta name="generator" content="Bootply" />

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<link href="css/bootstrap.min.css" rel="stylesheet">

		<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

		<!--[if lt IE 9]>

			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>

		<![endif]-->

		<link href="css/styles.css" rel="stylesheet">

    <style>

    .container1 {

  margin: 83px auto;

  width: 100%;

  color: #404040;

  background: #0ca3d2;

}

    .login {

  position: relative;

  margin: 0 auto;

  padding: 20px 20px 20px;

  width: 450px;

  background: white;

  border-radius: 3px;

  -webkit-box-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 1px 2px rgba(0, 0, 0, 0.3);

  box-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 1px 2px rgba(0, 0, 0, 0.3);

}

.login:before {

  content: '';

  position: absolute;

  top: -8px;

  right: -8px;

  bottom: -8px;

  left: -8px;

  z-index: -1;

  background: rgba(0, 0, 0, 0.08);

  border-radius: 4px;

}

.login h1 {

  margin: -20px -20px 21px;

  line-height: 40px;

  font-size: 15px;

  font-weight: bold;

  color: #555;

  text-align: center;

  text-shadow: 0 1px white;

  background: #f3f3f3;

  border-bottom: 1px solid #cfcfcf;

  border-radius: 3px 3px 0 0;

  background-image: -webkit-linear-gradient(top, whiteffd, #eef2f5);

  background-image: -moz-linear-gradient(top, whiteffd, #eef2f5);

  background-image: -o-linear-gradient(top, whiteffd, #eef2f5);

  background-image: linear-gradient(to bottom, whiteffd, #eef2f5);

  -webkit-box-shadow: 0 1px whitesmoke;

  box-shadow: 0 1px whitesmoke;

}

.login p {

  margin: 20px 0 0;

}

.login p:first-child {

  margin-top: 0;

}

.login input[type=text], .login input[type=password] {

  width: 330px;

}

.login p.remember_me {

  float: left;

  line-height: 31px;

}

.login p.remember_me label {

  font-size: 12px;

  color: #777;

  cursor: pointer;

}

.login p.remember_me input {

  position: relative;

  bottom: 1px;

  margin-right: 4px;

  vertical-align: middle;

}

.login p.submit {

  text-align: right;

}



.login-help {

  margin: 20px 0;

  font-size: 11px;

  color: white;

  text-align: center;

  text-shadow: 0 1px #2a85a1;

}

.login-help a {

  color: #cce7fa;

  text-decoration: none;

}

.login-help a:hover {

  text-decoration: underline;

}



:-moz-placeholder {

  color: #c9c9c9 !important;

  font-size: 13px;

}



::-webkit-input-placeholder {

  color: #ccc;

  font-size: 13px;

}



input {

  font-family: 'Lucida Grande', Tahoma, Verdana, sans-serif;

  font-size: 14px;

}



input[type=text], input[type=password] {

  margin: 5px;

  padding: 0 10px;

  width: 200px;

  height: 34px;

  color: #404040;

  background: white;

  border: 1px solid;

  border-color: #c4c4c4 #d1d1d1 #d4d4d4;

  border-radius: 2px;

  outline: 5px solid #eff4f7;

  -moz-outline-radius: 3px;

  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);

  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);

}

input[type=text]:focus, input[type=password]:focus {

  border-color: #7dc9e2;

  outline-color: #dceefc;

  outline-offset: 0;

}



input[type=submit] {

  padding: 0 18px;

  height: 29px;

  font-size: 12px;

  font-weight: bold;

  color: #527881;

  text-shadow: 0 1px #e3f1f1;

  background: #cde5ef;

  border: 1px solid;

  border-color: #b4ccce #b3c0c8 #9eb9c2;

  border-radius: 16px;

  outline: 0;

  -webkit-box-sizing: content-box;

  -moz-box-sizing: content-box;

  box-sizing: content-box;

  background-image: -webkit-linear-gradient(top, #edf5f8, #cde5ef);

  background-image: -moz-linear-gradient(top, #edf5f8, #cde5ef);

  background-image: -o-linear-gradient(top, #edf5f8, #cde5ef);

  background-image: linear-gradient(to bottom, #edf5f8, #cde5ef);

  -webkit-box-shadow: inset 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.15);

  box-shadow: inset 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.15);

}

input[type=submit]:active {

  background: #cde5ef;

  border-color: #9eb9c2 #b3c0c8 #b4ccce;

  -webkit-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.2);

  box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.2);

}



.lt-ie9 input[type=text], .lt-ie9 input[type=password] {

  line-height: 34px;

}



    </style>

	</head>

	<body>

<?php include('adminheader.php'); ?>



<section class="container1">

    <div class="login">

      <h1>Profile</h1>

      <form method="post" action="">

        

        <input type="hidden" style="margin-left:34px;" name="registerid" value="<?php echo $row1['registerid']; ?>">



        <p>Name:<input type="text" style="margin-left:34px;" name="name" value="<?php echo $row1['name']; ?>" placeholder="Name"></p>



        <p>PhoneNo:<input type="text" style="margin-left:12px;" name="phoneno" value="<?php echo $row1['phoneno']; ?>" placeholder="Phone Number"></p>



        <p>Address<input type="text" style="margin-left:22px;" name="address" value="<?php echo $row1['address']; ?>" placeholder="Address"></p>



        <p>UserName<input type="text" name="username" value="<?php echo $row1['username']; ?>" placeholder="Username or Email" style="margin-left:10px;" onfocus="this.blur();"></p>



        <p>Password<input type="password" style="margin-left:12px;" name="password" value="<?php echo $row1['password']; ?>" placeholder="Password"></p>



        



        <p class="submit"><input type="submit" name="update_register" value="Update"></p>



      </form>

    </div>



    <div class="login-help">

     

    </div>

  </section>







<?php include('footer.php'); ?>



	<!-- script references -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

		<script src="js/bootstrap.min.js"></script>

		<script src="js/scripts.js"></script>

	</body>

</html>