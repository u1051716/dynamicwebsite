<style>
ul#menu, ul#menu ul.sub-menu {
    padding:0;
    margin: 0;
    
}
ul#menu li, ul#menu ul.sub-menu li {
    list-style-type: none;
    display: inline-block;
     background:;
}
/*Link Appearance*/
ul#menu li a, ul#menu li ul.sub-menu li a {
    text-decoration: none;
    color: black;
    background:purple;
    padding: 5px;
    display:inline-block;
   
    margin:auto;
}

ul#menu li a, ul#menu li ul.sub-menu li a:hover {
    text-decoration: none;
    color: #fff;
    background:#00BFFF;
    padding: 5px;
    display:inline-block;
    width:80px;
    margin:auto;
}
ul#menu li a, ul#menu li ul {
    text-decoration: none;
    color: black;
    background:silver;
    padding: 5px;
    display:inline-block;
    
    margin:auto;
}
ul#menu li a:hover {
    text-decoration: none;
    color: #fff;
    background:gray;
    padding: 5px;
    display:inline-block;
    width:80px;
    margin:auto;
}
/*Make the parent of sub-menu relative*/
ul#menu li {
    position: relative;

}
/*sub menu*/
ul#menu li ul.sub-menu {
    display:none;
    position: absolute;
    top: 30px;
    left: 0;
    width: 80px;
    
}
ul#menu li:hover ul.sub-menu {
    display:block;
    
}
</style>
<style>
.link a{
text-decoration: none;
color:black;
    }
.link  :hover{
text-decoration: none;
color:purple;
    }
    #data a :hover{
text-decoration: none;
color:purple;
    }
</style>

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

      ?>

      <a class="navbar-brand" href="adminpage.php">Welcome, <?php echo $username;?></a>
    </div>
    <div class="navbar-collapse collapse" id="navbar-collapsible">
      <ul class="nav navbar-nav navbar-left">
       <!--  <li ><a href="adminpage.php">AdminPage</a></li>
        <li><a href="adminpost.php">Add Item</a></li>
        --> <li><a href="adminaddcategory.php">Category</a></li>
        <li><a href="adminaddsubcat.php">Subcategory</a></li>
        <li><a href="adminmanagepost.php">Manage Product</a></li>
        <li><a href="adminmanageuser.php">Manage Users</a></li>
        <li><a href="adminmanagecontacts.php">Manage Contacts</a></li>
        <li><a href="adminmanagecat.php">Manage Category</a></li>
        <li><a href="adminmanagesubcat.php">Manage Subcategory</a></li>
        <li><a href="adminprofile.php">My Profile</a></li>
        <li><a href="adminlogout.php">Logout</a></li>
        
        <li>&nbsp;</li>
      </ul>
      <form class="navbar-form">
        <div class="form-group" style="display:inline;">
          
      </form>
    </div>
  </div>
</nav>