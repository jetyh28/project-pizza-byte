<!-- https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/fieldset -->



<!DOCTYPE html>
<html lang="en">
<head>
   
    <title> Pizza Byte</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="icon" type="image/x-icon" href="./images/logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--Bootstrap CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
  <title>Bootstrap Starter</title>
</head>

<body>
    <div class="container" style="border-bottom: 1px solid;">
        <div class="row" ">
            <div class="col">
                <img class="top-images" src=./images/logo.png>
            </div>

            <div class="col-5 text-center">
                <h1>Online Ordering Form</h1>

            </div>


            <div class="col">
                <img class="top-images" src=./images/delivery.png>

                
            </div>

        </div>
    </div>
        


    </div>

    <!-- Containet holding form -->
<div class="row" > 
    <div class="col ">
<form action=receipt.php method="post">
  <p id="asterisk"> Required values are marked by an asterisk  (*)</p><br>
  
  <fieldset style = "border: 1px solid black; width: 550px; margin: auto;">
  
   <legend style="font-size: medium; padding-left: 10px;">Customer Information *</legend>
    
   <!-- First Name -->
    <div class="form-group row">
        <div class="col-sm-3">
        <label for="firstName" class="custInfoLabel">First Name: *</label>
        </div>

        <div class="col-sm-7">
        <input type="text" required name="name" id="firstName" class="form-control"/><br>
        </div>
    </div>

    <!-- Last Name -->
    
    <div class="form-group row">
        <div class="col-sm-3">
        <label for="lastName" class="custInfoLabel">Last Name: *</label>
        </div>

        <div class="col-sm-7">
        <input type="text" required lname="lName" id="lastName" class="form-control"/><br>
        </div>
    </div>

    <!-- Delivery Location  -->
    <div class="form-group">
    <label for="deliveryLocation">Delivery Location: *</label>
    <textarea required name="delivery" id="deliveryLocation" rows="4" col="50" class="form-control"></textarea>
    </div>

    <!-- Phone -->
    <div class="form-group">
 
    <label for="phone">Phone *</label>
    <input type="tel" required name="phoneNumber" id="phone" /><br>
    </div>

    <!-- Delivery Time -->

    <div class="form-group">
    <label for="time">Delivery time <br> (leave blank for<br> immediate delivery)</label>
    <input type="time"  name="deliveryTime" id="time" /><br>


    </div>




  </fieldset>




 
<!-- closing smaller div -->
    </div>

<!--  Bigger div right side -->

<div class=col-6>

<h1>bigger div</h1>

<!-- Clossing bigger div right side -->
</div>



</div>
</body>
</html>