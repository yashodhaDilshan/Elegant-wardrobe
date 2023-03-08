<?php  
include("dbconnect.php");

if(isset($_POST['buyitem']))
{		
	$Id        = $_POST['id'];
	$Buy_Q     = $_POST['quantity'];	 
	$price_pay = $_POST['price'];	
	$name      = $_POST['name'];
	$f_Q       = $_POST['Quanti'];
	$table     = $_POST['table'];
	
	$total = $_POST['quantity'] * $_POST['price'];
	
	$New_Q = $_POST['Quanti'] - $_POST['quantity'];
	
	if($table == "women_item")
	{
		$sql = "UPDATE women_item SET Quantity = '$New_Q' WHERE Id = '$Id' ";	
		$result = mysqli_query($conn, $sql);
		
		if($result)
		{	
			$sql1 = "INSERT INTO bill (Name, Quantity, Price, Total)  VALUES('$name', '$Buy_Q', '$price_pay', '$total')";
			$result1 = mysqli_query($conn, $sql1);
			
			$msg = "$Buy_Q $name Totale is : $total";		
			$msgs = "Perchers Succsessful";		
	    
		    echo "<script type='text/javascript'>alert('$msg');</script>";	
			echo "<script type='text/javascript'>alert('$msgs');</script>";	   
		    header("refresh:0; url=Women_Item_user.php");
		}
	}
	
	
	if($table == "men_item")
	{
		$sql = "UPDATE men_item SET Quantity = '$New_Q' WHERE Id = '$Id' ";	
		$result = mysqli_query($conn, $sql);
		
		if($result)
		{	
			$sql1 = "INSERT INTO bill (Name, Quantity, Price, Total)  VALUES('$name', '$Buy_Q', '$price_pay', '$total')";
			$result1 = mysqli_query($conn, $sql1);
			
			$msg = "$Buy_Q $name Totale is : $total";
		    $msgs = "Perchers Succsessful";
		
	        echo "<script type='text/javascript'>alert('$msg');</script>";
		    echo "<script type='text/javascript'>alert('$msgs');</script>";
	        header("refresh:0; url=men_Item_user.php");
		}	
	}
	
	if($table == "kid_item")
	{
		$sql = "UPDATE kid_item SET Quantity = '$New_Q' WHERE Id = '$Id' ";	
		$result = mysqli_query($conn, $sql);
		
		if($result)
		{	
			$sql1 = "INSERT INTO bill (Name, Quantity, Price, Total)  VALUES('$name', '$Buy_Q', '$price_pay', '$total')";
			$result1 = mysqli_query($conn, $sql1);
			
			$msg = "$Buy_Q $name Totale is : $total";
		    $msgs = "Perchers Succsessful";
		
	        echo "<script type='text/javascript'>alert('$msg');</script>";
		    echo "<script type='text/javascript'>alert('$msgs');</script>";
	        header("refresh:0; url=kid_Item_user.php");
		}		
	}
	
	
	
}
?>

<!DOCTYPE html>
<html>
<head>  
<meta charset="utf-8">
<title>Buy now</title>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/Payment.css">

</head>
<body>
   
<div class="product_main">
  <div class="main_box">
	  
	  <?php  
	 include("dbconnect.php");
     


if(isset($_POST['buy']))
{		 
	$Id    = $_POST['Id'];	 
	$Table = $_POST['Table'];
	
	$sql = "SELECT * FROM $Table  WHERE Id='$Id'";			
	$result = mysqli_query($conn, $sql);	
	
	$row = mysqli_fetch_array($result);
	
	    $Id       = $row['Id'];
		$Name     = $row['Name'];
		$Quantity = $row['Quantity'];
		$Size     = $row['Size'];
		$Price    = $row['Price'];
		$Image    = $row['Image'];	

?>	
	  
	  
	  <div class="first">
        
		  <div class="image_box">
            <div class="big_image">
                <img src="<?php echo $Image; ?>" alt="">
            </div><!--big_image--> 
		  </div> <!--image_box-->

        <div class="content_box">
			
		   <form action="Pay.php" method="post"> 

            <h1 class="title"><?php echo $Name; ?></h1> 
			
            <p><span class="stock"> <i class="fas fa-check"> </i> <?php if($Quantity > 1){echo "Available";} ?> </span></p>				 
				
				 <div class="dropDown"><span > size : <?php echo $Size; ?></span></div> <!--dropDown-->
			   <select name="P-category" id="P-category" style="font-size: 20px; f" >							
						<option>Select Payment method</option>
						<option value="Women">Visa Cird</option>
						<option value="Men">Paypal</option>
					    <option value="Kid">bank transfer</option>							
					</select>			
                
				 <div class="quantity">	
					 
					 <span> quantity : </span>                    
					 <input type="number" name="quantity" value="1"  step="1" min="1">			
                
				 </div> <!--quantity-->				
				
				 <div class="price">LKR <?php echo $Price; ?></div>          
				
				 <div><input type="submit" value="Pay Now" name="buyitem" class="btn"></div>
			   
			   <input type="hidden" name="price" Value="<?php echo $Price ?>">
			   <input type="hidden" name="table" Value="<?php echo $Table ?>">
			   <input type="hidden" name="name" Value="<?php echo $Name; ?>">
			   <input type="hidden" name="Quanti" Value="<?php echo $Quantity; ?>">
			   <input type="hidden" name="id" Value="<?php echo $Id ?>">
			   
			
            </form> 
        </div> <!--content_box-->		
	   </div> <!--first--> 	  
	  
<?php }?>
    </div> <!--main_box-->	
</div> <!--product_main -->  

</body>
</html>