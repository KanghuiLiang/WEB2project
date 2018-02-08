<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Warehouse</title>
  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="https://use.fontawesome.com/1e8aa29a4f.js"></script>

</head>
<body>
 <?php 
 include_once('header.php');
 
 ?>
  <div class="container">
  <h2>Edit Warehouse</h2>

  <div class="table-responsive">          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>
 <input type="checkbox" onclick="toggle(this)" /> Select All </th>
        <th>Warehouse ID</th>
        <th>Address</th>
        <th>Manager</th>
        <th>Edit</th>
        <th>Disable</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="checkbox" name="selectAll" value="bar1" id="a1"></td>
        <td>1234</td>
        <td>bangkok</td>
        <td>Hana</td>
        <td>
        <a href="action_editwarehouse.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
       </td>
        <td><i class="fa fa-ban" aria-hidden="true" onclick="deleteRow(this)"></i></td>
       </tr>
      <tr>
        <td><input type="checkbox" name="selectAll" value="bar1" id="a1"></td>
        <td>5656</td>
        <td>Kan</td>
        <td>Amed</td>
        <td>
       <a href="action_editwarehouse.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></a></i>
       </td>
        <td><i class="fa fa-ban" aria-hidden="true" onclick="deleteRow(this)"></i></td>
       </tr>


    </tbody>
  </table>
  

  </div>


</div>
<script> 
function toggle(source) {
  checkboxes = document.getElementsByName('selectAll');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
  function deleteRow(btn) {
  var row = btn.parentNode.parentNode;
  row.parentNode.removeChild(row);
}
</script>

</body>
<?php include('footer.php'); 
?>
</html>