<html>
<head>
	<title>
		 The Car Store
	</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="styles.css">

 	<style>
    	input.transparent-input
    	{
      	 	background-color:transparent !important;
       		border:none !important;
    	}
	</style>
</head> 


<body>

<nav class="navbar navbar-default" id="nav_bar">
		<div class= "container">
			<div class="navbar-header">
				<a href="http://www.cs.odu.edu/~amodi/car_project/index.html" class ="navbar-brand navbar-link someclass">
					<img src="" alt=""><strong>Car Store</strong>
				</a>
			<!--	<button class="navbar-tooggle collapsed" data-toggle= "collapse" data-target="navcol">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
				</button>-->
			</div>
			
			<div class="collapse navbar-collapse" id="navcol">
				<ul class="nav navbar-nav navbar-right" id ="nav_list">

				<li><a href="http://www.cs.odu.edu/~amodi/car_project/buy.html"><strong>Buy a Car</strong></a></li>
				<li><a href="http://www.cs.odu.edu/~amodi/car_project/addingsell.php"><strong>Sell a Car</strong></a></li>
				
				</ul>
				

			</div>
			</div>
		
	</nav>

<?php

if(isset($_POST['submit']))
{

	$data_missing = array();


	if(empty($_POST['carnamefield'])){

	$data_missing[]= 'Car Name';

	} else {

	$c_name =trim($_POST['carnamefield']);
	
	}
	if(empty($_POST['typefield']))
	{
	$data_missing[]= 'Type';
	} 
	else
	{
	$c_type = trim($_POST['typefield']);	
	}

	if(empty($_POST['pricefield']))
	{
	$data_missing[]= 'Price';
	} 
	else
	{
	$c_price = trim($_POST['pricefield']);	
	}

	if(empty($_POST['descriptionfield']))
	{
	$data_missing[] ='Description';
	} 
	else 
	{
	$c_description = trim($_POST['descriptionfield']);	
	}

	if(empty($_POST['addressfield']))
	{
	$data_missing[] ='Address';
	} 
	else 
	{
	$c_address = trim($_POST['addressfield']);	
	}
	
	if(empty($_POST['colorfield']))
	{
	$data_missing[] ='Colour';
	} else 
	{
	$c_color = trim($_POST['colorfield']);	
	}
    
	
		require_once('connection.php');
       
		$query= "INSERT INTO car_database2(carid,carname,cartype,price,Description,address,color) VALUES(null,'$c_name', '$c_type',$c_price, '$c_description', '$c_address', '$c_color')";
        //echo $query;
	    if ($dbc->query($query) === TRUE) {

	    
	    		
    		
    			echo '<div class="container">
    					<div class="jumbotron">
    						<div>
    						<h1>Your Add is posted on the Car Store ! :D </h1>
    						</div>

    					</div>
    					</div>';
    			
	

    			/*$message = "wrong answer";
				echo "<script type='text/javascript'>

				alert('$message');

				</script>";
*/
		} 

		else 
		{
    		echo "Error: " . $query . "<br>" . $dbc->error;
		}
	//echo "gdgdfgdfgdfgdfgdfgdfgfdg";
	
}


?>


<!--
<form action="http://www.cs.odu.edu/~amodi/car/addingsell.php" method="post">
<b>Add a new Car</b>

<p>Car Name:
<input type="text" name="carnamefield" size="10" value="" />
</p>
<p>Type:
<input type="text" name="typefield" size="10" value="" />
</p>
<p>Price:
<input type="int" name="pricefield" size="10" value="" />
</p>
<p>Description:
<input type="text" name="descriptionfield" size="50" value="" />
</p>
<p>Address:
<input type="text" name="addressfield" size="50" value="" />
</p>
<p>Colour
<input type="text" name="colorfield" size="10" value="" />
</p>

<p>
<input type="submit" name="submit" value="Send"/>
</p>


</form> 

-->



<div class="container">
<div class="form-group"><br>
	
		<form action ="http://www.cs.odu.edu/~amodi/car_project/addingsell.php" method="post"> 
			
					
			
					

					<div class="form-group">	

						<div class="col-sm-10">
						<label for="carName">Car Name </label>
						
						<input type="text" name="carnamefield" id="carName" class="form-control input-sm" placeholder=" Enter Car Name" required=""><br>
						</div>
				
					</div>
					<div class="form-group">
						<div class="col-sm-10">
						<label for="carType">Car Type</label>	
											
							<input type="text" name="typefield" id="carType" class="form-control input-sm" placeholder="Enter the car type " required=""><br>
							</div>
						
					</div>

					<div class="form-group">	
						<div class="col-sm-10">
						<label for="carPrice">Car Price</label>
						
						<input type="text" name="pricefield" id="carPrice" class="form-control input-sm" placeholder="Enter the Expected Price " required=""><br>
						</div>
			
					</div>

					<div class="form-group">	

						<div class="col-sm-10">
						<label for="describe">Describe Your Car</label>
						
						<input type="text" name="descriptionfield" id="describe" class="form-control input-sm" placeholder=" Enter some Description about your Car"><br>
	
					</div>
					<div class="form-group">	
						<div class="col-sm-10">
						<label for="addAddress">Addres</label>
						
						<input type="text" name="addressfield" id="addAddress" class="form-control input-sm" placeholder="Your Addres"><br>
						</div>

					</div>




					<div class="form-group">	
						
						<div class="col-sm-10">	
						<label for="carColor">Car Color </label>	
										
						<input type="text" name="colorfield" id="carColor" class="form-control input-sm" placeholder="Enter Car color" required=""><br>
						</div>
			
					</div>
		

					<div class="form-group">
					<center> 
					<div class="col-sm-10">
					<button type="submit" class="btn btn-primary" name="submit" value ="send" >Submit</button>	
					</center>
					</div>
					</div>

			</form>
			
			</div>
			</div>
			
		<div class="footer" >
			<center>
			<footer id=black>
				<div class="navbar footer__navbar">

  
                        <a class="navbar__link" href="http://www.facebook.com/apurva.modi.7./" id="weebly-link-footer" style="color: white;">© Killer Instincts Apurva Modi , Inc.</a>
                </div>

			</footer>
			</center>
		</div>
			
</body>
</html>