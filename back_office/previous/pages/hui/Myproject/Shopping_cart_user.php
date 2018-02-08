<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Shopping Cart</title>
  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/Cart.css">

</head>
<body>
  <?php
     include_once('Navigation.php');
     session_start();
  ?>
  <div class="container">
  <h2>Cart</h2>

  <div class="table-responsive">          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>
 <input type="checkbox" onclick="toggle(this)" /> Select All </th>
        <th>Item ID</th>
        <th>Item Name</th>
        <th>Quantity</th>
        <th>Unit Price</th>
        <th>Amount</th>
        <th>Opearating</th>
      </tr>
    </thead>
    <tbody>
      <tr class="delete1">
        <td><input type="checkbox" name="All" value="bar1" id="a1"></td>
        <td>1</td>
        <td>Anna</td>
        <td>
<div id="myform">
    <button type="button" id="sub" class="sub">-</button>
    <input type="number" id="price[]" value="1" min="0" class="qty" />
    <button type="button" id="add" class="add">+</button>
</div></td>
<td>35</td>
        <td>New York</td>
        <td><u>Remove</u></td>
      </tr>
      <tr class="delete2">
        <td><input type="checkbox" name="All" value="bar2" id="a2"></td>
        <td>1</td>
        <td>Anna</td>
        <td>
<div id="myform">
    <button type="button" id="sub2" class="sub">-</button>
    <input type="number" id="price[]" value="1" min="0" class="qty"  />
    <button type="button" id="add2" class="add">+</button>
</div></td>
        <td>35</td>
        <td>New</td>
        <td><u>Remove</u></td>
      </tr>
      <tr>
        <td>
        <button type="button" id="empty" value="EmptyCart"><a href="buymore.php">Detele</a></button> 
      </td>
      <td>
        <a href=" ">Share</a> </td>
        <td><a herf="">Add to Wish List</a></td>
        <td>Chose <span>Quantity</span> items</td>
        <td>Amount:<span id="amount">0</span></td>
        <td>VAT:</td>
        <td><a href="">Go to Pay</a></td>
    </tbody>
  </table>
  

  </div>


</div>
<?php include('Pages/footer.php'); ?>
<script src="js/Cart.js" ></script>

</body>
</html>