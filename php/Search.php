
<?php 
include("dbconnect.php");

session_start();
if(!isset($_SESSION['name']))  // Associate Array
{	
	header("location:Login.php");	
}

$name = $_SESSION['name'];
?>

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
	<link rel="stylesheet" type="text/css" href="../css/search.css">
</head>

<body>
	<div class="Main-div" style="margin-top: -35px;">
		
		<!----------------------- heding Start ----------------------------> 
		
		<div class="heding" id="heding" >	
			
		  <div class="site-name" id="Hedimg">  <!--heding div 1-->				 
				<label class="name">Elegant wardrobe</label>
				
			</div><!-- logo end-->			
			
			
			<div class="search" id="search">  <!--heding div 1--> <!-- search Start-->	
				<form action="Search.php" method="get">				
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
					<li><?php echo $name; ?></li>				
					<li><a href="Logout.php">Logout</a></li></b>
					
				</ul>
			</div><!--list end-->
			
		</div>
		
		<!----------------------- heding End ----------------------------> 
		
		
			
		
		
		<div class="main-box"> <!--main box-->
			
			<!------------------- Navigation side start ------------------- -->
			
			<div class="nav">	
				<div class="menu" style="margin-bottom: 30px;"><div class="tital-txt"><h1>Menu</h1></div></div>
				
				<div class="men"><a href="Women_Item_admin.php"><h1>Women</h1></a></div>
				<div class="men"><a href="men_Item_admin.php"><h1>Men</h1></a></div>
				<div class="kid"><a href="kid_Item_admin.php"><h1>Kid</h1></a></div>
		
			</div>			
		  <!-- ----------------- Navigation side End ------------------- -->
			
			
			
		   <!--------------------All product start------------------------>		
			
			<div class="product-list">					
				
				<!--------------------------product 1 start---------------------------->	
				
				
				<div class="title-div" id="product-1"><div class="Titals"><h1>Find Result</h1></div></div>	
				
				    
				<div class="product">	
					<form action="Add_item.php" method="post">
					<div class="list-titals" style="display: flex;" >								
						<div class="topt list-1">Id</div>
						<div class="topt list-2">Image</div>
						<div class="topt list-3">Name</div>
						<div class="topt list-4">Quantity</div>
						<div class="topt list-5">Price</div>
						<div class="topt list-6"><input type="submit" value="Add Items"></div>								
					</div>		
					</form>
					
					<div class="container">	
						
						<?php					
						while($row = mysqli_fetch_array($result))
					    {	
				        ?>
					    					
						
						<div class="item item-1"> <!--item-1--------------------------------->						
						
							<div class="list-details" style="display: flex;" >					
								<div class="pro details-1"> <div class="p-id"><?php echo $row['Id']; ?></div></div>						
								<div class="pro details-2"> <div class="pro-img"><img src="<?php echo $row['Image']; ?>"/></div></div>			
								<div class="pro details-3"> <div class="p-name"><?php echo $row['Name']; ?></div></div>						
								<div class="pro details-4"> <div class="p-quantity"><?php echo $row['Quantity']; ?></div></div>					
								<div class="pro details-5"> <div class="p-price">LKR <?php echo $row['Price']; ?></div></div>					
								<div class="pro details-6">							
							
									<div class="pro details-6">								
										<div class="p-button">								
											
											<form action="update.php" method="post">									
												<input type="hidden" name="Id" Value="<?php echo $row['Id'];?>">								
												<input type="hidden" name="Table" Value="<?php echo "women_item";?>">							
												<input type="submit" name="Update"   Value="Update">									
											</form>									
									
											<form action="delete.php" method="post">										
												<input type="hidden" name="Id" Value="<?php echo $row['Id'];?>">							    
												<input type="hidden" name="Table" Value="<?php echo "women_item";?>">				        
												<input type="submit" name="Delete" Value="Delete">									
											</form>										
								 
										</div>							
									</div>							
						
								</div>						
							</div>										       
						</div> <!--item item-1----------------------------------------------->											
					  
											
						<?php } ?>
						
					</div> <!--container end-->		
				</div>		
		        <!-------------------product 1 End---------------------->		
					
			</div> 			
			<!--------------------All product End------------------------>	
						
			
		</div> <!--main-box end-->	
			
			
			
			
			
		
		<div class="foot-space">			
		</div>
	   
	</div> <!--wrap-div end-->
</body>
</html>


