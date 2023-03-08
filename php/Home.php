
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
<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../css/home-page.css">
</head>

<body>
	
	
	
	<div class="Main-div"> <!-- wrap div -->
		
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
							<input class="search-box" name="search" type="text" placeholder=" Insert Name and Press Enter" style="outline: none;" autofocus>					
							<input type="hidden" name="Table" Value="<?php echo "men_item";?>">	
										    
						</div>			
					</div>
				</form>						
			</div><!-- search end-->
			
			<div class="list">  <!--heding div 2--> <!--list Start-->
				<ul><b>
					<li><a href="#hed-spc" style="font-size: 30px; ">Home</a></li>
					<li><a href="#heding-2" style="font-size: 27px; ">Category</a></li>
					<li><a href="#heding-2"> </a></li>
					<li><?php echo $name; ?></li>				
					<li><a href="Logout.php">Logout</a></li></b>
					<li></li></b>
				</ul>
			</div><!--list end-->
			
		</div>
		
		<!----------------------- heding End ----------------------------> 
		
		
		<div class="heding-space" id="hed-spc"></div> <!--space perpece-->
	
		
		
		<!--------------------- main image Start ------------------------> 
		
		<div class="main-img">               
            <div class="big-img">                
			    <div class="img-txt">
					
                     <span>New</span>
                     <h3>Fashions</h3>                     
                     <a href="#heding-2"><input class="img-btn" type="submit" value="shop now"></a>
			
                </div>                               
            </div>       
        </div>      
		
		<!---------------------- main image end ------------------------->   
	    
		
		
		
		
		<!------------------ products catogary start -------------------->
		
		<div class="heding-2" id="heding-2">
		 
			<b><h1>Products Category</h1></b>
			
			
        </div> 	
		
		<div class="products">
				
			<div class="procut-item">
					<div class="p1">
						<a href="Women_Item_user.php">
						<img src="../image/Admin/Admin1.jpg"></a>
					</div>
					
					<div class="p2">
						<a href="men_Item_user.php">
						<img src="../image/Admin/Admin2.jpg"></a>
					</div>
					
					<div class="p3">
						<a href="kid_Item_user.php">
						<img src="../image/Admin/Admin3.jpg"></a>
					</div>
				</div> <!--procut-item-->				
			      		
		</div>	
		
		<!------------------- products catogary End --------------------->
		
		       
		
  
		<!----------------------- futter Start -------------------------->
		      
		<div class="futter" id="#futter">			
			<div class="fut1">
				<ul><b>
					<li><a>Phone : 0787320061</a></li>
					<li><a>Email : yashoddilshan@gmail.com</a></li>
					<li><a>Address : 245/4, Kossinna, Ganemulla</a></li>
					</b>
				</ul>
		    </div>
		    <div class="fut">
				<ul><b>
					<li><a href="#hed-spc">     Home</a></li>
					<li><a href="#heding-2">    Category</a></li>
					<li><a href="php/Login.php">Login</a></li>
					</b>
				</ul>
			</div>
		    <div class="fut">
				<ul><b>
					<li><a href="https://www.facebook.com/">Facebook</a></li>
					<li><a href="https://instagram.com/">    Instergram</a></li>
					<li><a href="https://twitter.com/">Tuwiter</a></li>
					</b>
				</ul>
		    </div>			
		</div>
		
		
		<style>
			.futter{	
				width: 100%;	
				height: 250px;	
				background-color:#191919;	
				margin-top: 200px;	
				display: flex;	
				padding-left: 4%;	
				padding-top: 20px;
			}
			
			.fut1{	             
				width: 30%;	
				height: 150px;		
				margin-left: 20px;	
				margin-top: 40px;
			}

			.fut1 ul{list-style: none;}
			.fut1 a{
				
				display: inline-block;
				padding-top: 30px;
				font-size: 20px;
				padding: 10px;
				color: white;
			}
			
			.fut{	             
				width: 30%;	
				height: 150px;		
				margin-left: 20px;	
				margin-top: 40px;
			}

			.fut ul{list-style: none;}
			.fut a{
				
				display: inline-block;
				padding-top: 30px;
				font-size: 25px;
				padding: 10px;
				color: white;
			}


			

	</style>
		
		<!----------------------- futter End -------------------------->
		
		
	</div><!-- wrap div end-->
	        
</body>
</html>
