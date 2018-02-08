<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <title>User Login</title>
   </head>
   <body>
      <?php
         include_once('../pages/header.php')
          ?><br /><br />
      <div class="row">
         <div class="col-md-8">
            <p align="center"><img src="../images/Key.jpg" alt="MAXOMUS Accounting Information System" class="img-responsive" /></p>
         </div>
         <div class="col-md-4">
        
            <fieldset>
               <legend>User Access</legend>
               <div class="container">
                  <!--<h2>Please Enter username and password</h2>-->
                  <form class="form-inline" action="/action_page.php">
                     <div class="form-group">
                        <div class="input-group">
                           <div class="input-group-addon" title="User Name"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
                           <input name="username" type="text" class="form-control" id="username" placeholder="Enter username" maxlength="25">
                        </div>
                     </div>
                     <br /><br />
                     <div class="form-group">
                        <div class="input-group">
                           <div class="input-group-addon" title="Password"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>
                           <input name="pwd" type="password" class="form-control" id="pwd" placeholder="Enter password" maxlength="25">
                        </div>
                     </div>
                     <br /><br />
                     <div class="col-md-8">
                        <div class="checkbox">
                           <label><input type="checkbox" name="remember"> Remember me</label>
                        </div>
                     </div>
                     <div class="col-md-8">
                        <button type="submit" class="btn btn-default">Login</button>  <button type="reset" class="btn btn-default">Reset</button>
                        <br /><br />
                     </div>
               </form>
         	  </div>
         </fieldset>
         
         <div class="col-md-8">
         <a href="#"><h4 style="color:#F00">Forget Password?? Click me!!</h4></a>
         <a href="userRegister.php"><h4>New User!!! Please Register</h4></a>
         <a href="#" style="color:#00F"><h4 style="color:#00F">Need Support??  <img src="../images/support.png" height="15px" /></h4></a>
     	 </div>
		
      </div>
      </div>
      <?php
         include_once('../pages/footer.php')
         
         
         ?>
   </body>
</html>