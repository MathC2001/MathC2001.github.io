<?php
$loisir = $_POST["loisir"];
$style = $_POST["style"];

$destination = $_POST["destination"];
$color = $_POST["color"];
$compte=$compte+1;




switch ($loisir) {
	case "opt1":
		$opt1=$opt1+1;
		echo $opt1;
		break;
	case "opt2":
		echo "Lo2";
		$opt2=$opt2+1;
		echo $opt2;
		break;
	case "opt3":
		echo "Lo3";
		$opt3=$opt3+1;
		echo $opt3;
		break;
	case "opt4":
		echo "Lo4";
		$opt4=$opt4+1;
		echo $opt4;
		break;
}	

switch ($style) {
	case "opt1":
		echo "S1";
		$opt1=$opt1+1;
		echo $opt1;
		break;
	case "opt2":
		echo "S2";
		$opt2=$opt2+1;
		echo $opt2;
		break;
	case "opt3":
		echo "S3";
		$opt3=$opt3+1;
		echo $opt3;
		break;
	case "opt4":
		echo "S4";
		$opt4=$opt4+1;
		echo $opt4;
		break;
}

switch ($color) {
	case "opt1":
		echo "bali";
		$opt1=$opt1+1;
		echo $opt1;
		break;
	case "opt2":
		echo "white";
		$opt2=$opt2+1;
		echo $opt2;
		break;
	case "opt3":
		echo "green";
		$opt3=$opt3+1;
		echo $opt3;
		break;
	case "opt4":
		echo "yellow";
		$opt4=$opt4+1;
		echo $opt4;
		break;
}

switch ($destination) {
	case "opt1":
		echo "bali";
		$opt1=$opt1+1;
		echo $opt1;
		break;
	case "opt2":
		echo "white";
		$opt2=$opt2+1;
		echo $opt2;
		break;
	case "opt3":
		echo "green";
		$opt3=$opt3+1;
		echo $opt3;
		break;
	case "opt4":
		echo "yellow";
		$opt4=$opt4+1;
		echo $opt4;
		break;
}


 
echo "Your loisir is "." ".$loisir ."<br />";
echo "Your sytle is ".$style."<br />";
echo "Your destination is "." ".$destination ."<br />";
echo "Your favorite color is ".$color."<br />";



echo $compte;



?>