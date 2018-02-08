<?php
session_start();
require_once('constants/productList.constant.php');
$productId = $_GET['id'];
$product = $productList[$productId];

function alreadyAdded($productId){
  if(!isset($_SESSION['cart'])){
  return false;
  }

  foreach($_SESSION['cart'] as $cart){
    if($cart['id'] == $productId){
      return true;
    }
  }

  return false;
}

if(isset($_GET['addToCart']) && !alreadyAdded($productId)){
  if(!isset($_SESSION['cart'])){
      $_SESSION['cart'] = array();
  }
  $_SESSION['cart'][] = array(
    "id"=>$productId,
    "item"=>$product
  );
}

unset($_SESSION['cart']);
?>

  
<?php
  include('templates/header.php');
?>
  <div class ="container-fluid">
    <div class ="row">
        <?php include("templates/left_menu.php"); ?>
   <div class="col-md-9">
 <div class="panel panel-default">
  <div class="panel-heading panel-heading-red">
    <h3 class="panel-title">The Gaming Arena</h3>
  </div>

             <div class="row products">
                <div class="col-md-4">
                  <img src="<?php echo $product['imgPath'];?>" />
                </div>
             </div class="col-md-9">
                <h3><?php echo $product['title'];?></h3>
                       <div class="details-price">
                         Price: $<?php echo $product['price'];?>
                        </div>
                         <div class="details-description">
                            <p><?php echo $product['description'];?></p>
                                   <p>Riley will make a welcome return. Everybody's favourite canine companion (excluding Dogmeat) will make a welcome return in the second Ghosts game.</p>
                          </div>
                        <div class="details-buy">
                             <a href="?id=<?php echo $_GET['id'];?>&addToCart=true" class="btn btn-primary">Add to cart</a>
                        </div>

        </div>
     </div>

  </div>
</div>
           

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>