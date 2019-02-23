<!--                                                                      --/>
Description: A program to take user input and add it to a session array

Author: Franklin Glover
Date: 02/21/2019
Version: 1.0 
<\--                                                                       -->

<?php
session_start();

// If user clicked Submit
if(isset($_POST['submit']))
{
  // Test that the POST is going through
  // var_dump($_POST);

  // Add the posted item to the SESSION
  $_SESSION['cart'][] = $_POST['cartItem'];

  // Dump the contents of the cart
  // var_dump($_SESSION['cart']);

}
// If user wanted to clear the cart
elseif(isset($_POST['clearCart']))
{
  // Set the SESSION to an empty array
  $_SESSION['cart'] = array();
}


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PHP Cart</title>
  <!-- Include Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <form action="" name="cartForm" method="POST">
          <div class="form-group">
            <label for="fartForm">
              Enter an Item:
            </label>
            <input type="text" name="cartItem" id="cartItem" class="form-control">
          </div>
          <div class="form-group">
            <button class="btn btn-primary" type="submit" name="submit">
              Submit
            </button>
            <button class="btn btn-info" type="submit" name="clearCart">
              Clear Cart
            </button>
          </div>
        </form>
      </div>
      <div>
        <p>Current Items in Cart:</p>
        <?php
          // If the SESSION variable is set
          if(isset($_SESSION['cart']))
          {
            // For each SESSION['cart'] item, execute the following code
            foreach($_SESSION['cart'] as $item)
            {
        ?>
          <ul>
            <!-- Print out the current $item as a list item -->
            <li><?= $item ?></li>
          </ul>
        <?php 
            } // Close out the foreach
          } // Close out the if statement
        ?>
      </div>
    </div>
  </div>
</body>
</html>