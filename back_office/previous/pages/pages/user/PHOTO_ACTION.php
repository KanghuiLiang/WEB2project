<?php
/*include("../db/iloveyou.php");
 session_start();
  // $_SESSION['eid']
$eid = $_SESSION['eid'];
echo $eid;
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

//$imagename=$_FILES["myimage"]["name"]; 

//$image =(file_get_contents($_FILES['myimage'])); 

///////////////////////////////////Get the content of the image and then add slashes to it 

//$imagetmp=addslashes (file_get_contents($_FILES['myimage'][$eid]));

$image = addslashes($_FILES['myimage']['temp_name']);
$image1 = file_get_contents($image);
$image2 = base64_encode($image1);


//Insert the image name and image content in image_table
$sql="INSERT INTO `maxomus_ais`.`e_image` (`eid`, `image`) VALUES ('$eid', '$image');";
 $result = mysql_query($sql);
if(!$result){
echo 'error';	
}
}
*/
?>


<?php
 session_start();
  // $_SESSION['eid']
$eid = $_SESSION['eid'];
$target_dir = "../../user_image";
$target_file = $target_dir . basename($_FILES["fileToUpload"][$eid]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
/*/ Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
*/// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>