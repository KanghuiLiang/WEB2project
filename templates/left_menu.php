  <?php

    function calculateTotal(){
      $total = 0;
        if(isset($_SESSION['cart'])){
          foreach ($_SESSION['cart'] as $key => $value) {
            # code...
            $total = $total + $value['item']['price'];
          }
      }

      return $total;
    }

    function getCartTotal(){
       if(isset($_SESSION['cart'])){
          return sizeof($_SESSION['cart']);
       }

       return 0;
    }


  ?>      

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
                      <td class ="right"><strong>Total</strong> <?php echo getCartTotal();?></td>
                       <td class="right" style="text-align:right">$ <?php echo calculateTotal();?></td>
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
            <li class="list-group-item"><a href="product.php">Xbox 360</a></li>
            <li class="list-group-item"><a href="product.php">PS 4 Games</a></li>
            <li class="list-group-item"><a href="product.php">Nintendo Games</a></li>
            <li class="list-group-item"><a href="product.php">PS 3 Games</a></li>
            <li class="list-group-item"><a href="product.php">PS 2 Games</a></li>
            <li class="list-group-item"><a href="product.php">Gaming Consoles</a></li>
           
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
          <li class="list-group-item">Nintendo we uGames</li>
          
        </ul>
      </div>
  </div>