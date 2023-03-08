
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
<title>Women item</title>
	<link rel="stylesheet" type="text/css" href="../css/Women_Item_user.css">
</head>

<body>
	<div class="Main-div">
		
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
							<input class="search-box" name="search" type="text" placeholder=" Insert Name and Press Enter" autofocus>			
							<input type="hidden" name="Table" Value="<?php echo "women_item";?>">	
										    
						</div>			
					</div>
				</form>
			</div><!-- search end-->
			
			
			
			
			
			<div class="list">  <!--heding div 2--> <!--list Start-->
				<ul><b>
					<li><a href="Home.php" style="font-size: 30px; margin-right: 30px;">Home</a></li>				
					<li><?php echo $name; ?></li>				
					<li><a href="Logout.php">Logout</a></li></b>
					
				</ul>
			</div><!--list end-->
			
		</div>
		
		<!----------------------- heding End ----------------------------> 
		
		
			
		
		
		<div class="main-box"> <!--main box-->
			
			<!------------------- Navigation side start ------------------- -->
			
			<div class="nav">	
				<div class="menu"><div class="tital-txt"><h1>Menu</h1></div></div>
				<div class="women">
					<div class="women-menu"><a href="Women_Item_user.php"><h1>Women</h1></a></div>
					
					<div class="women-item">
						<ul>
							<li><a href="#product-1">T-shirt</a></li>
							<li><a href="#product-2">Frock</a></li>
							<li><a href="#product-3">Scurts</a></li>
							<li><a href="#product-4">Blows</a></li>
							<li><a href="#product-5">Shoos</a></li>
						</ul>			
					</div>
					
				</div>
				<div class="men"><a href="men_Item_user.php"><h1>Men</h1></a></div>
				<div class="kid"><a href="kid_Item_user.php"><h1>Kid</h1></a></div>
		
			</div>			
		  <!-- ----------------- Navigation side End ------------------- -->
			
			
			
		   <!--------------------All product start------------------------>		
			
			<div class="product-list">					
				
				<!--------------------------product 1 start---------------------------->	
				
				
				<div class="title-div" id="product-1"><div class="Titals"><h1>T-Shirt</h1></div></div>	
				
				<?php 
				      include("dbconnect.php");
                      $sql = "SELECT * FROM women_item";
                      $result = mysqli_query($conn,$sql);		
				?>	
				
				<div class="product">			
					<div class="container">			
											
					
                  <?php
					while($row = mysqli_fetch_array($result))
					{	
				  ?>
					<?php
					if($row['Category'] == "T-shirt")
					{	
						$id = $row['Id'];
				    ?>	
						
						
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
								
									<form action="Pay.php" method="post">								
										<input type="hidden" name="Table" Value="<?php echo "women_item";?>">							
										<input type="hidden" name="Id" Value="<?php echo $id ?>">								
										<input type="submit" name="buy" value="Buy Now" class="add-btn">								
									</form>								
								</div> <!--item-conten end-->								
							</div> <!--item item-1 end----------------------------------------->
									
					  <?php } ?>	
					<?php } ?>
				   </div> <!--container end-->	
				</div>			
				
		        <!---------------------------product 1 End----------------------------->	
				
				
				
				
				<!---------------------------product 2 start--------------------------->		
				
				<div class="title-div" id="product-2"><div class="Titals"><h1>Frocks</h1></div></div>				
		        
				<?php 
				      include("dbconnect.php");
                      $sql = "SELECT * FROM women_item";
                      $result = mysqli_query($conn,$sql);		
				?>	
	    
				<div class="product">		   
					<div class="container">				
					
                  <?php
					while($row = mysqli_fetch_array($result))
					{	
				  ?>
					<?php
					if($row['Category'] == "Frock")
					{	
						$id = $row['Id'];
				    ?>	
						
												
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
								
									<form action="Pay.php" method="post">								
										<input type="hidden" name="Table" Value="<?php echo "women_item";?>">							
										<input type="hidden" name="Id" Value="<?php echo $id ?>">								
										<input type="submit" name="buy" value="Buy Now" class="add-btn">								
									</form>							
								</div> <!--item-conten end-->								
							</div> <!--item item-1 end----------------------------------------->
										
					  <?php } ?>	
					<?php } ?>
				   </div> <!--container end-->	
				</div>		
		        <!-------------------product 2 End---------------------->		
				
				
				
				
				<!-------------------product 3 start---------------------->			
				<div class="title-div" id="product-3"><div class="Titals"><h1>Scurt</h1></div></div>				
		
	            <?php 
				      include("dbconnect.php");
                      $sql = "SELECT * FROM women_item";
                      $result = mysqli_query($conn,$sql);		
				?>	
	    
				<div class="product">		   
					<div class="container">				
					
                  <?php
					while($row = mysqli_fetch_array($result))
					{	
				  ?>
					<?php
					if($row['Category'] == "Scurt")
					{
						$id = $row['Id'];
				    ?>	
						
												
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
								
									<form action="Pay.php" method="post">								
										<input type="hidden" name="Table" Value="<?php echo "women_item";?>">							
										<input type="hidden" name="Id" Value="<?php echo $id ?>">								
										<input type="submit" name="buy" value="Buy Now" class="add-btn">								
									</form>								
								</div> <!--item-conten end-->								
							</div> <!--item item-1 end----------------------------------------->
											
					  <?php } ?>	
					<?php } ?>
				   </div> <!--container end-->	
				</div>		
		        <!-------------------product 2 End---------------------->			
				
				
				
				
				<!-------------------product 4 start---------------------->			
				<div class="title-div" id="product-4"><div class="Titals"><h1>Blows</h1></div></div>				
		
	    
				 <?php 
				      include("dbconnect.php");
                      $sql = "SELECT * FROM women_item";
                      $result = mysqli_query($conn,$sql);		
				?>	
	    
				<div class="product">		   
					<div class="container">				
					
                  <?php
					while($row = mysqli_fetch_array($result))
					{	
				  ?>
					<?php
					if($row['Category'] == "Blows")
					{	
						$id = $row['Id'];
				    ?>	
						
											
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
								
									<form action="Pay.php" method="post">								
										<input type="hidden" name="Table" Value="<?php echo "women_item";?>">							
										<input type="hidden" name="Id" Value="<?php echo $id ?>">								
										<input type="submit" name="buy" value="Buy Now" class="add-btn">								
									</form>								
								</div> <!--item-conten end-->								
							</div> <!--item item-1 end----------------------------------------->
										
					  <?php } ?>	
					<?php } ?>
				   </div> <!--container end-->	
				</div>		
		        <!-------------------product 2 End---------------------->			
				
				
				
				
				
				
				<!-------------------product 5 start---------------------->			
				<div class="title-div" id="product-5"><div class="Titals"><h1>Shoos</h1></div></div>				
		
	    
				 <?php 
				      include("dbconnect.php");
                      $sql = "SELECT * FROM women_item";
                      $result = mysqli_query($conn,$sql);		
				?>	
	    
				<div class="product">		   
					<div class="container">				
					
                  <?php
					while($row = mysqli_fetch_array($result))
					{	
				  ?>
					<?php
					if($row['Category'] == "Shoos")
					{	
						$id = $row['Id'];
				    ?>	
						
											
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
								
									<form action="Pay.php" method="post">								
										<input type="hidden" name="Table" Value="<?php echo "women_item";?>">							
										<input type="hidden" name="Id" Value="<?php echo $id ?>">								
										<input type="submit" name="buy" value="Buy Now" class="add-btn">								
									</form>								
								</div> <!--item-conten end-->								
							</div> <!--item item-1 end----------------------------------------->
											
					  <?php } ?>	
					<?php } ?>
				   </div> <!--container end-->	
				</div>		
		        <!-------------------product 2 End---------------------->			
				
				
		
			</div> 			
			<!--------------------All product End------------------------>	
						
			
		</div> <!--main-box end-->	
			
			
			
			
			
		
		<div class="foot-space">			
		</div>
	   
	</div> <!--wrap-div end-->
</body>
</html>


