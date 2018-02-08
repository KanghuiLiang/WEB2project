<?php
session_start();
require('cfg/connect.php');
$post = $_POST;
  if(!empty($post['username']) && !empty($post['password'])){
  $login = @mysql_query("select * from customer_login where username='".$post['username']."' AND password='".$post['password']."'") or die('Failed to connect');
  if(@mysql_num_rows($login)){
  $_SESSION['userIsLoggedIn'] = true;
    header("location:index.php");
  }else{
    $errLogin = true;
}
}
include('templates/header.php');
?>

          <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
              <h2 class="page-header">Registered Customers</h2>
                <div class="alert alert-danger" style="display:<?php echo isset($errLogin)?'block':'none';?>">
                  invalid username or password.
                </div>
                <form method="POST">
              <div class="form-group"><input type="text" name="username" class="form-control" placeholder="Username"></div>
              <div class="form-group"><input type="text" name="password" class="form-control" placeholder="Password"></div>
              <div class="form-group"><input type="submit" class="col-sm-12 btn btn-primary" value="Login"></div>

                <input type="checkbox" checked="checked"> Remember me
                  
            </form>
            


 </div>
</div>
           

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>