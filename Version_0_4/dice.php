<?php

echo '<img src="img/DiceFaceFive.png" /><br><br>';

class Dice {
		
	private static $ActiveDiceList = array();
	private static $FrozenDiceList = array();
	const diceImageOne = "img/DiceFaceOne.png";
	const diceImageTwo = "img/DiceFaceTwo.png";
	const diceImageThree = "img/DiceFaceThree.png";
	const diceImageFour = "img/DiceFaceFour.png";
	const diceImageFive = "img/DiceFaceFive.png";
	const diceImageSix = "img/OneWormTile.png";
		
	const MAXDICENUMBER = 8;
	private static $activedicesize;
	private static $dicesum;
	private static $lastchancedicesum;
	
	private static $bunk = false;
	
	public function __construct() {
		//unset(self::$ActiveDiceList);
		self::$ActiveDiceList=array();
		//unset(self::$FrozenDiceList);
		self::$FrozenDiceList=array();
		self::$dicesum = 0;
		for($x=0; $x<self::MAXDICENUMBER; $x++){
			$diceValue=rand(1,6);
			array_push(self::$ActiveDiceList, array("value" => $diceValue, "image" => self::setDiceImage($diceValue)));
			array_push(self::$FrozenDiceList, array("value" => $diceValue, "image" => self::setDiceImage($diceValue)));
		}
		//print_r(self::$ActiveDiceList);
		//echo '<br><br>';
		//print_r(self::$FrozenDiceList);
		self::sumDice();
		//echo '<br><br>'.self::$dicesum;
	}
	
	public static function setDiceImage($diceValue){
		switch($diceValue){
			case 1:
				return self::diceImageOne;
				break;
			case 2:
				return self::diceImageTwo;
				break;
			case 3:
				return self::diceImageThree;
				break;
			case 4:
				return self::diceImageFour;
				break;
			case 5:
				return self::diceImageFive;
				break;
			case 6:
				return self::diceImageSix;
				break;
		}
	}
	
	public static function displayActiveDice(){
		for($x=0; $x<count(self::$ActiveDiceList); $x++){
			//echo '<br>';
			//echo ''.self::$ActiveDiceList[$x]['image'];
			echo "<div class = 'dice inset'>";
			echo '<img src="'.self::$ActiveDiceList[$x]['image'].'" height="75px"/>';
			echo "</div>";
		}
	}
	
	public static function displayFrozenDice(){
		for($x=0; $x<count(self::$FrozenDiceList); $x++){
			//echo '<br>';
			//echo ''.self::$ActiveDiceList[$x]['image'];
			echo "<div class = 'dice inset'>";
			echo '<img src="'.self::$FrozenDiceList[$x]['image'].'" height="75px"/>';
			echo "</div>";
		}
	}
	
	public static function sumDice(){ 
		self::$dicesum=0;
		for($x=0; $x<count(self::$FrozenDiceList); $x++){
			if(self::$FrozenDiceList[$x]['value']==6){
				self::$dicesum += 5;
			}
			else{
				self::$dicesum += self::$FrozenDiceList[$x]['value'];
			}
		}
	}
	
	public static function rollDice(){
		$ActiveDiceNumber=count(self::$ActiveDiceList);
		self::$ActiveDiceList=array();
		self::$dicesum = 0;
		for($x=0; $x<$ActiveDiceNumber; $x++){
		array_push(self::$ActiveDiceList, rand(1,6));
		}
		//print_r(self::$ActiveDiceList);
		//echo '<br><br>';
		//print_r(self::$FrozenDiceList);
		self::sumDice();
		self::checkforbunkdice();
	}
	
	public static function checkforbunkdice(){
		self::$bunk=true;
		for($x=0; $x<count(self::$ActiveDiceList); $x++){
			if(in_array(self::$ActiveDiceList[$x],self::$FrozenDiceList)==false){
				self::$bunk=false;
			}		
		}
	}
	
}
?>
	
<!--
		public static int getActiveDiceListValue(int activediceindex){
		return ActiveDiceList.get(activediceindex);
	}
	
	public static int getActiveDiceListSize(){
		return ActiveDiceList.size();
	}
	
	public static boolean doesActiveDiceListContainValue(int activedicevaluecheck){
		if(ActiveDiceList.contains(activedicevaluecheck)){
			return true;
		}
		else{
			return false;
		}
	}
	
	public static int getFrozenDiceListValue(int frozendiceindex){
		return FrozenDiceList.get(frozendiceindex);
	}
	
	public static int getFrozenDiceListSize(){
		return FrozenDiceList.size();
	}
	
	public static boolean doesFrozenDiceListContainValue(int frozendicevaluecheck){
		if(FrozenDiceList.contains(frozendicevaluecheck)){
			return true;
		}
		else{
			return false;
		}
	}
	
	public static void setBunk(boolean setboolean){
		bunk=setboolean;
	}
	
	public static boolean getBunk(){
		return bunk;
	}
	
	public static int getDiceSum(){
		return dicesum;
	}
	
	public static int getLastChanceDiceSum(){
		return lastchancedicesum;
	}
	

	public static void restartAllDice(){
		System.out.println("Initializing all new 8 dice");
		ActiveDiceList.clear();
		FrozenDiceList.clear();
		dicesum = 0;
		for(int x=0; x<MAXDICENUMBER; x++){
		ActiveDiceList.add(x, rand.nextInt(6)+1);
		}
		sumDice();
	}
	
	public static void moveDiceToFrozen(int numbergrouping){
		ArrayList<Integer> TransferDiceList = new ArrayList<Integer>();
		if(ActiveDiceList.contains(numbergrouping)){
			for(int x=0; x<ActiveDiceList.size(); x++){
				if(numbergrouping==ActiveDiceList.get(x)){
					FrozenDiceList.add(ActiveDiceList.get(x));		
				}
				else{
					TransferDiceList.add(ActiveDiceList.get(x));
				} 
			}
			ActiveDiceList.clear();
			ActiveDiceList.addAll(0, TransferDiceList);
			TransferDiceList.clear();
		}
		else{
			JOptionPane.showMessageDialog(null, "Active Dice do not contain that number grouping");
		}
	}

	public static void sumDiceLastChance(){ 
		lastchancedicesum=0;
		
		for(int x=0; x<FrozenDiceList.size(); x++){
			if(FrozenDiceList.get(x)==6){
				lastchancedicesum += 5;
			}
			else{
				lastchancedicesum += FrozenDiceList.get(x);
			}
		}
		
		for(int y=0; y<ActiveDiceList.size(); y++){
			if(FrozenDiceList.contains(ActiveDiceList.get(y))==false){	
				if(ActiveDiceList.get(y)==6){
					lastchancedicesum += 5;
				}
				else{
					lastchancedicesum += ActiveDiceList.get(y);
				}
			}
		}	
	}
-->	
