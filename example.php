<?php 

class human
{
	var $hand = "hand";
	var $eye = "eye";
	public function step($hand){
		echo "$hand";
	}
	private function step1($ex1){
		echo "$ex1";
	}
	static function step2($ex2){
		echo "$ex2";
	}
	
	
}
$ex = new human;
echo $ex->step(2);
echo $ex->step2(3);
echo $ex->step1("test1");
?>