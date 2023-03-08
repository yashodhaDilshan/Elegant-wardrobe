<?php 

include("dbconnect.php");

if(isset($_POST['Update']))
{		 
	$Id    = $_POST['Id'];	 
	$Table = $_POST['Table'];
	
	$sql = "SELECT * FROM $Table  WHERE Id='$Id'";			
	$result = mysqli_query($conn, $sql);	
	
	
	$row = mysqli_fetch_array($result);
	
		$v_Id       = $row['Id'];
		$v_Name     = $row['Name'];
		$v_Quantity = $row['Quantity'];
		$v_Size     = $row['Size'];
		$v_Price    = $row['Price'];
		$v_Image    = $row['Image'];
		
}

?>

<?php 

include("dbconnect.php");
$message="";

if(isset($_POST['submit']))
{
	$Id    = $_POST['Id'];				 
	$Table = $_POST['Table'];
	
	
	$Name        = $_POST['Name'];	
	$Quantity    = $_POST['Quantity'];	
	$Size        = $_POST['Size'];	
	$Price       = $_POST['Price'];
	$Image       = $_POST['Image'];
		
	$file_name = $_FILES['image']['name'];
	$file_type = $_FILES['image']['type'];
	$file_size = $_FILES['image']['size'];
	$temp_name = $_FILES['image']['tmp_name'];
	
	$upload_to = '../image/';
	
	
	if(move_uploaded_file($temp_name, $upload_to . $file_name))
	{
		$url = $upload_to . $file_name;
	
		$sql = "UPDATE $Table SET Name = '$Name', Quantity = '$Quantity', Size = '$Size', Price = '$Price', Image = '$url' WHERE Id = '$Id' ";	
		$result = mysqli_query($conn, $sql);	
	
		if($result)
		{	
			if($Table == "women_item")
			{
				$msg = "Women Item Update succsessfull";	
				echo "<script type='text/javascript'>alert('$msg');</script>";
			    header("refresh:0; url=Women_Item_admin.php");
				
			}
			if($Table == "men_item")
			{
				$msg = "Men Item Update succsessfull";	
				echo "<script type='text/javascript'>alert('$msg');</script>";
			    header("refresh:0; url=men_Item_admin.php");
				
			}
			if($Table == "kid_item")
			{
				$msg = "Kid Item Update succsessfull";	
				echo "<script type='text/javascript'>alert('$msg');</script>";
			    header("refresh:0; url=kid_Item_admin.php");
			}
		}
	
		else
		{		
			$msg = "Not enter data";	
			echo "<script type='text/javascript'>alert('$msg')</script>";
		}	
		
	}
	
	else
	{
		$sql = "UPDATE $Table SET Name = '$Name', Quantity = '$Quantity', Size = '$Size', Price = '$Price', Image = '$Image' WHERE Id = '$Id' ";
		$result = mysqli_query($conn, $sql);	
	
		if($result)
		{		
			if($Table == "women_item")
			{
				$msg = "Women Item Update succsessfull";	
				echo "<script type='text/javascript'>alert('$msg');</script>";
			    header("refresh:0; url=Women_Item_admin.php");
			}
			if($Table == "men_item")
			{
				$msg = "Men Item Update succsessfull";	
				echo "<script type='text/javascript'>alert('$msg');</script>";
			    header("refresh:0; url=men_Item_admin.php");
			}
			if($Table == "kid_item")
			{
				$msg = "Kid Item Update succsessfull";	
				echo "<script type='text/javascript'>alert('$msg');</script>";
			    header("refresh:0; url=kid_Item_admin.php");
			}
		}
	
		else
		{		
			$msg = "Not enter data";
			echo "<script type='text/javascript'>alert('$msg')</script>";
		}	
		
	}
	
	
	
}




?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add_item</title>
	<link rel="stylesheet" type="text/css" href="../css/update.css">
	
</head>

<body>
	<div class="main-box">		
		<div class="tital"><center><h1>Update</h1></center></div>	
		
		
		<form action="update.php" method="post" enctype="multipart/form-data">	
			
			<div class="box">		
			<center>
				<div class="input-box">										
					
					<lable><b>Product Name</b></lable>
				    <input type="text"  name="Name"      value="<?php echo $v_Name; ?>" >
					<lable><b>Product Quantitys</b></lable>
					<input type="text"  name="Quantity"  value="<?php echo $v_Quantity; ?>" >	
					<lable><b>Product Size</b></lable>
				    <input type="text"  name="Size"      value="<?php echo $v_Size; ?>" >	
					<lable><b>Product Price</b></lable>
					<input type="text"  name="Price"     value="<?php echo $v_Price; ?>" >	
					<input type="hidden"name="Image"     value="<?php echo $v_Image; ?>" >
					<input type="file"  name="image"  >
					
					<input type="hidden" name="Id"    Value="<?php echo $Id;?>">		
					<input type="hidden" name="Table" Value="<?php echo $Table;?>">		
					
					<input type="submit" value="Update" name="submit" class="submitbtn">							
					
						
					<!--</form>-->
				
				</div>		
		 </div>
		 </center>
	  </form>
   </div>
</body>
</html>