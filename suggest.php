<?php
	//People array 
	//@Todo - Get them from DB
	$people[] = "Steve";
	$people[] = "Stevie";
	$people[] = "Steven";
	$people[] = "Stephen";
	$people[] = "John";
	$people[] = "Johnny";
	$people[] = "Jacob";
	$people[] = "Jake";
	$people[] = "Kathy";
	$people[] = "Kate";
	$people[] = "Tom";
	$people[] = "Anthony";
	$people[] = "Brian";
	$people[] = "Catherin";
	$people[] = "Dolly";
	$people[] = "Emma";
	$people[] = "Fiona";
	$people[] = "Garth";
	$people[] = "Hillary";
	$people[] = "Ian";
	$people[] = "Lemony";
	$people[] = "Lila";
	$people[] = "Mona";
	$people[] = "Nicole";
	$people[] = "Oscar";
	$people[] = "Peter";
	$people[] = "Qintin";
	$people[] = "Robin";
	$people[] = "Thomas";
	$people[] = "Uri";
	$people[] = "Viola";
	$people[] = "Walter";


	//get Query string
	$q = $_REQUEST['q'];

	$suggestion = "";

	//get suggestions
	if ($q !== ""){
		$q = strtolower($q);
		$length = strlen($q);
		foreach ($people as $person) {
			// searching for query string in suggestions
			if(stristr($q, substr($person, 0, $length))){
				if($suggestion === ""){
					$suggestion = $person;
				} else{
					$suggestion .=", $person";
				}
			}
		}
	}

	echo $suggestion === ""? "No Suggestions" : $suggestion;
?>