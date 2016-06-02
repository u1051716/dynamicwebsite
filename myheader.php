<nav class="navbar navbar-trans navbar-fixed-top" role="navigation"  style="background:black">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapsible">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php 
$registerid=$_SESSION['userid'];
$sql="SELECT * from registration WHERE registerid='$registerid'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
$username=$row['username'];
$type=$row['type'];
      ?>

      <a class="navbar-brand" href="mypage.php">Welcome, <?php echo $username;?></a>
    </div></div>
    <div class="navbar-collapse collapse" id="navbar-collapsible">
    <?php if($type=='store') {?>
      <ul class="nav navbar-nav navbar-left" style="margin-left:100px">
        <li><a href="mypage.php">MyPage</a></li>
        <li><a href="post.php">Add Product</a></li>
        <li><a href="mymanagepost.php">Manage Product</a></li>
        
        <li><a href="profile.php">My Profile</a></li>
        <li><a href="logout.php">Logout</a></li>
          
        <li>&nbsp;</li>
      </ul>
      <?php } ?>

      <?php if($type=='user') {?>
      <ul class="nav navbar-nav navbar-left" style="margin-left:100px;">
        <li><a href="mypage.php">MyPage</a></li>
        <li><a href="post.php">New Product</a></li>
        <li><a href="mymanagepost.php">Manage Product</a></li>
       <!-- <li><a href="message.php">Message</a></li>
        <li><a href="managemessage.php">My Messages</a></li>-->
        <li><a href="profile.php">My Profile</a></li>
        <li><a href="logout.php">Logout</a></li>
        
        <li>&nbsp;</li>
      </ul>
      <?php } ?>

      <form class="navbar-form">
        <div class="form-group" style="display:inline;">
          
      </form>
    </div>
  </div>
</nav>