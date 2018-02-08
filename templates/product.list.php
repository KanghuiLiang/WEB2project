<div class="col-md-4 game">
    <div class="game-price">$<?php echo $product['price'];?></div>
    <a href="product.php?id=<?php echo $key; ?>">
      <img src="<?php echo  $product['imgPath'];?>" /> 
      <div class="game-title"><?php echo $product['title'];?></div>
      <div class="game-add">
          <button class="btn btn-primay" >Details</button>
      </div>
      
    </a>
</div>