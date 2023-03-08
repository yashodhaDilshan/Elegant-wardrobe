<?php 

session_start();
if(!isset($_SESSION['name']))  // Associate Array
{	
	header("location:Login.php");	
}

$name = $_SESSION['name'];

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Menu</title>
	<link rel="stylesheet" type="text/css" href="../css/admin_home.css">
	
</head>

<body>
	
	<div class="Main-div"> <!--wrap div-->
		
		<!----------------------- heding Start ----------------------------> 
		
		<div class="heding" id="heding">	
			
		  <div class="site-name" id="Hedimg">  <!--heding div 1-->				 
				<label class="name">Elegant wardrobe</label>
			
				
			</div><!-- logo end-->
			
			<div class="search" id="search">  <!--heding div 1--> <!-- search Start-->			 
				<div class="s-box">
					<h1 style="font-size: 45px; margin-top: 15px; margin-left: 120px;">Admin Home</h1>						
				</div>				
			</div><!-- search end-->
			
			<div class="list">  <!--heding div 2--> <!--list Start-->
				<ul><b>
					<li><a href="Home.php" style="font-size: 30px; margin-right: 30px;">Home</a></li>
					<li><a href="Signup-admin.php" style="font-size: 30px; margin-right: 30px; font-size: 20px; margin-left: -30px;">Add Admin</a></li>
					<li><?php echo $name; ?></li>				
					<li><a href="Logout.php">Logout</a></li></b>
					
				</ul>
			</div><!--list end-->
			
		</div>
		
		<!----------------------- heding End ----------------------------> 
		
		<div class="heding-space">
				<div>
				</div>
		</div>
		
		
		<!------------------ products catogary start -------------------->
		
		<div class="products">
				
			    <div class="procut-item">
					<div class="p1">
						<a href="Women_Item_admin.php">
						<img src="../image/Admin/Admin1.jpg"></a>
					</div>
					<div class="p2">
						<a href="men_Item_admin.php">
						<img src="../image/Admin/Admin2.jpg"></a>
					</div>
					<div class="p3">
						<a href="kid_Item_admin.php">
						<img src="../image/Admin/Admin3.jpg"></a>
					</div>
				</div> <!--procut-item-->				      		
		</div>	
		
		
		<!------------------ products catogary End --------------------->
		
	</div><!-- wrap div end-->
</body>
</html>
