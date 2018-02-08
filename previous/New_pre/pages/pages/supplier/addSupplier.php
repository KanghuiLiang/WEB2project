<?php
include_once('../header.php');
include_once('../db/iloveyou.php');
?>

      <div class="row">
      <div class="col-md-1">
      </div>
      <div class="col-md-7">
      <form action="../db/addSupplier.php" method="post">
         <fieldset>
            <legend>Add New Supplier</legend>
            <br />
            <fieldset>
               <legend>Supplier ID</legend>
               <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon" title="Supplier ID:">Supplier ID:</div>
                  <input name="sid" placeholder="Supplier ID no" title="Supplier ID:" class="form-control" type="text" maxlength="25" />
               </div>
               <br />
               <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon" title="Supplier Name:">Supplier Name:</div>
                  <input name="Suppliername" placeholder="Supplier Name" title="Supplier Name:" class="form-control" type="text" maxlength="25" />
               </div>
               <br />
               <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon" title="E-mail:">Supplier E-mail:</div>
                  <input name="s.email" placeholder="yourname@domain" title="Supplier E-mail" class="form-control" type="email" maxlength="25" />
               </div>
               <br />
            </fieldset>
            <br />
            <br />
            <fieldset>
               <legend>Supplier Bank Information</legend>
               <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon" title="Bank Name:">Bank Name:</div>
                  <input name="bankname" title="Bank Name" placeholder="Should not more than 25  charectar" class="form-control" type="text" maxlength="25" />
               </div>
               <br />
               <!--<label>Password:</label>               
                  <!--<label for="password">Enter password</label>_-->
               <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon" title="Account No:">Account No:</div>
                  <input type="text" class="form-control" title="Account No" name="account">
               </div>
               <br>
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
                        <select name="zip" class="form-control" id="zipzip" >
							<option selected="true" disabled="disabled">Choose ZIP/Postal Code</option>
						 <?php 
							$q = mysqli_query($conn, "SELECT `zip` FROM `location` ORDER BY zip ASC");
   							$res=mysqli_num_rows($q);
							while($res = mysqli_fetch_assoc($q)){//Here we retrieve values from database and initiate SESSION Variables  
								echo '<option value="'.$res['zip'].'">'.$res['zip'].'</option>';
   							}
  							?> 
						 
						 </select>
                     </div>

                     <br />
<!--
               <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon" title="Locality:">Locality:</div>
                  <input name="locality" placeholder="Soi/road"  class="form-control" type="text" maxlength="25" />
               </div>
               <br />

               <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon" title="Region:">Region:</div>
                  <input type="text" name="Region" id="Region">
				   
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
				   
			<script src="../db/addSupplier.js"></script>-->
                 
            </fieldset>
            <br />
            <fieldset>
            <legend>Phone No</legend>
            Contact No:
            <div class="input_fields_wrap2">
            <div><input type="text"  placeholder='Please do not start with country code or "0"' class="form-control"  name="contact[]"></div>
            </div>
            <button class="btn btn-warning add_field_button"><i class="fas fa-plus"></i> Add More Contact</button>
            <script>
               $(document).ready(function() {
                   var max_fields      = 10; //maximum input boxes allowed
                   var wrapper         = $(".input_fields_wrap2"); //Fields wrapper
                   var add_button      = $(".add_field_button"); //Add button ID
                   
                   var x = 1; //initlal text box count
                   $(add_button).click(function(e){ //on add input button click
                       e.preventDefault();
                       if(x < max_fields){ //max input box allowed
                           x++; //text box increment
                           $(wrapper).append('<div><br><div class="form-group"><div class="input-group"><div class="input-group-addon" title="Phone No:">Contact No:</div><input type="text" placeholder="Please do not start with country code or 0" class="form-control"  name="contact[]"/></div><a href="#" class="remove_field">Remove</a></div>'); //add input box
                       }
                   });
                   
                   $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                       e.preventDefault(); $(this).parent('div').remove(); x--;
                   })
               });
            </script>
            </fieldset>
				    <br />
            <fieldset>
            <legend>Product Information</legend>
				<h4 style="color: #FF0004">You can add at max 100 products using this page.</h4>
				
				<table>
					<tr>
						<th width="25%">Product ID</th>
						<th width="25%">Product Name</th>
						<th width="25%">Cost Per Unit</th>
					</tr>
					<tr>
						<td width="25%"><input type="text"  placeholder='Product ID' class="form-control"  name="pid[]"></td>
						<td width="25%"><input type="text"  placeholder='Product Name' class="form-control"  name="pname[]"></td>
						<td width="25%"><input type="text"  placeholder='Product price' class="form-control"  name="price[]"></td>
					</tr>
					
					
					
				</table>
				<br>
				<div class="input_fields_wrap"></div>
<!--
            Product ID:
            <div class="input_fields_wrap">
            <div><input type="text"  placeholder='Product ID' class="form-control"  name="pid[]"></div>
            </div>
			Product Name:
            <div class="input_fields_wrap">
            <div><input type="text"  placeholder='Product Name' class="form-control"  name="pname[]"></div>
            </div>
			Product price:
            <div class="input_fields_wrap">
            <div><input type="text"  placeholder='Product price' class="form-control"  name="price[]"></div>
            </div>
-->
           <button class="btn btn-warning add_product_button"><i class="fas fa-plus"></i> Add More Product</button>
            <script>
               $(document).ready(function() {
                   var max_fields      = 100; //maximum input boxes allowed
                   var wrapper         = $(".input_fields_wrap"); //Fields wrapper
                   var add_product      = $(".add_product_button"); //Add button ID
                   
                   var x = 1; //initlal text box count
                   $(add_product).click(function(e){ //on add input button click
                       e.preventDefault();
                       if(x < max_fields){ //max input box allowed
                           x++; //text box increment
                           $(wrapper).append('<div><table><tr><td width="25%"><input type="text" placeholder="Product ID" class="form-control"  name="pid[]"></td><td width="25%"><input type="text" placeholder="Product Name" class="form-control"  name="pname[]"></td><td width="25%"><input type="text"  placeholder="Product price" class="form-control"  name="price[]"></td></tr></table><a href="#" class="remove_product">Remove</a></div>'); //add input box
                       }
                   });
                   
                   $(wrapper).on("click",".remove_product", function(e){ 
					   //user click on remove text
                       e.preventDefault(); $(this).parent('div').remove(); x--;
                   })
               });
            </script>
            </fieldset>
         </fieldset>
         <br />
         <input name="submit" type="submit" class="btn btn-success" id="register" value="Register" />
         <input name="reset" type="reset" class="btn btn-danger" id="reset" value="Reset" />
      </form>
      </div>
      <div class="col-md-3">
		  <p align="right"> <img src="../images/images.png" alt="" class="img-responsive"/></p>
      </div>
      </div>

 
      <?php
         include_once('../footer.php')
         
         
         ?>