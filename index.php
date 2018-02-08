
<?php
session_start();
  include('templates/header.php');
?>

  <div class ="container-fluid">
    <div class ="row">
      <?php include("templates/left_menu.php"); ?>
   <div class="col-md-9">
     <div class="panel panel-default">
      <div class="panel-heading panel-heading-red">
        <h3 class="panel-title">Latest Release</h3>
      </div>
      <div class ="panel-body">
          <div class ="row">
            <?php

            include('constants/productList.constant.php');
            forEach($productList as $key=>$product){

              include('templates/product.list.php');
            }

            ?>

        </div>  
    </div>
  </div>
  </div>
</div>


<h4 style="background:#755954;color:#fff; height:70px; text-align:center;
padding-top:20px;"><a href="https://maxomus.creativeitpro.com/back_office/"><strong>Employee Only</strong></a></h4>

<hr>
<footer >
 

           
            
            <p style="background:#333;color:#fff; height:70px; text-align:center;
padding-top:20px;"> The Gaming Shop   &Copy Rights Reserved 2019</p>

          </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>