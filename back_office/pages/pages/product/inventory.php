<style>


#text{
   position: absolute;
   top: 50%;
   left: 50%;
   font-size: 18px;
   color: white;
   transform: translate(-50%,-50%);
   -ms-transform: translate(-50%,-50%);
}

div.fixed {
   background-color: white;
   position: fixed;
   width: 30%;
   right: 0px;
   bottom: 10px;
   border: 3px solid #8AC007;
}
</style>
	
<?php
$thisPage="Sales";
 include_once("../header3.php");
	 echo ("<title>Invoice</title>");
?>
 
<!-- Row 1 starts-->
      <div class="row">
      	 <!--first colum to adjust the page size-->
         <div class="col-md-2"></div>
         <!--LOGO-->
         <div class="img-responsive">
            <img src="../../images/iStock_000062233330_Full.jpg" class="img-rounded" width="150px">
         </div>
         <!--end of row 1-->
      </div>
      <div class="container">
      <!--ROW 2 Staarts-->
      <div class="row">
         <div class="col-md-1"></div>
         <div class="col-md-7">
            <br><br><br>
            <h2>
               Invoice<br>
               
            </h2>
            
         </div>
         
         <br>
         <!--END OF ROW 2-->
      </div>
		  
		  <!--ROW 3 Staarts-->
      <div class="row">
         <div class="col-md-1"></div>
         <div class="col-md-7">
            <br><br><br>
			 <center>
            <form action="../accounts/invoice.php" method="post">
				<label>Please Select From:</label>
			 <input type="date" name="from">
			 <label>Please Select To:</label>
			 <input type="date" name="to">
				<button class="btn btn-info" type="submit">Next</button>
			 
			 
			 </form>
				 </center>
            
         </div>
         
         <br>
         <!--END OF ROW 3-->
      </div>
      


</div>
      <!--END OF CONTANER-->

</div>

	

<?php
 include_once("../footer.php");

?>