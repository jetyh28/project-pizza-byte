<!DOCTYPE html>
<html>
 <body>

<head>
   
    <title> Pizza Byte</title>
    <link rel="stylesheet" href="./css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--Bootstrap CDN-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <title>Bootstrap Starter</title>
</head>



<?php

    $error_message = "";
    $firstName = "";
    $lastName = "";
	$deliveryLocation = "";
	$phoneNumber = "";
	$deliveryTime = "";
	$pizzaSize = "";
	$crust = "";
	$specialInstructions = "";
	$toppings = "";
	$extras = "";
    $display_form = false;
    $errors = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Check all of the form data for required fields.....
		
	if (empty($_POST["firstName"])) {
		$error_message = $error_message . "Error... Missing First Name!!<br>";
		$errors = true;
	} else	{
	    // trim() is used to strip extra spaces from the user input.
	    // htmlspecialchars() is used to remove malicious input.
	    // You must always do this to prevent security problems!!!

		$firstName = trim(htmlspecialchars($_POST["firstName"]));
	}
		
	if (empty($_POST["lastName"])) {
		$error_message = $error_message . "Error... Missing Last Name!!<br>";
		$errors = true;
	} else {
	

		$lastName = trim(htmlspecialchars($_POST["lastName"]));
	}




	if (empty($_POST["pizzaSize"])) {
		$error_message = $error_message . "Error: Missing Pizza Size!<br>";
		$errors = true;
	} else {
	

		$pizzaSize= $_POST["pizzaSize"];
	}




	// Grabbing pizza info from not required fields 

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$quantity  = $_POST["quantity"];
	$deliveryTime  = $_POST["deliveryTime"];
	$crust  = $_POST["crust"];
	$toppings  = $_POST['toppings'];
	$specialInstructions  = $_POST["specialInstructions"];
	$extras  = $_POST['extras'];
	
	
}

		
	if(!empty($error_message)) {
		$display_form = true;
	}
    } else {
	$display_form = false;
    }

    if($display_form == true) {

?>
    <form action="receipt.php" method="post">
<?php

    if ($errors == true ) {
		echo('<div style="color:red;">');
		echo($error_message);
		echo("<p>Errors have occurred... Please resubmit</p>");
		echo("</div>");
	}
?>
        First Name: <input type="text" name="firstName" value="<?php echo $firstName;?>">
		<br><br>
		Last  Name: <input type="text" name="lastName" value="<?php echo $lastName;?>">
		<br><br>
		<input type="submit" name="submit" value="Submit">  
	</form>
<?php
    } else{
		// Process Form Data
		
		echo'<div class="d-flex justify-content-center">';

		echo'<div class="text-center">';
		echo '<fieldset style=" border: 1px solid black;">';
		echo'<legend>Order Receipt</legend>';
		echo("<p>Hi $firstName. This is your order summary:</p>");
		echo("<p><b>Pizza Size:</b> $pizzaSize Quantity: $quantity  </p>");
		echo("<p><b>Special Instructions:</b> $specialInstructions</p>");
		echo("<p><b>Crust:</b> $crust</p>");
		echo("<p><b>Toppings:</b></p>" );
		
		if(!empty($toppings)) {
			echo "<p>";
			
				echo htmlspecialchars(implode("," ,$toppings));
			}
			
			else {
			echo "<p>No toppings selected. </p>";
}

		echo("<p><b>Extras:</b></p>" );

		if(!empty($extras)) {
			echo "<p>";

			echo htmlspecialchars(implode("," ,$extras));
			}
		
		else {
			echo "<p>No extras selected. </p>";
}
	}

	if(empty($specialInstructions)) {
		echo "<p> No Special Instructions. </p>";

	}


echo '</fieldset>';
echo '</div>';
echo '</div>';

    
?>        
  </body>
</html>