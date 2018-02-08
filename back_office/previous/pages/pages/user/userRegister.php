<?php
   include_once('../header.php')
   
  // echo '<title> User Register</title>';
   ?>
<div class="row">
<div class="col-md-3">
   <img src="https://maxomus.creativeitpro.com/images/user-id-icon.png" alt="" class="img-responsive"/>
</div>
<div class="col-md-8">
<form action="../db/addUser_action2.php" method="post">
   <fieldset>
      <legend>Please Register Here</legend>
      <br />
      <fieldset>
         <legend>Personal Information</legend>
         <div class="form-group">
         <div class="input-group">
            <div class="input-group-addon" title="Employee ID:">Employee ID:</div>
            <input name="eid" placeholder="employee ID no" title="Employee ID:" class="form-control" type="text" maxlength="25" />
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
          
     
				<form action="saveimage.php" enctype="multipart/form-data" method="post">

					<table style="border-collapse: collapse; font: 12px Tahoma;" border="0" cellspacing="5" cellpadding="5">

						<tbody>
                    		<tr>

								<td><input name="uploadedimage" type="file" class="btn btn-active">
                                <input name="Upload Now" type="submit" value="Upload Image" class="btn btn-info">
								</td>
							</tr>
						</tbody>
                    </table>
				</form>

		
        
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
                  text.innerHTML = "Strength: " + "<strong>" + strength[result.score] + "</strong>" + "<span class='feedback'>" + result.feedback.warning + " " + result.feedback.suggestions + "</span>"; 
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
            <input type="password" class="form-control" name="conpassword" id="confirm_password" />
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
            <div class="input-group-addon" title="ZIP:">Post Code:</div>
            <select name="zip" class="form-control" size="1">
             <option value="10250">10250</option>
             </select>
         </div>
         <br />
         <div class="form-group">
            <div class="input-group">
               <div class="input-group-addon" title="Priority:">Piority:</div>
               <select name="piority" class="form-control" size="1" value="10250">
                 <option value="1">Management</option>
                 <option value="2">GM</option>
                 <option value="3">Manager</option>
                 <option value="4">Accounts</option>
                 <option value="5">HR</option>
                 <option value="6">Executice</option>
               </select>
            </div>
            <br>
           <!-- <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon" title="Supervisor:">Supervisor ID:</div>
                  <select name="Supervisor" class="form-control" size="1"></select>
               </div>-->
      </fieldset>
      <br />
      <fieldset>
      <legend>Phone No</legend>
      Contact No:
      <div class="input_fields_wrap">
      <div><input type="number"  placeholder='Please do not start with country code' class="form-control"  name="phone[]"></div>
       <br>
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
                     $(wrapper).append(' <div><input type="number"  placeholder="Please do not start with country code" class="form-control"  name="phone[]"><a href="#" class="remove_field">Remove</a></div>');
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
   <?php 
   //if(password==conpassword){
   echo '<input name="" class="btn btn-success" type="submit" value="Register" />';
   //}
   ?><input name="" class="btn btn-danger" type="reset" value="Reset" />
</form>
</div>
</div>
<?php
   include_once('../footer.php')
   
   
   ?>