

<?php 
				
include("dbconnect.php");
	

	if(isset($_GET['search']))               
    {	
	    $search = mysqli_real_escape_string($conn, $_GET['search']);    
		
		$sql1 = "SELECT * FROM women_item WHERE (Name LIKE '%{$search}%') ";	
		$sql2 = "SELECT * FROM men_item WHERE (Name LIKE '%{$search}%') ";	
		$sql3 = "SELECT * FROM kid_item WHERE (Name LIKE '%{$search}%') ";	
	   	
		$result1 = mysqli_query($conn,$sql1);
		$result2 = mysqli_query($conn,$sql2);
		$result3 = mysqli_query($conn,$sql3);
		
		$Snama = $_GET['search']; 
    
	}	
				
				
?>		
				

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Women item</title>
	<link rel="stylesheet" type="text/css" href="../css/Search_Home.css">
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
				<form action="Search_Home.php" method="get">				
					<div class="s-box">					
						<div class="box-s1"><!-- Search box view-->	
							<input class="search-btn" type="button" id="submit" style="margin-left: 30px;"> <!--search-box-->	
							<input class="search-box" name="search" type="text" placeholder=" Insert Name and Press Enter" value="<?php echo $Snama; ?>" autofocus>					
							
										    
						</div>			
					</div>
				</form>
			</div><!-- search end-->
			
			
			<div class="list">  <!--heding div 2--> <!--list Start-->
				<ul><b>
					<li><a href="Home.php" style="font-size: 30px; margin-right: 30px;">Home</a></li>				
									
					<li><a href="Logout.php">Logout</a></li></b>
					
				</ul>
			</div><!--list end-->			
		</div>
		
		<!----------------------- heding End ----------------------------> 
		
		
			
		
		
		<div class="main-box"> <!--main box-->
			
			
		   <!--------------------All product start------------------------>		
			
			<div class="product-list">					
				
				<!--------------------------product start---------------------------->	
				
				
				<div class="title-div" id="product-1"><div class="Titals"><h1>Find Result</h1></div></div>	
				
				
				<div class="product">			
					<div class="container">			
											
					
                  <?php
					while($row = mysqli_fetch_array($result1))       /*Women Item loop*/
					{	
				  ?>					
						<form action="#" method="post">						
							<div class="item item-1"> 				
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
									</div>		
								
									<input type="submit" value="Buy Now" class="add-btn">								
								</div>							
							</div> 
						</form>					
					  <?php } ?>
						
				  <?php
					while($row = mysqli_fetch_array($result2))        /*men Item loop*/
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
						
				  <?php
					while($row = mysqli_fetch_array($result3))        /*Kid Item loop*/
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
				
				
			</div> 			
			<!--------------------All product End------------------------>	
				
		</div> <!--main-box end-->	
			
			
		<div class="foot-space">			
		</div>
	   
	</div> <!--wrap-div end-->
</body>
</html>


