<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once 'config.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $complete_name = $_POST['complete_name'];
 $nick = $_POST['nick'];
 $eadd = $_POST['eadd'];
 $address = $_POST['address'];
 $sex = $_POST['sex'];
 $no = $_POST['no'];
 $comment = $_POST['comment'];
 // variables for input data
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users(complete_name,nick,eadd,address,sex,no,comment) 
		VALUES('$complete_name','$nick','$eadd','$address','$sex','$no','$comment')";
 mysql_query($sql_query);
        
        // sql query for inserting data into database
 
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Data Page</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body style="background-image: url(bg.jpg);">
<center>

<div id="header">
 <div id="content">
    <label>Add Data Now</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php"><u>Back to Main page</u></a></td>
	 <align="center"><a href="Mydata.php"><u>Check Database</u></a>
    </tr>
    <tr>
    <td><input type="text" name="complete_name" placeholder="Complete Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nick" placeholder="Nickname" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="eadd" placeholder="Email Address" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="address" placeholder="Home Address" required /></td>
    </tr>
	<tr>
    <td>
	<input type="radio" name="sex" <?php if (isset($sex) && $sex=="female") echo "checked";?> value="Female">Female
	<input type="radio" name="sex" <?php if (isset($sex) && $sex=="male") echo "checked";?> value="Male">Male
	</td>
    </tr>
	<tr>
    <td><input type="number" name="no" placeholder="Cellphone Number" required /></td>
    </tr>
	 <td>Comment: <br>
	 <textarea name="comment" rows="10" cols="100"></textarea>
	 </td>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>