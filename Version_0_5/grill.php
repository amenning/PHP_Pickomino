<?php
class Grill {
	private static $grillworms= array();
	private static $endofgame = false;
	const HighestWorm = 36;
	const LowestWorm = 21;
	const oneWormTile = "img/OneWormTile.png";
	const twoWormTile = "img/TwoWormTile.png";
	const threeWormTile = "img/ThreeWormTile.png";
	const fourWormTile = "img/FourWormTile.png";
	
	
	public function __construct() {
		self::$grillworms= array();
		for($x=self::LowestWorm; $x<=self::HighestWorm; $x++) {
			array_push(self::$grillworms,$x);
		}
		//print_r(self::$grillworms);
	}
	
	public static function displayGrillWorms(){
		for($x=0; $x<count(self::$grillworms); $x++){
			//echo '<br>';
			//echo ''.self::$ActiveDiceList[$x]['image'];
			echo "<div class = 'worm inset'>";
				echo "<button>";
					echo "<div>";
						echo self::$grillworms[$x]."<br>";
						echo '<img src="'.self::setWormImage(self::$grillworms[$x]).'" height="75px"/>';
					echo "</div>";
				echo "</button>";
			echo "</div>";
		}
	}
	
	public static function setWormImage($wormValue){
		switch($wormValue){
			case 21:
			case 22:
			case 23:
			case 24:
				return self::oneWormTile;
				break;
			case 25:
			case 26:
			case 27:
			case 28:
				return self::twoWormTile;
				break;
			case 29:
			case 30:
			case 31:
			case 32:
				return self::threeWormTile;
				break;
			case 33:
			case 34:
			case 35:
			case 36:
				return self::fourWormTile;
				break;
			
		}
	}

}

?>

<!--	

	public static int getGrillWormsSize(){
		return grillworms.size();
	}
	
	public static int getGrillWormsValue(int grillwormindex){
		return grillworms.get(grillwormindex);
	}
	
	public static boolean doesGrillWormsContainValue(int grillwormvaluecheck){
		if (grillworms.contains(grillwormvaluecheck)){
			return true;
		}
		else{
			return false;
		}
	}
	
	
	public static boolean getEndOfGame(){
		return endofgame;
	}
	
	public static boolean CheckIfPrizeWormIsOnGrill(int prizeworm){
		if(grillworms.contains(prizeworm)){
			if(Dice.getDiceSum()>=prizeworm){
			RemovePrizeWormFromGrill(prizeworm);
			}
			return true;
		}
		else{
			JOptionPane.showMessageDialog(null, String.format("That worm is not on the grill"));
			return false;
		}
	}
	
	public static void RemovePrizeWormFromGrill(int prizeworm){
		grillworms.remove(grillworms.indexOf(prizeworm));
	}

	public static void AddWormBackToGrill(int lostworm){
			//Check if lostworm belongs at front of grill arraylist
		if(lostworm<grillworms.get(0)){
			grillworms.add(0,lostworm);
			RemoveHighestWormFromGrill();
		}
		//Check if lostworm belongs at end of grill arraylist
		else if(lostworm>grillworms.get(grillworms.size()-1)){
			grillworms.add(grillworms.size(), lostworm);
		}
		//Otherwise find place in middle of grill arraylist to add lost worm
		else {
			for(int x=0; x<grillworms.size(); x++){
				if(lostworm<grillworms.get(x) && lostworm>grillworms.get(x-1)){
					grillworms.add(x, lostworm);
				}
			}
			RemoveHighestWormFromGrill();
		}
	}

	public static void RemoveHighestWormFromGrill(){
		grillworms.remove(grillworms.size()-1);
	}
	
	public static void checkEndOfGameCondition(){
		if(grillworms.isEmpty()){
			endofgame=true;
		}
	}	
-->