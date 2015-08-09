<?php
//для работы необходимо подключить к PHP библиотеку Pear с классом Numbers_Words
include_once 'Numbers/Words.php';

class GetValue{
	public $value;

	public function __construct($value){
		$this->value = $value;
	}

	public function ret(){
		return $this->value;
	}
}

$tonumber = $_POST['number_input'];

if(!is_numeric($tonumber)){
	die ("Error, \"$tonumber\" NOT a number, " . ' <a href="http://localhost:81/last/">try again</a>');
}

if($tonumber == 1000000){
	
	echo "Eng: - one million";
	echo "<br />";
	echo "Рус: - один миллион";
	echo "<br />";
	echo "Укр: - один мільйон";


}else{
$obj_en = new GetValue($_POST['number_input']);
$obj_ru = new GetValue($_POST['number_input']);
$obj_ua = new GetValue($_POST['number_input']);

$nw = new Numbers_Words();

$en = $nw->toWords($obj_en->ret());
$ru = $nw->toWords($obj_ru->ret(), $locale='ru');
$ua = $nw->toWords($obj_ua->ret(), $locale='ua');
//$numw = $nw->toWords($number,$locale='ua');
//$obj->ret();
//$ru = $nw->toWords($number,$locale='ru');
echo "Eng: - ".$en;
echo "<br />";
echo "Рус: - ".$ru;
echo "<br />";
echo "Укр: - ".$ua;
}
