

<?php 
				
include("dbconnect.php");
	
if(isset($_GET['Table']))               
{	
	$table = $_GET['Table'];
	
	if(isset($_GET['search']))               
    {	
	    $search = mysqli_real_escape_string($conn, $_GET['search']);	    
	    $sql = "SELECT * FROM $table WHERE (Name LIKE '%{$search}%') ";	
	    $Snama = $_GET['search']; 
    }	
}


$result = mysqli_query($conn,$sql);				
				
?>		
				

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Women item</title>
	<link rel="stylesheet" type="text/css" href="../css/Women_Item_user.css">
</head>

<body>
	<div class="Main-div" style="margin-top: -18px;">
		
		<!----------------------- heding Start ----------------------------> 
		
		<div class="heding" id="heding">	
			
		  <div class="site-name" id="Hedimg">  <!--heding div 1-->				 
				<label class="name">Elegant wardrobe</label>
			<a href="#"><div class="cirt"><img src="../image/png/kindpng_7147342.png" width="30" height="27" alt=""/>
			</div></a>
				
			</div><!-- logo end-->			
			
			
			<div class="search" id="search">  <!--heding div 1--> <!-- search Start-->	
				<form action="Search_user.php" method="get">				
					<div class="s-box">					
						<div class="box-s1"><!-- Search box view-->	
							<input class="search-btn" type="button" id="submit" style="margin-left: 30px;"> <!--search-box-->	
							<input class="search-box" name="search" type="text" placeholder=" Insert Name and Press Enter" value="<?php echo $Snama; ?>" autofocus>					
							<input type="hidden" name="Table" Value="<?php echo $table; ?>">	
										    
						</div>			
					</div>
				</form>
			</div><!-- search end-->
			
			
			<div class="list">  <!--heding div 2--> <!--list Start-->
				<ul><b>
					<li><a href="Home.php" style="font-size: 30px; margin-right: 30px;">Home</a></li>				
							
					<li><a href="Login.php">Login</a></li></b>
					
				</ul>
			</div><!--list end-->
			
		</div>
		
		<!----------------------- heding End ----------------------------> 
		
		
			
		
		
		<div class="main-box"> <!--main box-->
			
			<!------------------- Navigation side start ------------------- -->
			
			<div class="nav">	
				<div class="menu" style="margin-bottom: 30px;"><div class="tital-txt"><h1>Menu</h1></div></div>
				
				<div class="men"><a href="Women_Item_user.php"><h1>Women</h1></a></div>
				<div class="men"><a href="men_Item_user.php"><h1>Men</h1></a></div>
				<div class="kid"><a href="kid_Item_user.php"><h1>Kid</h1></a></div>
		
			</div>			
		  <!-- ----------------- Navigation side End ------------------- -->
			
			
			
		   <!--------------------All product start------------------------>		
			
			<div class="product-list">					
				
				<!--------------------------product 1 start---------------------------->	
				
				
				<div class="title-div" id="product-1"><div class="Titals"><h1>Find Result</h1></div></div>	
				
				
				<div class="product">			
					<div class="container">			
											
					
                  <?php
					while($row = mysqli_fetch_array($result))
					{	
				  ?>					
						<form action="#" method="post">						
							<div class="item item-1"> <!--item-1--------------------------------->					
								<div class="item-img">							
									<img src="<?php echo $row['Image']; ?>"/>			
								</div> <!--item-img-->					
							
								<div class="item-conten">							
									<div class="conten">									
										<ul>											
											<li><spm><?php echo $row['Name']; ?></spm></li>	
											<li><b>LKR <?php echo $row['Price']; ?></b></li>	
											<li><p>Available (<?php echo $row['Quantity']; ?>)</p></li>									
										</ul>								
									</div><!--conten end-->			
								
									<input type="submit" value="Buy Now" class="add-btn">								
								</div> <!--item-conten end-->								
							</div> <!--item item-1 end----------------------------------------->
						</form>					
					  <?php } ?>	
					
				   </div> <!--container end-->	
				</div>			
				
		        <!---------------------------product 1 End----------------------------->	
				
				
				
				
				
				
		
			</div> 			
			<!--------------------All product End------------------------>	
						
			
		</div> <!--main-box end-->	
			
			
			
			
			
		
		<div class="foot-space">			
		</div>
	   
	</div> <!--wrap-div end-->
</body>
</html>


