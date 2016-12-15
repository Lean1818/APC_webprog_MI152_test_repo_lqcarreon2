<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title> Lean Carreon </title>

<style>
ul
	{
    list-style-type:none;
	}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 50%;
}
td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
	color: white;
}
tr:nth-child(even) {
	color: white;
    background-color: #000000;
}

#myform {
	color: white;
}

.error {
	color : red;
}

a{
	color: white;
	text-decoration: none;
}

a:hover {
	color: red;
}
</style>
<script type="text/javascript">
function show_confirm(act,gotoid)
{
if(act=="Users_edit")
var r=confirm("Do you really want to edit?");
else
var r=confirm("Do you really want to delete?");
if (r==true)
{
window.location="<?php echo base_url();?>index.php/Users_controller/"+act+"/"+gotoid;
}
}
</script>
</head>
<body style="background-image: url(http://localhost/exercise6/codeigniter/Pics/bg.jpg);">
<body>

<A NAME="Home">
<center>
<div> <img src="<?php echo base_url();?>Pics\Finlstep.gif" width="1000px" height="180px"> </div>
<center>
<br>
<center>
<h1><a href="<?php echo base_url();?>index.php/Users_controller/add_form"><u>Create Database</u></a></h1>
<div id="body">
	<div id="content">
		<table align="center">
			<tr>
				<th>User Id</th>
				<th>Complete Name</th>
				<th>Nickname</th>
				<th>Email Address</th>
				<th>Home Address</th>
				<th>Gender</th>
				<th>Cellphone Number</th>
				<th colspan="2">Operations</th>
			</tr>
			
		<?php foreach ($user_list as $u_key){ ?>

			<tr>
				<td><?php echo $u_key->user_id; ?></td>
				
				<td><?php echo $u_key->complete_name; ?></td>

				<td><?php echo $u_key->nick; ?></td>

				<td><?php echo $u_key->eadd; ?></td>

				<td><?php echo $u_key->address; ?></td>
				
				<td><?php echo $u_key->sex; ?></td>
				
				<td><?php echo $u_key->no; ?></td>

				<td width="40" align="left" ><a href="#" onClick="show_confirm('Users_edit',<?php echo $u_key->user_id;?>)">EDIT</a></td>

				<td width="40" align="left" ><a href="#" onClick="show_confirm('delete',<?php echo $u_key->user_id;?>)">DELETE</a></td>

			</tr>

<?php }?>
			
			
		</table>
	</div>
</div>
<h1><font color="White">Lean Nasser Q. Carreon </h1>
</center>
<center>
<nav class="nav">
<ul id="navmenu">
<table width="500">
  <tr>
    <th> <button type="button" onclick="document.getElementById('Favorite Websites').style.display='table-cell'">Favorite Websites</button></th>
    <th><button type="button" onclick="document.getElementById('Hobbies').style.display='table-cell'">Hobbies</button></th>
    <th><button type="button" onclick="document.getElementById('Interests').style.display='table-cell'">Interest</button></th>
  </tr>
  <tr>
    <td id="Favorite Websites" style="display:none"><a href="#Favorite Website"><font color="White"><u>Facebook, Twitter, Moodle</u></td>
    <td id="Hobbies" style="display:none"><a href="#Hobby"><font color="White"><u>Basketball, Working out, Dota 2</u></td>
    <td id="Interests" style="display:none"><a href="#Interest"><font color="White"><u>Cars, Shoes, Laptops</u></td>
  </tr>
</table>
  <a href="#Home"><font color="White"><u>Home</u></a>
  <a href="#About Me"><font color="White"><u>About Me</u></a>
  <p><b>Tip:</b> Underlined words are Clickable</p>
 

</ul>
</nav>
</center>
	Trivia about my Interest/Hobbies or Myself
 <p id="Trivia">Click for a Trivia.</p>
<button type="button" onclick="document.getElementById('Trivia').innerHTML = 'I  always play Basketball!'">Click For A Trivia!</button>
<button type="button" onclick="document.getElementById('Trivia').innerHTML = 'I  always play Dota 2'">Click For A Trivia!</button>
<button type="button" onclick="document.getElementById('Trivia').innerHTML = 'Im  always active in Facebook!'">Click For A Trivia!</button>
<button type="button" onclick="document.getElementById('Trivia').innerHTML = 'I  like shoes!'">Click For A Trivia!</button>
<button type="button" onclick="document.getElementById('Trivia').innerHTML = 'I  like cars!'">Click For A Trivia!</button>



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<A NAME ="Favorite Website" align="left">
<div> <font size="36"><h1><big>FAVORITE WEBSITES</big></h1></font></div>
<ul><li><a href="#Home"><font color="White" align="left" ><u>Home</u></a></li></ul>
<p align="left">
<a href="https://twitter.com/LeanSanity123"><img src="<?php echo base_url();?>Pics\Twitter.png"width=310px" height=310">
</a>
<a href="https://www.facebook.com/Wewertt"> <img src="<?php echo base_url();?>Pics\Facebook.jpg"width=310px" height=310"> 
</a>
<a href="http://moodle2.apc.edu.ph/user/profile.php?id=8229"> <img src="<?php echo base_url();?>Pics\Moodle.png">
</a>
</p>
Tip: Click the Picture if you want to be directed to the Website.
<br>
<A NAME="Hobby"align="left">
<div> <font size="36"><h1><big>HOBBIES</big></h1></font> </div>
<ul><li><a href="#Home"><font color="White"><u>Home</u></a></li></ul>
<img src="<?php echo base_url();?>Pics\Basketball.JPG"width=310px" height=410">
<img src="<?php echo base_url();?>Pics\Dota.jpg"width=510px" height=410">
<img src="<?php echo base_url();?>Pics\workout.jpg"width=330px" height=410">
<br>
<A NAME="Interest"align="left">
<div> <font size="36"><h1><big>INTEREST</big></h1></font> </div>
<ul><li><a href="#Home"><font color="White"><u>Home</u></a></li></ul>
<img src="<?php echo base_url();?>Pics\car.JPG"width=410px" height=410">
<img src="<?php echo base_url();?>Pics\shoes.jpg"width=410px" height=410">
<img src="<?php echo base_url();?>Pics\laptop.jpg"width=410px" height=410">
<br>
<A NAME="About Me"align="left">
<div> <font size="36"><h1><big>About Me</big></h1></font> </div>
<ul><li><a href="#Home"><font color="White"><u>Home</u></a></li></ul>
<p align="left>
<br>
<font size="36"><br></font>
<font size="36">Full name: Lean Nasser Quiles Carreon<br></font>
<font size="36">Nickname: Lee<br></font>
<font size="36">Address: Taguig City<br></font>
<font size="36">School: Asia Pacific College<br></font>
<font size="36">Course: BSIT-MI<br></font>
</p>
<br>

<div id="phpform">
<?php	
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $nickErr = "";
$name = $email = $gender = $comment = $nick = $home = $num = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["home"])) {
    $home = "";
  } else {
    $home = test_input($_POST["home"]);
  }
  
  if (empty($_POST["num"])){
	  $num = "";
  } else {
	  $num = test_input($_POST["num"]);
  }
  
  if (empty($_POST["nick"])) {
	  $nickErr = "Nickname is required";
  } else {
	  $nick = test_input($_POST["nick"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nickErr = "Only letters and white space allowed"; 
    }
  }
  
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
  

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div id="myform">
<h2>Fill Up the form</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Complete Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Nickname: <input type="text" name="nick" value="<?php echo $nick;?>">
  <span class="error">* <?php echo $nickErr;?></span>
  <br><br>
  Email Address: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error"><?php echo $emailErr;?></span>
  <br><br>
  Home Address: <input type="text" name="home" value="<?php echo $home;?>">
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Cellphone Number: <input type="number" name="num" value="<?php echo $num;?>">
  <br><br>
  Comment: <br><textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  

</form>
<?php
echo "<h2>Results:</h2>";
echo $name;
echo "<br>";
echo $nick;
echo "<br>";
echo $email;
echo "<br>";
echo $home;
echo "<br>";
echo $gender;
echo "<br>";
echo $num;
echo "<br>";
echo $comment;
echo "<br>";

?>
</div>


</body>

</html>	