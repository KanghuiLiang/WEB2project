
      <?php
	  	 
         echo ('<title>Employee List</title>');
         include_once('../header.php')
         ?>
         
         
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <input name="search" type="text" size="255" maxlength="22">
      <input name="search" type="button" value="search">
      
      
      
      
      
      
      </form>
      <?php
	  if($_SERVER["REQUEST_METHOD"] == "POST"){
		required ("../db/iloveyou.php");  
		$name = $_POST['search'];
		$fullname='';
		$q = mysqli_query($conn, "SELECT * FROM  `employeeinfo` WHERE  `name` LIKE '$name.'%''");
   			$res=mysqli_num_rows($q);
   
   	if($res > 0){//If the number of rows is equal to 1, let them login
   		while($res = mysqli_fetch_assoc($q)){//Here we retrieve values from database and initiate SESSION Variables  
   		$fullname = $res["name"];
   		}
	}
	echo $fullname;
		  
	  }
	  
	  ?>
      <?php
         include_once('../footer.php')
         
         
         ?>
  