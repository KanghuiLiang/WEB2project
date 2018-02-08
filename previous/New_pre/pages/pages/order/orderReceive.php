<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
      <link href="../styles/passwordmeter.css" rel="stylesheet" />
      <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <title>User Register</title>
   </head>
   <body>
      <?php
         include_once('../pages/header.php')
         
         
         ?>
      <div class="row">
      <div class="col-md-3">
         <img src="../images/user-id-icon.png" alt="" class="img-responsive"/>
      </div>
      <div class="col-md-8">
      <form action="" method="get">
         <fieldset>
            <legend>Please Register Here</legend>
            <br />
            <fieldset>
               <legend>Personal Information</legend>
               <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon" title="Employee ID:">Employee ID:</div>
                  <input name="eID" placeholder="employee ID no" title="Employee ID:" class="form-control" type="text" maxlength="25" />
               </div>
               <br />
               <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon" title="Full Name:">Full Name:</div>
                  <input name="name" placeholder="Full Name" title="Full Name:" class="form-control" type="text" maxlength="25" />
               </div>
               <br />
               <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon" title="E-mail:">E-mail:</div>
                  <input name="email" placeholder="yourname@domain" title="E-mail" class="form-control" type="email" maxlength="25" />
               </div>
               <br />
               Photo:
               <input type="file" placeholder="jpg, jpeg, gif and png only not more than 5Mb" class="form-control" name="fileToUpload" id="fileToUpload">
               <input type="submit" class="btn-warning" value="Upload Image" name="submit" />
            </fieldset>
            <br />
            <br />
            <fieldset>
               <legend>Login Information</legend>
               <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon" title="User Name:">User Name:</div>
                  <input name="username" title="User Name" placeholder="Should not more than 25  charectar" class="form-control" type="text" maxlength="25" />
               </div>
               <br />
               <!--<label>Password:</label>               
                  <!--<label for="password">Enter password</label>_-->
               <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon" title="Password:">Password:</div>
                  <input type="password" class="form-control" title="Password" name="password" id="password">
               </div>
               <meter max="4" id="password-strength-meter"></meter>
               <p id="password-strength-text"></p>
               <script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.2.0/zxcvbn.js"></script>
               <script>
                  var strength = {
                  0: "Worst ☹",
                  1: "Bad ☹",
                  2: "Weak ☹",
                  3: "Good ☺",
                  4: "Strong ☻"
                  }
                  
                  var password = document.getElementById('password');
                  var meter = document.getElementById('password-strength-meter');
                  var text = document.getElementById('password-strength-text');
                  
                  password.addEventListener('input', function()
                  {
                    var val = password.value;
                    var result = zxcvbn(val);
                  
                    // Update the password strength meter
                    meter.value = result.score;
                   
                    // Update the text indicator
                    if(val !== "") {
                        text.innerHTML = "Strength: " + "<strong>" + strength[result.score] + "</strong>" + "<span class='feedback'>" + result.feedback.warning + " " + result.feedback.suggestions + "</span"; 
                    }
                    else {
                        text.innerHTML = "";
                    }
                  });
               </script>
               <br>
               <!--<label>Confirm Password:</label>-->
               <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon" title="Password:">Confirm Password:</div>
                  <input type="password" class="form-control" name="confirm_password" id="confirm_password" />
               </div>
               <span id='message'></span>
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
               <script>
                  $('#password, #confirm_password').on('keyup', function () {
                   if ($('#password').val() == $('#confirm_password').val()) {
                     $('#message').html('Matching').css('color', 'green');
                   } else 
                     $('#message').html('Not Matching').css('color', 'red');
                  });
               </script>
            </fieldset>
            <br />
            <fieldset>
               <legend>Address</legend>
               <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon" title="Address:">Address:</div>
                  <input name="address" placeholder="Address such as House no" class="form-control" type="text" maxlength="50" />
               </div>
               <br />
               <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon" title="Locality:">Locality:</div>
                  <input name="locality" placeholder="Soi/road"  class="form-control" type="text" maxlength="25" />
               </div>
               <br />
               <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon" title="Region:">Region:</div>
                  <select name="Region" class="form-control" size="1"></select>
               </div>
               <br />
               <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon" title="District:">District:</div>
                  <select name="dis" class="form-control" size="1"></select>
               </div>
               <br />
               <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon" title="Sub-District:">Sub-dristrict:</div>
                  <select name="sub_dis" class="form-control" size="1"></select>
               </div>
               <br />
               <div class="form-group">
                  <div class="input-group">
                     <div class="input-group-addon" title="City:">City:</div>
                     <select name="city" class="form-control" size="1"></select>
                  </div>
                  <br />
                  <div class="form-group">
                     <div class="input-group">
                        <div class="input-group-addon" title="ZIP:">Post Code:</div>
                        <select name="zip" class="form-control" size="1"></select>
                     </div>
                     <br />
            </fieldset>
            <br />
            <fieldset>
            <legend>Phone No</legend>
            Contact No:
            <div class="input_fields_wrap">
            <div><input type="text"  placeholder='Please do not start with country code or "0"' class="form-control"  name="contact"></div>
            </div>
            <button class="add_field_button"><i class="fas fa-plus"></i> Add More Contact</button>
            <script>
               $(document).ready(function() {
                   var max_fields      = 10; //maximum input boxes allowed
                   var wrapper         = $(".input_fields_wrap"); //Fields wrapper
                   var add_button      = $(".add_field_button"); //Add button ID
                   
                   var x = 1; //initlal text box count
                   $(add_button).click(function(e){ //on add input button click
                       e.preventDefault();
                       if(x < max_fields){ //max input box allowed
                           x++; //text box increment
                           $(wrapper).append('<div><br><div class="form-group"><div class="input-group"><div class="input-group-addon" title="Phone No:">Contact No:</div><input type="text" placeholder="Please do not start with country code or 0" class="form-control"  name="mytext[]"/></div><a href="#" class="remove_field">Remove</a></div>'); //add input box
                       }
                   });
                   
                   $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                       e.preventDefault(); $(this).parent('div').remove(); x--;
                   })
               });
            </script>
            </fieldset>
         </fieldset>
         <br />
         <input name="" class="btn-success" type="submit" value="Register" /><br />
         <input name="" class="btn-danger" type="reset" value="Reset" />
      </form>
      </div>
      </div>
      <?php
         include_once('../pages/footer.php')
         
         
         ?>
   </body>
</html>