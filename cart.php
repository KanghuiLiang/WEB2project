
<?php
  session_start();
  function calculateGrandTotal(){
   return 0;
  }
?>
  
<?php
  include('templates/header.php');
?>
  <div class ="container-fluid">
    <div class ="row">
<?php include("templates/left_menu.php"); ?>
   <div class="col-md-9">
 <div class="panel panel-default">
  <div class="panel-heading panel-heading-red">
    <h3 class="panel-title">The Gaming Arena</h3>
  </div>
<div class="panel-body">
<table class="table table-striped">
  <tr>
      <th>Product</th>
      <th>Quantity</th>
      <th>Price</th>
  </tr>
  <?php
    if(isset($_SESSION['cart'])){
      foreach($_SESSION['cart'] as $cart){
        echo '<tr><td>'.$cart['item']['title'].'</td><td>1</td> <td>$'.$cart['item']['price'].'</td></tr>';
      }
    }
  ?>
       <tr>
           <td colspan="3"class="cart-subtotal">
              Subtotal: <?php echo calculateTotal(); ?>
             </td>
           </tr>
            <tr>
           <td colspan="3"class="cart-shipping">
              Shipping: $4.99
             </td>
           </tr>
            <tr>
           <td colspan="3"class="cart-subtotal">
              Total: <?php echo calculateGrandTotal(); ?>
             </td>
           </tr>
</table>

<h3>Shipping Information</h3>
	
  <div class="form-group">
    <label> Address</label>
    <input type="text" class="form-control" name="address">
  </div>
  <div class="form-group">
    <label> Address 2</label>
    <input type="text" class="form-control" name="address2">
  </div>
  <div class="form-group">
    <label> City</label>
    <input type="text" class="form-control" name="City">
  </div>
   <div class="form-group">
    <label> State</label>
    <input type="text" class="form-control" name="State">
  </div>
 <div class="form-group">
    <label> Zip</label>
    <input type="text" class="form-control" name="zip">
  </div>
  <form>
<button type="submit" name="checkout" class="btn btn-primary">checkout</button>
                          </form>

</div>

 </div>
</div>
           

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>