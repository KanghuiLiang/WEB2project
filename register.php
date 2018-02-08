<php
$con = mysqli_connect
$servername = "localhost";
$username = "root";
$password = "";
$db = 'maxomus_ais';

or die ("Failed to connect mysql server " .mysqli_connect_error());
$username = mysqli_escape string ($con, $_POST['username']);
$username = mysqli_escape string ($con, $_POST['firstname']);
$username = mysqli_escape string ($con, $_POST['lastname']);
$username = mysqli_escape string ($con, $_POST['password']);
$username = mysqli_escape string ($con, $_POST['shippingaddress']);
$username = mysqli_escape string ($con, $_POST['email']);

$query = "INSERT INTO CUSTOMER(Username, Password, FirstName, LastName, Gender, Address, Email, Phone)
VALUES ('$username', '$password', $lname', '$gender', '$address', '$email', '$phone')";
if (!mysqli_query(#con, $query))
{
  echo "Error " .mysqli_error($con);
}
else
{
head("Location: index.php?msg=1');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Game Shop</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/ecom.css">
  </head>

  <body>

   <nav class="navbar navbar-default navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Game Shop</a>
       
    </div>
  <form class="navbar-form navbar-left" role="search">
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Search">
    </div>
 
  </form>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="contactUS.php">Help</a></li>
          <li><a href="login.php">Sign In</a></li>
          <li><a href="register.php">Register</a></li>
        <li class="sign In">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Change Language <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Thai</a></li>
            <li><a href="#">ENG</a></li>
          </ul>
        </li>
       </ul>
      </div><!-- /.navbar-collapse -->
     </div><!-- /.container-fluid -->
   </nav>

  

  <div class ="container-fluid">
    <div class ="row">
        <div class ="col-md-3">
          <div class ="cart-block">
              <form action ="cart/update" methode="post">
                  <table cellpadding="6" cellspacing="1" style="width:100%" border""0">
                     <tr>
                        <th>QTY</th>
                        <th>item Description</th>
                        <th style= "text-align:right">Item Price</th>
                      </tr>
                    <tr>
                     <td></td>
                      <td class ="right"><strong>Total</strong></td>
                       <td class="right" style="text-align:right">$</td>
                      </tr>
                    </table>
                    <br>
                    <p><button class ="btn btn-default" type="submit">Update Cart</button>
                    <a class = "btn btn-default" href="cart.php">Go To Cart</a></p>
              </form>
          
        </div>
        <div class="panel panel-default panel-list">
          <div class="panel-heading panel-heading-red">
            <h3 class="panel-title">Categories</h3>
          </div>
        <!-- List group -->
          <ul class="list-group">
           <li class="list-group-item"><a href="#">Xbox 360</a></li>
            <li class="list-group-item"><a href="#">PS 4 Games</a></li>
            <li class="list-group-item"><a href="#">Nintendo Games</a></li>
            <li class="list-group-item"><a href="#">PS 3 Games</a></li>
            <li class="list-group-item"><a href="#">PS 2 Games</a></li>
            <li class="list-group-item"><a href="#">Gaming Consoles</a></li>
           
          </ul>
      </div>
      <div class="panel panel-default panel-list">
        <div class="panel-heading panel-heading-red">
          <h3 class="panel-title">Most Popular</h3>
        </div>
      <!-- List group -->
        <ul class="list-group">
          <li class="list-group-item">Xbox 360</li>
          <li class="list-group-item">PS 4 Games</li>
          <li class="list-group-item">Nintendo Games</li>
          
        </ul>
      </div>
  </div>
   <div class="col-md-9">
 <div class="panel panel-default">
  <div class="panel-heading panel-heading-red">
    <h3 class="panel-title">The Gaming Arena</h3>
  </div>

<h2 class="page-header"> Register a New Customer Account</h2>
         	<div class="row">
         		<div class="col-sm-4 col-sm-offset-4">
	         			<form method="POST" name="form1" action="formAction.php">
							<div class="form-group">
                <label>FirstName:</label>
                  <input type="text" name="firstName" class="form-control" placeholder="FirstName">
              </div>
              <div class="form-group">
                <label>LastName:</label>
                  <input type="text" name="lastName" class="form-control" placeholder="LastName">
              </div>
              <div class="form-group">
                <label>Username:</label>
                  <input type="text" name="lastName" class="form-control" placeholder="Username">
              </div>
              <div class="form-group">
                <label>Email:</label>
                  <input type="text" name="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <label>Shipping Address:</label>
                  <input type="text" name="lastName" class="form-control" placeholder="ShippingAddress">
              </div>
              <div class="form-group">
                <label>Password:</label>
                  <input type="text" name="passwd" class="form-control" placeholder="Password">
              </div>

              <div class="form-group">
                  <input type="submit" class="col-sm-12 btn btn-primary" value=" Register ">
              </div>
						</form>
						


 </div>
</div>
           

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>