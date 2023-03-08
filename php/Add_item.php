<?php 

include("dbconnect.php");
$message="";

if(isset($_POST['submit']))
{
	$Name        = $_POST['Name'];	
	$Quantity    = $_POST['Quantity'];	
	$Size        = $_POST['Size'];	
	$Price       = $_POST['Price'];
	$Category    = $_POST['P-category'];
	$Type        = $_POST['P-type'];
	
	$file_name = $_FILES['image']['name'];
	$file_type = $_FILES['image']['type'];
	$file_size = $_FILES['image']['size'];
	$temp_name = $_FILES['image']['tmp_name'];
	
	$upload_to = '../image/';
	
	move_uploaded_file($temp_name, $upload_to . $file_name);
	
	$url = $upload_to . $file_name;
	
	
	
	if($Category == "Women")
	{
		$sql = "INSERT INTO women_item (Name, Quantity, Size, Price, Image, Category)  VALUES('$Name', '$Quantity', '$Size', '$Price', '$url', '$Type' )";		
		$result = mysqli_query($conn, $sql);	
	
		if(!$result)
		{			
			die ('Could not enter data: '.mysqli_error($conn));
		}
	
		else
		{		
			$msg = " Women Item Add Successfull ";
			echo "<script type='text/javascript'>alert('$msg');</script>";
			header("refresh:0; url=Women_Item_admin.php");
		}	
	}	
	
	if($Category == "Men")
	{
		$sql = "INSERT INTO men_item (Name, Quantity, Size, Price, Image, Category)  VALUES('$Name', '$Quantity', '$Size', '$Price', '$url', '$Type' )";		
		$result = mysqli_query($conn, $sql);	
	
		if(!$result)
		{			
			die ('Could not enter data: '.mysqli_error($conn));
		}
	
		else
		{		
			$msg = " Men Item Add Successfull ";
			echo "<script type='text/javascript'>alert('$msg');</script>";
			header("refresh:0; url=men_Item_admin.php");
		}			
	}
	
	if($Category == "Kid")
	{
		$sql = "INSERT INTO kid_item (Name, Quantity, Size, Price, Image, Category)  VALUES('$Name', '$Quantity', '$Size', '$Price', '$url', '$Type' )";		
		$result = mysqli_query($conn, $sql);	
	
		if(!$result)
		{			
			die ('Could not enter data: '.mysqli_error($conn));
		}
	
		else
		{		
			$msg = " Kid Item Add Successfull ";
			echo "<script type='text/javascript'>alert('$msg');</script>";
			header("refresh:0; url=kid_Item_admin.php");
		}		
	}	
}


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add_item</title>
	<link rel="stylesheet" type="text/css" href="../css/Add-item.css">
	
</head>

<body>
	<div class="main-box">		
		<div class="tital"><center><h1>Add Items</h1></center></div>	
		
		
		<form action="#" method="post" enctype="multipart/form-data">	
			
			<div class="box">		
			<center>
				<div class="input-box">				
					
					<select name="P-category" id="P-category" class="usertype" >	
						
						<option>Select Category</option>
						<option value="Women">Women</option>
						<option value="Men">Men</option>
					    <option value="Kid">Kid</option>					
						
					</select>				
					
					<select name="P-type" id="P-type" class="usertype" >	
						
						<option>Select Type</option>
						
						<option style="color:green;">-----------------Women-----------------</option>						
						<option value="T-shirt">T-shirt</option>
						<option value="Frock">  Frock  </option>
					    <option value="Scurt">  Scurts </option>
						<option value="Blows">  Blows  </option>
						<option value="Shoos">  Shoos  </option>
						
						<option style="color:green;">-------------------Men-------------------</option>						
						<option value="T-shirt">T-shirt</option>
						<option value="Frock">  Shirt  </option>
					    <option value="Scurt">  Trouser </option>
						<option value="Blows">  Shorts  </option>
						<option value="Shoos">  Shoos  </option>
						
						<option style="color:green;">--------------------Kid-------------------</option>
						<option value="T-shirt">T-shirt</option>
						<option value="Frock">  Shirt  </option>
					    <option value="Scurt">  Trouser </option>
						<option value="Blows">  Shorts  </option>
						<option value="Shoos">  Shoos  </option>
						
					</select>
					
				    <input type="text" name="Name"        placeholder="    Enter Name">
					<input type="text" name="Quantity"    placeholder="    Enter Quantity" >
					
				    <select name="Size" id="Size" class="usertype" >	
						
						<option>Select Size</option>
						<option value="Small">Small</option>
						<option value="Meduam">Meduam</option>
					    <option value="Large">Large</option>					
						
					</select>	
					
					<input type="text" name="Price"       placeholder="    Enter Price" >
					
					<input type="file"   name="image"  id="">
					<input type="submit" value="Insert" name="submit" class="submitbtn">							
					<input type="reset"  value="Reset" id="reset"  class="resetbtn">
						
					<!--</form>-->
				
				</div>		
		 </div>
		 </center>
	  </form>
   </div>
</body>
</html>