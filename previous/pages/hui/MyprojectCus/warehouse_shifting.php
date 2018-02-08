<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Warehouse</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/1e8aa29a4f.js"></script>
</head>
<?php 
 include_once('header.php');
 
 ?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>

            <h1>Add Transfer Order</h1>

        </div>
        <br>
        <br>
        <!-- <form action="/action_addwarehouse.php"> -->
        <div class="col-md-2"></div>
        <div class="col-md-9">
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="basic-addon1">Transfer order no: </span>
                <input type="text" class="form-control" placeholder="Enter order number" aria-describedby="basic-addon1" name="">
            </div>
            <br>
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="basic-addon2">Date: </span>
                <input type="date" class="form-control" placeholder="Enter Date" aria-describedby="basic-addon2" name="date">
            </div>
            <br>
            
            <br>
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="basic-addon5">Exit warehouse</span>
                <select class="form-control" placeholder="Exit warehouse">
                </select>
            </div>
            <br>
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="basic-addon5">Entry warehouse</span>
                <select class="form-control" placeholder="Entry warehouse">
                </select>
            </div>
            <br> 
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="basic-addon3">Comment: </span>
                <input type="text" class="form-control" placeholder="Write your comment" aria-describedby="basic-addon3" name="">
            </div>
             <br>
             <br>
        </div>    

        <div class="col-md-5"></div>
        <div class="col-md-2">
            <a href="../../pages/warehouse/ware_house.php">
   <i class="fa fa-times-circle fa-3x" aria-hidden="true"></i> <br>
   Cancel
   </a>
        </div>
        <!-- once click, go back to warehouse page -->

        <div class="col-md-2">
            <a href="action_addwarehouse.php"> 
                <!-- where supposed to be saved -->
   <i class="fa fa-check-square fa-3x" aria-hidden="true"></i><br>
   Save
   </a>
        </div>
        </form>
    </div>
    </div>
    </div>

</body>
<?php include('footer.php'); 
?>
</html>