
<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'My Yii Application';
?>
<!DOCTYPE html> 
<html lang = "en">

<style>

ul
	{
    list-style-type:none;
	}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 50%;	
    color: black;
}
td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
tr:nth-child(even) {
    background-color: black;
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

.Trivia {
color: black;
}
</style>
 
 

	<title>My Home Page</title>
 
<A NAME="Home">
<body>
<center>
<center>
<br>
<center>
<h1><a href = "index.php?r=users%2Findex"><u>Create Database</u></a></h1>
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
    <td id="Favorite Websites" style="display:none"><a href="#Favorite Website"><font color="White">Facebook, Twitter, Moodle</td>
    <td id="Hobbies" style="display:none"><a href="#Hobby"><font color="White">Basketball, Working out, Dota 2</td>
    <td id="Interests" style="display:none"><a href="#Interest"><font color="White">Cars, Shoes, Laptops</td>
  </tr>
</table>
  <a href="#Home"><font color="White"><u>Home</u></a>
  <a href="#About Me"><font color="White"><u>About Me</u></a>
  <p><b>Tip:</b> Underlined words are Clickable</p>
 

</ul>
</nav>
</center>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function()
{
    $("#show").click(function(){
        $("answers").toggle(500);
    });
});
</script>

<h1>Trivias</h1>
<p></p>
        <?php
			if (Yii::$app->user->isGuest) {
				
			} elseif(Yii::$app->user->identity->username) {
				echo Html::a('Edit a Trivia', ['trivia/index'], ['class' => 'btn btn-success']);
			}
			?>

<br></br>
<ul>
<?php foreach ($trivias as $trivia): ?>

    <li>
        <strong><?= Html::encode("{$trivia->question}") ?>:</strong>
		<br></br>	
		<answers style=display:none><?= $trivia->answer ?></answers>
		<br></br>	
    </li>	
<?php endforeach; ?>
<button class="btn btn-lg btn-success" id="show">Show all answer</button>
<p></p>
</ul>

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
<p align="left">
<ul><li><a href="#Home"><font color="White" align="left" >Home</a></li></ul>

<a href="https://twitter.com/LeanSanity123"><img src="uploads\Twitter.png"width=310px" height=310">
</a>
<a href="https://www.facebook.com/Wewertt"> <img src="uploads\facebook.jpg"width=310px" height=310"> 
</a>
<a href="http://moodle2.apc.edu.ph/user/profile.php?id=8229"> <img src="uploads/Moodle.png"width=310px" height=310">
</a>
</p>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>
<A NAME="Hobby"align="left">
<div> <font size="36"><h1><big>HOBBIES</big></h1></font> </div>
<ul><li><a href="#Home"><font color="White">Home</a></li></ul>
<img src="uploads/Basketball.JPG"width=310px" height=410">
<img src="uploads/Dota.jpg"width=510px" height=410">
<img src="uploads/workout.jpg"width=330px" height=410">
<br>
<A NAME="Interest"align="left">
<div> <font size="36"><h1><big>INTEREST</big></h1></font> </div>
<ul><li><a href="#Home"><font color="White">Home</a></li></ul>
<img src="uploads/car.JPG"width=410px" height=410">
<img src="uploads/shoes.jpg"width=410px" height=410">
<img src="uploads/laptop.jpg"width=410px" height=410">
<br>
<A NAME="About Me"align="left">
<div> <font size="36"><h1><big>About Me</big></h1></font> </div>
<ul><li><a href="#Home"><font color="White">Home</a></li></ul>
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

</body>
	
</html>
