<!DOCTYPE html>
<html lang="en">
	   <style>
/*<!--body {margin:0;}-->*/

.total {
  /*overflow: hidden;*/
  background-color: #E9E9E9;
  position: fixed;
  bottom: 0;
	right: 0;
  width: 300px;
	color: #C90000;
}

.total a {
  float: left;
  display: block;
  color:  #C90000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 18px;
}

.main {
  padding: 16px;
  margin-bottom: 30px;
  height: 1500px; /* Used in this example to enable scrolling */
}
</style>
      <meta charset="UTF-8">
      <title>Supply</title>
      <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="https://use.fontawesome.com/1e8aa29a4f.js"></script>
     
	     <!--
**********************************************************************************************************
********************************************************************************************************************************************************Script for total********************************************
*******************************************************************************************************************************************************************************************************************-->
	   
	   <script type="text/javascript">
         var total = 0;
         
         function product(item){
             if(item.checked){
                total+= parseInt(item.value);
         
             }else{
                total-= parseInt(item.value);
             }
             //alert(total);
             document.getElementById('Totalcost').innerHTML = total + " /-";
         }
         
         
         
      </script>
   </head>
   <body>
      <iframe src="header.php" width="100%" height="250px" frameborder="0"></iframe>
	  
      <div class="container">
         <h2>Supply</h2>
		  
		  
		  <div class="total">
  <a href="#"> <p>Total Amount : <span id="Totalcost"> 0</span>THB</p></a>
</div>
		  <!--
**********************************************************************************************************
********************************************************************************************************************************************************Add Supllier************************************************
*******************************************************************************************************************************************************************************************************************-->
         <div class="panel-group" id="accordion">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Add New Supplies</a>
                  </h4>
               </div>
               <div id="collapse1" class="panel-collapse collapse in">
                  <div class="panel-body">
                     <form action="">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="input-group-addon" title="Company Name:">Company Name:</div>
                                    <input name="s.name" id="s.name" placeholder="Company Name" title="Company Name:" class="form-control" type="text" maxlength="25" />
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="input-group-addon" title="Area:">Area ID:</div>
                                    <input name="s.are" id="s.area" placeholder="Area" title="Area:" class="form-control" type="text" maxlength="25" disabled="disabled" />
                                 </div>
                              </div>
                              <br/>
                              <select class="form-control" required="required">
                                 <option value=""></option>
                                 <option value="Region">Region</option>
                                 <option value="District">District</option>
                                 <option value="Sub-district">Sub-district</option>
                                 <option value="City">City</option>
                                 <option value="ZIP">ZIP</option>
                              </select>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="input-group-addon" title="Account No:">Account No:</div>
                                    <input name="s.account" id="s.account" placeholder="Account No" title="Account No:" class="form-control" type="text" maxlength="25" />
                                 </div>
                              </div>
                              <br>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="input-group-addon" title="Bank Name:">Bank Name:</div>
                                    <input name="s.bank" id="s.bank" placeholder="Bank Name" title="Bank Name:" class="form-control" type="text" maxlength="25" />
                                 </div>
                              </div>
                              <br/>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="input-group-addon" title="E-mail:">E-mail:</div>
                                    <input name="s.email" id="s.email" placeholder="supplier@domain.com" title="supplier@domain.com:" class="form-control" type="email" maxlength="25" />
                                 </div>
                                 <br/>
								 <div class="form-group">
                                 <div class="input-group">
                                    <div class="input-group-addon" title="Product ID:">Product ID:</div>
                                    <input name="s.account" id="s.account" placeholder="Product ID" title="Product ID:" class="form-control" type="text" maxlength="25" />
                                 </div>
                              </div>
								  <div class="form-group">
                                 <div class="input-group">
                                    <div class="input-group-addon" title="Product Name:">Product Name:</div>
                                    <input name="s.account" id="s.account" placeholder="Product Name" title="Product Name:" class="form-control" type="text" maxlength="25" />
                                 </div>
                              </div>
								  Product Image:
 <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
            <button class="add_field_button"><i class="fas fa-plus"></i> Add More Product</button>
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
                           $(wrapper).append('<div class="form-group"><div class="input-group">
                                    <div class="input-group-addon" title="Product ID:">Product ID:</div>
                                    <input name="s.account" id="s.account" placeholder="Product ID" title="Product ID:" class="form-control" type="text" maxlength="25" /></div><br></div><div class="form-group"><div class="input-group">
                                    <div class="input-group-addon" title="Product Name:">Product Name:</div><input name="s.account" id="s.account" placeholder="Product Name" title="Product Name:" class="form-control" type="text" maxlength="25" /></div></div>'); //add input box
                       }
                   });
                   
                   $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                       e.preventDefault(); $(this).parent('div').remove(); x--;
                   })
               });
            </script>
            </fieldset>
                                 <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Save</button>
                              </div>
                           </div>
                        </div>
                     </form>
                     <br/>
                     <br/>
                  </div>
               </div>
            </div>
         </div>
		  
		  <!--
**********************************************************************************************************
********************************************************************************************************************************************************Supllier 1**************************************************
*******************************************************************************************************************************************************************************************************************-->
         <div class="panel-group" id="accordion">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse11">Supplier 1</a>
                  </h4>
               </div>
               <div id="collapse11" class="panel-collapse collapse in">
                  <div class="panel-body">
                     <form action="">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="100" id="products" onClick="product(this)"> Product 1, 100THB per pice,
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="200" onClick="product(this)"> Product 2, 200THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="300" onClick="product(this)"> Product 3, 300THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="400" onClick="product(this)"> Product 4, 400THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="500" onClick="product(this)"> Product 5, 500THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="600" onClick="product(this)"> Product 6, 600THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="700" onClick="product(this)"> Product 7, 700THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="800" onClick="product(this)"> Product 8, 800THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="900" onClick="product(this)"> Product 9, 900THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="1000" onClick="product(this)"> Product 10, 1,000 THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <br/>
                           <div class="col-md-8">
                               
                              <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Make Order</button>
                           </div>
                        </div>
                  </div>
               </div>
               </form>
               <br/>
               <br/>
            </div>
         </div>
		  
		   <!--
**********************************************************************************************************
********************************************************************************************************************************************************Supllier 2**************************************************
*******************************************************************************************************************************************************************************************************************-->
         <div class="panel-group" id="accordion">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Supplier 2</a>
                  </h4>
               </div>
               <div id="collapse2" class="panel-collapse collapse in">
                  <div class="panel-body">
                     <form action="">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="100" onClick="product(this)"> Product 1, 100THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="200" onClick="product(this)"> Product 2, 200THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="300" onClick="product(this)"> Product 3, 300THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="400" onClick="product(this)"> Product 4, 400THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="500" onClick="product(this)"> Product 5, 500THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="600" onClick="product(this)"> Product 6, 600THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="700" onClick="product(this)"> Product 7, 700THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="800" onClick="product(this)"> Product 8, 800THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="900" onClick="product(this)"> Product 9, 900THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="1000" onClick="product(this)"> Product 10, 1,000 THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <br/>
                           <div class="col-md-8">
                             
                              <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Make Order</button>
                           </div>
                        </div>
                  </div>
               </div>
               </form>
               <br/>
               <br/>
            </div>
         </div>
		  
		  
		    <!--
**********************************************************************************************************
********************************************************************************************************************************************************Supllier 3**************************************************
*******************************************************************************************************************************************************************************************************************-->
         <div class="panel-group" id="accordion">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Supplier 3</a>
                  </h4>
               </div>
               <div id="collapse3" class="panel-collapse collapse in">
                  <div class="panel-body">
                     <form action="">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="100" onClick="product(this)"> Product 1, 100THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="200" onClick="product(this)"> Product 2, 200THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="300" onClick="product(this)"> Product 3, 300THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="400" onClick="product(this)"> Product 4, 400THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="500" onClick="product(this)"> Product 5, 500THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="600" onClick="product(this)"> Product 6, 600THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="700" onClick="product(this)"> Product 7, 700THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="800" onClick="product(this)"> Product 8, 800THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="900" onClick="product(this)"> Product 9, 900THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="1000" onClick="product(this)"> Product 10, 1,000 THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <br/>
                           <div class="col-md-8">
                               
                              <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Make Order</button>
                           </div>
                        </div>
                  </div>
               </div>
               </form>
               <br/>
               <br/>
            </div>
         </div>
		  
		    <!--
**********************************************************************************************************
********************************************************************************************************************************************************Supllier 4**************************************************
*******************************************************************************************************************************************************************************************************************-->
         <div class="panel-group" id="accordion">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Supplier 4</a>
                  </h4>
               </div>
               <div id="collapse4" class="panel-collapse collapse in">
                  <div class="panel-body">
                     <form action="">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="100" onClick="product(this)"> Product 1, 100THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="200" onClick="product(this)"> Product 2, 200THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="300" onClick="product(this)"> Product 3, 300THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="400" onClick="product(this)"> Product 4, 400THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="500" onClick="product(this)"> Product 5, 500THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="600" onClick="product(this)"> Product 6, 600THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="700" onClick="product(this)"> Product 7, 700THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="800" onClick="product(this)"> Product 8, 800THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="900" onClick="product(this)"> Product 9, 900THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="1000" onClick="product(this)"> Product 10, 1,000 THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <br/>
                           <div class="col-md-8">
                               
                              <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Make Order</button>
                           </div>
                        </div>
                  </div>
               </div>
               </form>
               <br/>
               <br/>
            </div>
         </div>
		  
		    <!--
**********************************************************************************************************
********************************************************************************************************************************************************Supllier 5**************************************************
*******************************************************************************************************************************************************************************************************************-->
         <div class="panel-group" id="accordion">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Supplier 5</a>
                  </h4>
               </div>
               <div id="collapse5" class="panel-collapse collapse in">
                  <div class="panel-body">
                     <form action="">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="100" onClick="product(this)"> Product 1, 100THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="200" onClick="product(this)"> Product 2, 200THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="300" onClick="product(this)"> Product 3, 300THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="400" onClick="product(this)"> Product 4, 400THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="500" onClick="product(this)"> Product 5, 500THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="600" onClick="product(this)"> Product 6, 600THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="700" onClick="product(this)"> Product 7, 700THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="800" onClick="product(this)"> Product 8, 800THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="900" onClick="product(this)"> Product 9, 900THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="1000" onClick="product(this)"> Product 10, 1,000 THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <br/>
                           <div class="col-md-8">
                               
                              <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Make Order</button>
                           </div>
                        </div>
                  </div>
               </div>
               </form>
               <br/>
               <br/>
            </div>
         </div>
		    
		  <!--
**********************************************************************************************************
********************************************************************************************************************************************************Supllier 6**************************************************
*******************************************************************************************************************************************************************************************************************-->
         <div class="panel-group" id="accordion">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Supplier 6</a>
                  </h4>
               </div>
               <div id="collapse6" class="panel-collapse collapse in">
                  <div class="panel-body">
                     <form action="">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="100" onClick="product(this)"> Product 1, 100THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="200" onClick="product(this)"> Product 2, 200THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="300" onClick="product(this)"> Product 3, 300THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="400" onClick="product(this)"> Product 4, 400THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="500" onClick="product(this)"> Product 5, 500THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="600" onClick="product(this)"> Product 6, 600THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="700" onClick="product(this)"> Product 7, 700THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="800" onClick="product(this)"> Product 8, 800THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="900" onClick="product(this)"> Product 9, 900THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="1000" onClick="product(this)"> Product 10, 1,000 THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <br/>
                           <div class="col-md-8">
                               
                              <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Make Order</button>
                           </div>
                        </div>
                  </div>
               </div>
               </form>
               <br/>
               <br/>
            </div>
         </div>
		  
		    <!--
**********************************************************************************************************
********************************************************************************************************************************************************Supllier 7**************************************************
*******************************************************************************************************************************************************************************************************************-->
         <div class="panel-group" id="accordion">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">Supplier 7</a>
                  </h4>
               </div>
               <div id="collapse7" class="panel-collapse collapse in">
                  <div class="panel-body">
                     <form action="">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="100" onClick="product(this)"> Product 1, 100THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="200" onClick="product(this)"> Product 2, 200THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="300" onClick="product(this)"> Product 3, 300THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="400" onClick="product(this)"> Product 4, 400THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="500" onClick="product(this)"> Product 5, 500THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="600" onClick="product(this)"> Product 6, 600THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="700" onClick="product(this)"> Product 7, 700THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="800" onClick="product(this)"> Product 8, 800THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="900" onClick="product(this)"> Product 9, 900THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="1000" onClick="product(this)"> Product 10, 1,000 THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <br/>
                           <div class="col-md-8">
                               
                              <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Make Order</button>
                           </div>
                        </div>
                  </div>
               </div>
               </form>
               <br/>
               <br/>
            </div>
         </div>
		  
		    <!--
**********************************************************************************************************
********************************************************************************************************************************************************Supllier 8**************************************************
*******************************************************************************************************************************************************************************************************************-->
         <div class="panel-group" id="accordion">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">Supplier 8</a>
                  </h4>
               </div>
               <div id="collapse8" class="panel-collapse collapse in">
                  <div class="panel-body">
                     <form action="">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="100" onClick="product(this)"> Product 1, 100THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="200" onClick="product(this)"> Product 2, 200THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="300" onClick="product(this)"> Product 3, 300THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="400" onClick="product(this)"> Product 4, 400THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="500" onClick="product(this)"> Product 5, 500THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="600" onClick="product(this)"> Product 6, 600THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="700" onClick="product(this)"> Product 7, 700THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="800" onClick="product(this)"> Product 8, 800THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="900" onClick="product(this)"> Product 9, 900THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="1000" onClick="product(this)"> Product 10, 1,000 THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <br/>
                           <div class="col-md-8">
                               
                              <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Make Order</button>
                           </div>
                        </div>
                  </div>
               </div>
               </form>
               <br/>
               <br/>
            </div>
         </div>
		  
		    <!--
**********************************************************************************************************
********************************************************************************************************************************************************Supllier 9**************************************************
*******************************************************************************************************************************************************************************************************************-->
         <div class="panel-group" id="accordion">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">Supplier 9</a>
                  </h4>
               </div>
               <div id="collapse9" class="panel-collapse collapse in">
                  <div class="panel-body">
                     <form action="">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="100" onClick="product(this)"> Product 1, 100THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="200" onClick="product(this)"> Product 2, 200THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="300" onClick="product(this)"> Product 3, 300THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="400" onClick="product(this)"> Product 4, 400THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="500" onClick="product(this)"> Product 5, 500THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="600" onClick="product(this)"> Product 6, 600THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="700" onClick="product(this)"> Product 7, 700THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="800" onClick="product(this)"> Product 8, 800THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="900" onClick="product(this)"> Product 9, 900THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="1000" onClick="product(this)"> Product 10, 1,000 THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <br/>
                           <div class="col-md-8">
                               
                              <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Make Order</button>
                           </div>
                        </div>
                  </div>
               </div>
               </form>
               <br/>
               <br/>
            </div>
         </div>
		  
		    <!--
**********************************************************************************************************
********************************************************************************************************************************************************Supllier 10*************************************************
*******************************************************************************************************************************************************************************************************************-->
         <div class="panel-group" id="accordion">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">Supplier 10</a>
                  </h4>
               </div>
               <div id="collapse10" class="panel-collapse collapse in">
                  <div class="panel-body">
                     <form action="">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="100" onClick="product(this)"> Product 1, 100THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="200" onClick="product(this)"> Product 2, 200THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="300" onClick="product(this)"> Product 3, 300THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="400" onClick="product(this)"> Product 4, 400THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="500" onClick="product(this)"> Product 5, 500THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="600" onClick="product(this)"> Product 6, 600THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="700" onClick="product(this)"> Product 7, 700THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="800" onClick="product(this)"> Product 8, 800THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="900" onClick="product(this)"> Product 9, 900THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group">
                                 <div class="input-group">
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox" value="1000" onClick="product(this)"> Product 10, 1,000 THB per pice
                                       </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <br/>
                           <div class="col-md-8">
                               
                              <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Make Order</button>
                           </div>
                        </div>
                  </div>
               </div>
               </form>
               <br/>
               <br/>
            </div>
         </div>
      </div>
      <script>
         function toggle(source) {
             checkboxes = document.getElementsByName('All');
             for (var i = 0, n = checkboxes.length; i < n; i++) {
                 checkboxes[i].checked = source.checked;
             }
         }
      </script>
      <?php
         include_once("footer.php")
         ?>
   </body>
</html>