<!DOCTYPE html>
<html>
 <body>
  <H1 style="color:red;">Pizza Byte Receipt </H1>


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
	// Check all of the form data.....
		
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
		// trim() is used to strip extra spaces from the user input.
		// htmlspecialchars() is used to remove malicious input.
  	      // You must always do this to prevent security problems!!!

		$lastName = trim(htmlspecialchars($_POST["lastName"]));
	}

	// Grabbing pizza size from html doc

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  	$pizzaSize  = $_POST["pizzaSize"];
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
		echo("<p>Hi $firstName $lastName,</p>");
		echo("<p>Pizza Size: $pizzaSize Quantity: $quantity  </p>");
		echo("<p>Special Instructions: $specialInstructions</p>");
		echo("<p>Crust: $crust</p>");
		echo("<p>Toppings:</p>" );
		
		if(!empty($toppings)) {
			echo "<p>";
			foreach($toppings as $topping) {
				echo "<li>" . htmlspecialchars($topping) . "</li>";
			}

			echo"</p>";


		} else {
			echo "<p>No toppings selected. </p>";
}

		echo("<p>Extras:</p>" );

		if(!empty($extras)) {
			echo "<p>";
			foreach($extras as $extra) {
				echo "<li>" . htmlspecialchars($extra) . "</li>";
			}

			echo"</p>";


		} else {
			echo "<p>No extras selected. </p>";
}






	}






    
?>        
  </body>
</html>