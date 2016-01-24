<?php
require 'core.inc.php';
require 'connect.inc.php';
require 'password.php';

if(loggedin()){
	$firstname = getuserfield('firstname');
	$lastname = getuserfield('lastname');
?>

<div style="text-align: center; margin: auto; padding: 10px;">
 Welcome <?php echo $firstname.' '.$lastname; ?>, <a href="logout.php">Log out</a>
</div>

<div>
 <div class = 'container inset'>
	<div class = 'worms inset'>
	
		 <div class = 'worm inset'>
		   
		 </div>
		 <div class = 'worm inset'>
		   
		 </div>
		 <div class = 'worm inset'>
		   
		 </div>
		 <div class = 'worm inset'>
		   
		 </div>
	</div>
	<br/>
   <div class = 'worms inset'>
		<div class = 'worm inset'>
		   
		</div>
		<div class = 'worm inset'>
		   
		</div>
		<div class = 'worm inset'>
		   
		</div>
		<div class = 'worm inset'>
		   
		</div>
   </div>
   <br/>
   <div class = 'worms inset'>
		
     <div class = 'worm inset'>
       
     </div>
     <div class = 'worm inset'>
       
     </div>
     <div class = 'worm inset'>
       
     </div>
	 <div class = 'worm inset'>
       
     </div>
   </div>
   <br/>
   <div class = 'outset'>
     <button class = 'go inset'>
       Roll
     </button>
   </div>
   <br/>
   <div class = 'foot inset'>
     <span class = 'logger'>Player's Worms</span>
   </div>
 </div>
</div>

<style>
 .slot > img {
  margin: 0!important;
  height: 71px;
  width: 50px;
 }
 .container {
	background: url('BackgroundImage.png') no-repeat center center fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
   height: 800px;
   width: 800px;
   margin: 10px auto;
   padding: 20px;
   border-radius: 4px;
 }
 .header {
   border: 2px solid #fff;
   border-radius: 4px;
   height: 55px;
   margin: 14px auto;
   background-color: #457f86
 }
 .header h2 {
   height: 30px;
   margin: auto;
 }
 .header h2 {
   font-size: 14px;
   margin: 0 0;
   padding: 0;
   color: #fff;
   text-align: center;
 }
 .worms{
   display: flex;
   background-color: #457f86;
   border-radius: 6px;
   border: 2px solid #fff;
 }
 .worm{
   flex: 1 0 auto;
   background: white;
   height: 75px;
   width: 50px;
   margin: 8px;
   border: 2px solid #215f1e;
   border-radius: 4px;
   text-align: center;
 }
 .go {
   width: 100%;
   color: #fff;
   background-color: #457f86;
   border: 2px solid #fff;
   border-radius: 2px;
   box-sizing: none;
   outline: none!important;
 }
 .foot {
   height: 150px;
   background-color: 457f86;
   border: 2px solid #fff;
 }
 
 .logger {
   color: white;
   margin: 10px;
 }
 
 .outset {
   -webkit-box-shadow: 0px 0px 15px -2px rgba(0,0,0,0.75);
   -moz-box-shadow: 0px 0px 15px -2px rgba(0,0,0,0.75);
     box-shadow: 0px 0px 15px -2px rgba(0,0,0,0.75);
 }
 
 .inset {
   -webkit-box-shadow: inset 0px 0px 15px -2px rgba(0,0,0,0.75);
   -moz-box-shadow: inset 0px 0px 15px -2px rgba(0,0,0,0.75);
   box-shadow: inset 0px 0px 15px -2px rgba(0,0,0,0.75);
 }
</style>

<?php
}else{
	header('Location: index.php');
}
?>