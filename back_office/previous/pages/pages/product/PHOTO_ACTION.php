<?php

include("../db/iloveyou.php");
 
$eid = $_POST['pid'];
$no = $_POST['imgno'];
echo($eid);
//$eid = $_SESSION['eid'];
$imagename;
function GetImageExtension($imagetype) {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }
if (!empty($_FILES["uploadedimage"]["name"])) {
    $file_name=$_FILES["uploadedimage"]["name"];
    $temp_name=$_FILES["uploadedimage"]["tmp_name"];
    $imgtype=$_FILES["uploadedimage"]["type"];
    $ext= GetImageExtension($imgtype);
    $imagename=$eid.$no.$ext;
    $target_path = "images/".$imagename;
	
$qi = mysqli_query($conn,"INSERT INTO `maxomus_ais`.`product_img` (`img_id`, `product_ID`, `productImage`) VALUES (NULL, '$eid', '$target_path')");
    
   		$insert =mysqli_num_rows($qi);
if(move_uploaded_file($temp_name, $target_path)) {
    $query_upload="INSERT into 'images_tbl' ('images_path','submission_date') VALUES
('".$target_path."','".date("Y-m-d")."')";
    mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error()); 
}else{
   exit("Error While uploading image on the server");
}
	
   
}
header ("location: supervisor.php");
?>
