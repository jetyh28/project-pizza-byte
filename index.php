<!-- https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/fieldset -->



<!DOCTYPE html>
<html lang="en">
<head>
   
    <title> Pizza Byte</title>
    <link rel="stylesheet" href="./css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--Bootstrap CDN-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

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
 
  
  <fieldset style = "border: 1px solid black; border-top: none; width: 550px; margin: auto;">
  
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
    <fieldset style = "border: 1px solid black; width: 65%; border-top: none;">
  
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
       <label>Crust: </label>


      </div>

      <div class="col-sm-7">
        <select class="form-select" aria-label="crust selection">
            <option selected>Thick</option>
            <option value="1">Thin</option>
            <option value="2">Hand-tossed</option>
        </select>


        <!-- closing crust column -->
      </div> 

    </div>



<!-- Quantity -->

    <div class="form-group row">
        <div class="col-sm-3">
          <label for="instructions">Quantity<br> (Call for quantities larger than 10)</label>

        </div>

        <div class="col-sm-7">
            <select class="form-select" aria-label="quantity selection">
            <option selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>


        </select>
        </div>

    </div>






<!-- Instructions -->
    <div class="form-group row">
        <div class="col-sm-3">
          <label for="instructions">Special Instructions</label>

        </div>

        <div class="col-sm-7">
            <textarea name="instructions" id="specialInstructions" rows="4" col="40" class="form-control" >  </textarea>
        </div>

    </div>


    <!-- Row for both meat toppings and vegetable toppings -->
    <div class="row">

    <!-- Meat toppings -->
        <div class="col-5">
            <fieldset style = "border: 1px solid black; width: 90%; border-top: none;">
            <legend>Meat Toppings</legend>
            
                    <div class="form-check form-check-reverse">
                        <div class="col-10">
                          <input class="form-check-input" type="checkbox" value="pepperoni" id="pepperoni" >
                        </div>
                        <div class="col-2">
                          <label class="form-check-label" for="pepperoni">Pepperoni</label>
                        </div>
                    </div>

                    <div class="form-check form-check-reverse">
                        <div class="col-10">
                        <input class="form-check-input" type="checkbox" value="ham" id="ham">
                        </div>
                        
                        <div class="col-2">

                        <label class="form-check-label" for="ham">Ham</label>
                        </div>

                    </div>



                    <div class="form-check form-check-reverse">
                      <div class="col-10">

                      <input class="form-check-input" type="checkbox" value="pork" id="pork">
                      </div>

                      <div class="col-2">
          
                      <label class="form-check-label" for="pork">Pork</label>
                      </div>

                    </div>



                    <div class="form-check form-check-reverse">
                      <div class="col-10">


                      <input class="form-check-input" type="checkbox" value="sausage" id="sausage">
                      </div>

                      <div class="col-2">
              
                      <label class="form-check-label" for="sausage">Sausage</label>
                      </div>



                    </div>


                    <div class="form-check form-check-reverse">
                      <div class="col-10">


                      <input class="form-check-input" type="checkbox" value="chicken" id="chicken">

                      </div>

                      <div class="col-2">
                      <label class="form-check-label" for="chicken">Chicken</label>
                      </div>

                    
                    </div>  





            <!-- form group meat toppings closing tag -->
            </div>


          


            
        


        <!-- Vegetables toppings -->
        <div class="col-7">
            <fieldset style = "border: 1px solid black; width: 100%; border-top: none;">
            <legend class="legend-text">Vegetable Toppings</legend>

              <div class="form-check form-check-reverse">
                        <div class="col-10">
                          <input class="form-check-input" type="checkbox" value="mushrooms" id="mushroom" >
                        </div>
                        <div class="col-2">
                          <label class="form-check-label" for="mushrooms">Mushrooms</label>
                        </div>
                    </div>

                    <div class="form-check form-check-reverse">
                        <div class="col-9">
                        <input class="form-check-input" type="checkbox" value="greenpepper" id="gp">
                        </div>
                        
                        <div class="col-3">

                        <label class="form-check-label" for="ham">Green Peppers</label>
                        </div>

                    </div>



                      <div class="col-10">
                          <input class="form-check-input" type="checkbox" value="onions" id="onions" >
                        </div>
                        <div class="col-2">
                          <label class="form-check-label" for="onions">Onions</label>
                        </div>
                    </div>

                    <div class="form-check form-check-reverse">
                        <div class="col-10">
                        <input class="form-check-input" type="checkbox" value="tomatoes" id="tomatoes">
                        </div>
                        
                        <div class="col-2">

                        <label class="form-check-label" for="tomatoes">Tomatoes</label>
                        </div>

                    </div>




                      <div class="form-check form-check-reverse">
                        <div class="col-10">
                        <input class="form-check-input" type="checkbox" value="jalapenos" id="jalapenos">
                        </div>
                        
                        <div class="col-2">

                        <label class="form-check-label" for="jalapenos">Jalapenos</label>
                        </div>

                    </div>













                </fieldset>

</div>    
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