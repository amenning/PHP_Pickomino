<?php
require 'core.inc.php';
require 'connect.inc.php';
require 'password.php';
require 'dice.php';
require 'grill.php';

$dice = new Dice;
$grill = new Grill;
echo '<br>';

if(loggedin()){
	$firstname = getuserfield('firstname');
	$lastname = getuserfield('lastname');
	
?>

<link rel="stylesheet" type="text/css" href="css/pickomino_php.css">

<div style="text-align: center; margin: auto; padding: 10px;">
 Welcome <?php echo $firstname.' '.$lastname; ?>, <a href="logout.php">Log out</a>
</div>

<div>
 <div class = 'container inset'>
	<div class = 'worms inset'>
		<?php $grill::displayGrillWorms(); ?>
	</div>
	<br/>
   <div class = 'activedice inset'>
		<?php $dice::displayActiveDice(); ?>
   </div>
   <br/>
   <div class = 'frozendice inset'>
		<?php $dice::displayFrozenDice(); ?>
   </div>
   <br/>
   <div class = 'playeroptions outset'>
     <button class = 'buttons inset' id="rollDice">
       Roll
     </button>
   </div>
   <br/>
   <div class = 'foot inset'>
     <span class = 'logger'>Player's Worms</span>
   </div>
 </div>
</div>

<script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
<script type="text/javascript" src="js/test.js"></script>

<?php
}else{
	header('Location: index.php');
}
?>