<!DOCTYPE html> 
<html lang = "en">
 
    <head> 
      <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Data Page</title>
<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">
</head>
   </head> 
	<body style="background-image: url(http://localhost/exercise6/codeigniter/Pics/bg.jpg);">
<center>

<form method="post" action="<?php echo base_url();?>index.php/Users_controller/update">
<?php
extract($users);
?>
<div id="header">
 <div id="content">
    <label>Edit Data Now</label>
    </div>
</div>
<div id="body">
 <div id="content">
<table align="center">
    <tr>
    <td><input type="text" name="complete_name" placeholder="Complete Name" value="<?php echo $complete_name; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nick" placeholder="Nickname" value="<?php echo $nick; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="eadd" placeholder="Email Address" value="<?php echo $eadd; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="address" placeholder="Home Address" value="<?php echo $address; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="sex" placeholder="Gender" value="<?php echo $sex; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="number" name="no" placeholder="Cellphone Number" value="<?php echo $no; ?>" required /></td>
    </tr>
	<tr>
	<td>
	<input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
    <button type="submit" name="submit" value="Update" /><strong>UPDATE</strong></button>
	<a href="<?php echo base_url();?>index.php/Users_controller/"><strong>Cancel</strong></a></button>
    </td>
    </tr>
    </table>
</div>
</div>
</form>

</body>
	
</html>