<?php

include('config.php');

session_start();

if(isset($_POST['login'])){



$user=$_POST["username"];

$pass=$_POST["password"];

$sql="SELECT * from registration WHERE username='$user' AND password='$pass'";

$res=mysqli_query($conn,$sql);

$num=mysqli_num_rows($res);



if($num==1)

{

header('location:adminpage.php');

}

else

{

header('location:login.php');

}

}

?>



<!DOCTYPE html>

<html lang="en">

	<head>

		<meta http-equiv="content-type" content="text/html; charset=UTF-8">

		<meta charset="utf-8">

		<title>Login</title>

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

  width: 310px;

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

  width: 278px;

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

.text{text-align: center;}



    </style>

	</head>

	<body>

<?php include('adminheader.php'); ?>

<section class="container1">

   

    <?php

   // $sql1="SELECT * from post WHERE userid='$_SESSION[userid]'";

    /*

    $sql1="SELECT * from post";

    $rep=mysqli_query($sql1);

    while($roo=mysqli_fetch_array($rep))

    { ?>

		<table>

    <tr>

      UserID: <?php echo $roo['userid'];?>

    </tr>

    <br>

		<tr>

			Post: <?php echo $roo['postname'];?>

		</tr>

		<br>	

		<tr>

			Description: <?php echo $roo['description'];?>

		</tr>	

		</table>

		<br>

    <?php } */

    ?>

<!-- ---------------------------------------------- -->



<style>

#edit  a:hover {

    text-decoration: none;

    color:purple;

  }

  #edit  a {

    text-decoration: none;

    color: black;

  }

</style>

<link href="style.css" rel="stylesheet" type="text/css" media="all" /> <!--- include the css file -->

<script type="text/javascript" src="jquery.min.js"> </script> <!--- include the live jquery library -->

<script type="text/javascript" src="script.js"></script> <!--- include the our jquery file  -->

<div><?php //include_once "header.php"; ?></div>

<div>

<!--

<a href="home.php">Home</a>-->

<div>

<?php 

include_once "config.php";

?>

<?php

$q="select count(*) \"total\" from post";

 $ros=mysqli_query($conn,$q);

  

  

 // $ros=mysqli_query($conn,$q);

  

  

  $row=(mysqli_fetch_array($ros));

  $total=$row['total'];

  $dis=15;

  $total_page=ceil($total/$dis);

  $page_cur=(isset($_GET['page']))?$_GET['page']:1;

  $k=($page_cur-1)*$dis;

   



?>

<?php 

//include_once "config.php";

@$sq1="SELECT * from post limit $k,$dis";

@$rs1=mysqli_query($conn,$sq1);

@$num=mysqli_num_rows($rs1);

if($num){

?>

<div style="margin-top:100px; margin-bottom:200px;">

  <form action="admindelete.php" method="post" name="data_table">



  <table border="1" id="table_data" style="border:4px solid deepSkyBlue; border-radius:10px;width:100%;text-align:center;">

    <th class="text">UserID</th>

    <th  class="text">Post</th>

    <th class="text">Description</th>

    <th class="text">ACTION</th>

    <th class="text">Check All <input type="checkbox" id="check_all" value=""></th>



    <?php



while($row1=mysqli_fetch_array($rs1))

{

?>

<tr>

  <td><?php echo $row1["userid"]?></td>

  <td><?php echo $row1['postname']?></td>

  <td><?php echo $row1['description']?></td>

  

 

  <td id="edit"><a href="adminedit.php?edit_id=<?php echo $row1['postid']?>">Edit</td>

  <td id="edit">

  <input type="checkbox" value="<?php echo $row1['userid']; ?>" name="data[]" id="data"></td>



  

  

</tr>

<?php } ?>

  </table>

<?php// } ?>

<!--   <input name="submit" style=" width:100px; height:30px; background:red;" type="submit" value="Delete" id="submit">

 -->    <input name="submit" style="float:left; width:100px; height:30px; margin-left:580px; margin-top:10px; background:#279ddd;color: white " type="submit" value="Delete" id="submit">

    

       </form>

<?php

echo '<br/>';

echo '<br/>';

if($page_cur>1)

  {

    echo '<a href="adminmanagepost.php?page='.($page_cur-1).'" style="cursor:pointer;color:silver;" ><input style="cursor:pointer;background-color:#00BFFF;border:1px black solid;border-radius:5px;width:120px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value=" Previous "></a>';

  }

  else

  {

    echo '<input style="background-color:#00BFFF;border:1px black solid;border-radius:5px;width:120px;height:30px;color:black;font-size:15px;font-weight:bold;" type="button" value=" Previous ">';

  }

for($i=1;$i<$total_page;$i++)

  {

    if($page_cur==$i)

    {

      echo ' <input style="background-color:#00BFFF;border:2px black solid;border-radius:5px;width:30px;height:30px;color:black;font-size:15px;font-weight:bold;" type="button" value="'.$i.'"> ';

    }

    else

    {

    echo '<a href="adminmanagepost.php?page='.$i.'"> <input style="cursor:pointer;background-color:silver;border:1px black solid;border-radius:5px;width:30px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value="'.$i.'"> </a>';

    }

  }

  if($page_cur<$total_page)

  {

    echo '<a href="adminmanagepost.php?page='.($page_cur+1).'"><input style="cursor:pointer;background-color:#00BFFF;border:1px black solid;border-radius:5px;width:90px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value=" Next "></a>';

  }

  else

  {

   echo '<input style="background-color:#00BFFF;border:1px black solid;border-radius:5px;width:90px;height:30px;color:black;font-size:15px;font-weight:bold;" type="button" value="   Next ">';

  }

?>

<?php



}





  ?>









</div>



<!-- ------------------------------------------- -->









  </section>







<?php include('footer.php'); ?>



	<!-- script references -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

		<script src="js/bootstrap.min.js"></script>

		<script src="js/scripts.js"></script>

	</body>

</html>