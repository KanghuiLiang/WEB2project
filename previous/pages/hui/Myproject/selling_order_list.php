<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Selling Order</title>
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
<script src="https://use.fontawesome.com/1e8aa29a4f.js"></script>
</head>
<body>
<?php 
  session_start();
 ?>
 <div class="container">
 
  <h2>Selling Order</h2>
  <br>
 <table class="table table-bordered table-striped">
    <thead>
      <tr>
       <th>Order Date</th>
       <th>Order No. (Bill or invoice)</th>
       <th>Total</th>
       <th>VAT output</th>
       <th>Custmoer name</th>
       <th>Due Day</th>
       <th>Shipping date</th>
       <th>Shipping Address</th>
       <th>Order status</th>
       <th>Confirm</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>123</td>
        <td>Game1</td>
        <td>1000</td>
        <td>2000</td>
        <td>Customer1</td>
        <td>10.10</td>
        <td>10.10</td>
        <td>Bangkok</td>
        <td>Paid</td>
        <td><a href="invoice.php"><i class="fa fa-check fa-2x" aria-hidden="true"></i></a>  
             <!-- Once click the Check Mark, will go to Invoice Page to send invoice to customers -->
        <a href="mailto:someone@example.com?Subject=Hello%20again" target="_top"><i class="fa fa-times fa-2x" aria-hidden="true"></i> </a>
             <!-- Close Mark is to remove the order, then send the customers that we cancel the order-->       
       </td>
      </tr>
      <tr>
         <td>1234</td>
        <td>Game2</td>
        <td>2000</td>
        <td>4000</td>
        <td>Customer2</td>
        <td>10.11</td>
        <td>10.11</td>
        <td>Bangkok</td>
        <td>Unpaid</td>
        <td><a href="invoice.php"><i class="fa fa-check fa-2x" aria-hidden="true"></i></a>  
             <!-- Once click the Check Mark, will go to Invoice Page to send invoice to customers -->
        <a href="mailto:someone@example.com?Subject=Hello%20again" target="_top"><i class="fa fa-times fa-2x" aria-hidden="true"></i> </a>
             <!-- Close Mark is to remove the order, then send the customers that we cancel the order-->       
       </td>
      </tr>
      <tr>
         <td>6454</td>
        <td>Game3</td>
        <td>3000</td>
        <td>6000</td>
        <td>Customer3</td>
        <td>10.14</td>
        <td>10.14</td>
        <td>Chiang Mai</td>
        <td>Pending</td>
        <td><a href="invoice.php"><i class="fa fa-check fa-2x" aria-hidden="true"></i></a>  
             <!-- Once click the Check Mark, will go to Invoice Page to send invoice to customers -->
        <a href="mailto:someone@example.com?Subject=Hello%20again" target="_top"><i class="fa fa-times fa-2x" aria-hidden="true"></i> </a>
             <!-- Close Mark is to remove the order, then send the customers that we cancel the order-->       
       </td>
      </tr>
      <tr>
       <td>6454</td>
        <td>Game3</td>
        <td>3000</td>
        <td>6000</td>
        <td>Customer3</td>
        <td>10.14</td>
        <td>10.14</td>
        <td>Phuket</td>
        <td>Paid</td>
        <td><a href="invoice.php"><i class="fa fa-check fa-2x" aria-hidden="true"></i></a>  
             <!-- Once click the Check Mark, will go to Invoice Page to send invoice to customers -->
        <a href="mailto:someone@example.com?Subject=Hello%20again" target="_top"><i class="fa fa-times fa-2x" aria-hidden="true"></i> </a>
             <!-- Close Mark is to remove the order, then send the customers that we cancel the order-->       
       </td>
      </tr>
      <tr>
       <td>6454</td>
        <td>Game3</td>
        <td>3000</td>
        <td>6000</td>
        <td>Customer3</td>
        <td>10.14</td>
        <td>10.14</td>
        <td>Chiang Mai</td>
        <td>Shipping</td>
        <td><a href="invoice.php"><i class="fa fa-check fa-2x" aria-hidden="true"></i></a>  
             <!-- Once click the Check Mark, will go to Invoice Page to send invoice to customers -->
        <a href="mailto:someone@example.com?Subject=Hello%20again" target="_top"><i class="fa fa-times fa-2x" aria-hidden="true"></i> </a>
             <!-- Close Mark is to remove the order, then send the customers that we cancel the order-->       
       </td>
      </tr>
      <tr>
       <td>6454</td>
        <td>Game3</td>
        <td>3000</td>
        <td>6000</td>
        <td>Customer3</td>
        <td>10.14</td>
        <td>10.14</td>
        <td>Nan</td>
        <td>Shipped</td>
        <td><a href="invoice.php"><i class="fa fa-check fa-2x" aria-hidden="true"></i></a>  
             <!-- Once click the Check Mark, will go to Invoice Page to send invoice to customers -->
        <a href="mailto:someone@example.com?Subject=Hello%20again" target="_top"><i class="fa fa-times fa-2x" aria-hidden="true"></i> </a>
             <!-- Close Mark is to remove the order, then send the customers that we cancel the order-->       
       </td>
      </tr>   
    </tbody>
  </table>
  </form>
</div>
<!-- <script>
  $(document).ready(function(){
    $("u").click(function(){
        $("tr").remove(".delete1");
    });
});
</script> -->
</body>
</html>