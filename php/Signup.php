
	<?php 	
	
	$message="";
	
	if(isset($_POST['submit']))  // associative array
	{
		include("dbconnect.php");
		
		$name = $_POST['Name'];
		$email = $_POST['Email'];
		$password  = $_POST['Password']; 
		$compassword = $_POST['comPassword'];
		
		
		$sqlcheck = "SELECT * FROM signup WHERE name='$name' OR email='$email'";
        $result = mysqli_query($conn, $sqlcheck);
        $user = mysqli_fetch_assoc($result);
  
        if ($user) // user exists
		{ 
			$msg = " Alredy Registered ";
			echo "<script type='text/javascript'>alert('$msg');</script>";
			header("refresh:0; url=Login.php");
		}
		
		else
	    {
		     if($password == $compassword) // password maching check
		     {
			      $sql = "INSERT INTO signup(name,password,email,type) VALUES('$name','$password','$email','user')";		
			
			      $results = mysqli_query($conn, $sql); 
			
			          if(!$results)
			          {
				           $msg = "faild" ;
			          }
			          else
			          {				          
						  $msg = " Signup User succsessfull ";
			              echo "<script type='text/javascript'>alert('$msg');</script>";
			              header("refresh:0; url=Login.php");
			          }
		     }
		     else
	         {
		         $msg = "Comfirmed password not mached";	
				  echo "<script type='text/javascript'>alert('$msg');</script>";
	         }	// password maching check					
	     }  // user exists
		
		
	} 
		
   
		
   
		
	?>
	
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="../css/Signup.css">
	
</head>

<body>
	<div class="main-box">		
		<div class="tital"><center><h1>Sign up</h1></center></div>	
		
		
		<form action="Signup.php" method="post" enctype="multipart/form-data">	
			
			<div class="box">		
			<center>
				<div class="input-box">					
					
					<div class="button-box">
						
						<a href="Login.php"><div class="sign1">Login</div></a>
						<a href=""><div class="log1">Sign up</div></a>
					</div>
					
				    <input type="text"     name="Name"         placeholder="    Enter Name">
					<input type="email"    name="Email"        placeholder="    Enter Email">
					<input type="password" name="Password"     placeholder="    Enter Password" >
					<input type="password" name="comPassword"  placeholder="    Enter Comfirm Password" >					
					
					<input type="submit" value="Signup" name="submit" class="submitbtn">							
					<input type="reset"  value="Reset" id="reset"  class="resetbtn">
						
					<!--</form>-->
				
				</div>	
			</center>
		 </div>		 
	  </form>
   </div>
</body>
</html>