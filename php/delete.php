
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update and delete</title>
</head>

<body>
	
	<?php
	//-----------------Delete-----------------
	include("dbconnect.php");
	 if(isset($_POST['Delete']))
    {
		 $Id    = $_POST['Id'];				 
		 $Table = $_POST['Table'];
		 
		 if($Table == "women_item")
		 {		
			 $sql = "DELETE FROM $Table  WHERE Id='$Id'";			
			 $result = mysqli_query($conn, $sql);		
		
			 if($result)		
			 {					
				 $msg = "Women Item Delete succsessfull";
				 echo "<script type='text/javascript'>alert('$msg');</script>";
				 header("refresh:0; url=Women_Item_admin.php");			
			 }		
			 else		
			 {					
				 $msg = "Not enter data";
				  echo "<script type='text/javascript'>alert('$msg')</script>";
				 
			 }			
		 }
		 
		 if($Table == "men_item")
		 {		
			 $sql = "DELETE FROM $Table  WHERE Id='$Id'";			
			 $result = mysqli_query($conn, $sql);		
		
			 if($result)		
			 {					
				 $msg = "Men Item Delete succsessfull";
				 echo "<script type='text/javascript'>alert('$msg');</script>";
				 header("refresh:0; url=men_Item_admin.php");				
			 }		
			 else		
			 {					
				 $msg = "Not enter data";
				  echo "<script type='text/javascript'>alert('$msg')</script>";
				 
			 }			
		 }
		 
		 if($Table == "kid_item")
		 {		
			 $sql = "DELETE FROM $Table  WHERE Id='$Id'";			
			 $result = mysqli_query($conn, $sql);		
		
			 if($result)		
			 {					
				 $msg = "Kid Item Delete succsessfull";
				 echo "<script type='text/javascript'>alert('$msg');</script>";
				 header("refresh:0; url=kid_Item_admin.php");				 
			 }		
			 else		
			 {					
				 $msg = "Not enter data";
				 echo "<script type='text/javascript'>alert('$msg')</script>";
				 
			 }			
		 }
		
	 }
	
	 ?>
	
</body>
</html>