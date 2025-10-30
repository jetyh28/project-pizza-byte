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
    <div class="col-5">
    <p id="asterisk"> Required values are marked by an asterisk  (*)</p><br>
    <form action=receipt.php method="post">
 
  
  <fieldset style = "border: 1px solid black; width: 550px; margin: auto;">
  
   <legend class="legend-text" style=" padding-left: 10px;">Customer Information *</legend>
    
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
        <div class="col-sm-4">
        <label for="lastName" class="custInfoLabel">Last Name: *</label>
        </div>

        <div class="col-sm-7">
        <input type="text" required lname="lName" id="lastName" class="form-control"/><br>
        </div>
    </div>

    <!-- Delivery Location  -->
    <div class="form-group row">
        <div class="col-sm-4">
        <label for="deliveryLocation" class="custInfoLabel">Delivery Location: *</label>
        </div>

        <div class="col-sm-7">
        <textarea required name="delivery" id="deliveryLocation" rows="4" col="40" class="form-control"></textarea>
        </div>
    </div>

    <!-- Phone -->
    <div class="form-group row">
        <div class="col-sm-4">
        <label for="phone" class="custInfoLabel">Phone *</label>
        </div>

        <div class="col-sm-7">
        <input type="tel" required name="phoneNumber" id="phone" /><br>
        </div>
    </div>

    <!-- Delivery Time -->

    <div class="form-group row">
        <div class="col-sm-4">
        <label for="time" class="custInfoLabel">Delivery time <br> (leave blank for<br> immediate delivery)</label>
        </div>
        <div class="col-sm-7">
        <input type="time"  name="deliveryTime" id="time" /><br>
        </div>


    </div>




  </fieldset>




 
<!-- closing smaller div -->
    </div>

<!--  Bigger div right side -->

<div class="col-7" style = "padding-top:60px";>
    <fieldset style = "border: 1px solid black; width: 65%;">
  
   <legend class="legend-text" style=" padding-left: 10px;">Customize Your Pizza</legend>
    
   <!-- Pizza selection -->
    <div class="form-group row">
        <div class="col-sm-3">
          <label for="pizzaSize">Select your Pizza size<br> (10,12, or 14 inch)</label>
        </div>

        <div class="col-sm-7 form-check">
          <div class="row"> 
            <div class="col-2 text-center" >

        <!-- Pizza size selection -->
              <div class="pizza1" style="background-color: red;">
                <p style="padding-left: 5px;">10</p>
              </div>

            </div>

            <div class="col-3 text-center" >
              <div class="pizza2" style="background-color: red;">
              </div>

            </div>


            <div class="col-2 text-center" >
              <div class="pizza3" style="background-color: red;">
              </div>

            </div>
            

    </div>

        <!-- Radio buttons pizza -->
        <div class="row sizesSelect">
        <div class="col-3 text-center">
            <input class="form-check-input" type="radio"  name="pizzaSize" id="pizza10"/> 
        </div>

        <div class="col-3 text-center">
            <input class="form-check-input" type="radio"  name="pizzaSize" id="pizza12"/> 
        </div> 

        <div class="col-3 text-center">
            <input class="form-check-input" type="radio"  name="pizzaSize" id="pizza14"/>  
        </div>

    </div>  
    
</div>
</div>


    <!-- Pizza Crust -->

    <div class ="form-group row">

      <div class="col-sm-3">
        <p> crust</p>
      </div>

      <div class="col-sm-7">
        <p>crust selection</p>
        <!-- closing crust column -->
      </div> 

    </div>


<!-- Instructions -->
    <div class="form-group row">
        <div class="col-sm-3">
          <label for="instructions">Special Instructions</label>

        </div>

        <div class="col-sm-7">
            <textarea name="instructions" id="specialInstructions" rows="4" col="40" >  </textarea>
        </div>

    </div>


    <!-- Row for both meat toppings and vegetable toppings -->
    <div class="row">

    <!-- Meat toppings -->
        <div class="col-6">
            <fieldset style = "border: 1px solid black; width: 90%;">
            <p class="legend-text">Meat Toppings</p>
            <div class="form-group row">
                <div class="col-sm-6">
                <p>Pepperoni</p>
                </div>

                <div class="col-sm-3">
                <p>check</p>
                </div>


            <!-- form group meat toppings closing tag -->
            </div>


          


            </fieldset>
        </div>


        <!-- Vegetables toppings -->
        <div class="col-6">
            <fieldset style = "border: 1px solid black; width: 90%;">
            <legend class="legend-text">Vegetable Toppings</legend>

               <div class="form-group row">
                <div class="col-sm-6">
                <p>Mushrooms</p>
                </div>

                <div class="col-sm-3">
                <p>check</p>
                </div>


            <!-- form group vegetables toppings closing tag -->
            </div>
           </fieldset>
        </div>

    </div>    

    <p>ADD HERE LAST  ITEMS</p>
        </div>   

     

                
                

</div>







</fieldset>



<!-- Clossing bigger div right side -->
</div>

   <div class="row">
            <div class="col-6"></div>
            <div class="col-6">

                <button>Submit</button>
            </div>

        </div>



</div>
</body>
</html>