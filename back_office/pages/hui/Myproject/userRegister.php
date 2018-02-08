<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Register</title>
</head>

<body>
<form action="" method="get">
<fieldset><legend>Please Register Here</legend>
<br />
<fieldset><legend>Personal Information</legend>
Employee ID:
<input name="eID" type="text" maxlength="25" /><br />
Full Name:
<input name="name" type="text" maxlength="25" /><br />
E-maill:
<input name="email" type="text" maxlength="25" /><br />
Photo:
 <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
    </fieldset>
<br />
<br /><fieldset><legend>Login Information</legend>
Username:
<input name="username" type="text" maxlength="25" /><br />
Password:
<input name="pwd" type="password" maxlength="25"  /><br />
Confirm Password:
<input name="cpwd" type="password" maxlength="25" /><br />
</fieldset><br />

<fieldset><legend>Address</legend>
Address:
<input name="address" type="text" maxlength="50" /><br />
Locality:
<input name="locality" type="text" maxlength="25" /><br />
Region: 
<select name="Region" size="1"></select><br />
District: 
<select name="dis" size="1"></select><br />
Sub-District: 
<select name="sub_dis" size="1"></select><br />
City: 
<select name="city" size="1"></select><br />
Zip: 
<select name="zip" size="1"></select><br />
</fieldset>
<br />
<fieldset><legend>Phone No</legend>
Contact No:
<input name="contact" type="text" size="25" />

</fieldset>
<input name="" type="submit" value="Register" />
<input name="" type="reset" value="Reset" />
</fieldset>
</form>







</body>
</html>