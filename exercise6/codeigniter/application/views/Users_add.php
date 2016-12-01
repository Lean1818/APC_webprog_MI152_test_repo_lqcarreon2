<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Data Page</title>
<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">
</head>
   </head> 
	<body style="background-image: url(http://localhost/exercise6/codeigniter/Pics/bg.jpg);">
<center>
<form method="post" action="<?php echo base_url();?>index.php/Users_controller/insert_users_db">
<div id="header">
 <div id="content">
    <label>Add Data Now</label>
    </div>
</div>
<div id="body">
 <div id="content">
<table align="center">
    <tr>
		<td align="center"><a href="<?php echo base_url();?>index.php/Users_controller/">back to main page</a></td>
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
    <td><input type="text" name="address" placeholder="Address" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="sex" placeholder="Gender" required /></td>
    </tr>
	<tr>
    <td><input type="number" name="no" placeholder="Cellphone Number" required /></td>
	</tr>
	<tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>

</form>
    </div>
</div>
   </body>
</html>