<?php
sleep(1);
if(isset($_GET['mission']) && isset($_GET['code'])){
	if($_GET['mission'] == 1){
		switch ($_GET['code']) {
			case 1:
				$array = array("question" => "Whats, 6*4", "answer" => 24, "mission" => 1, "code" => 1);
				echo json_encode($array);
				break;
			case 2:
				$array = array("question" => "I'm hot, but not fire. Orange but not a star. Who I am ?", "answer" => "magma", "mission" => 1, "code" => 2);
				echo json_encode($array);
				break;
			case 3:
				$array = array("question" => "I'm up and you're with me. Where are you?", "answer" => "up", "mission" => 1, "code" => 3);
				echo json_encode($array);
				break;
			case 4:
				$array = array("question" => "I am not a subtraction or a division. I give 4 but I am not 2 + 2 nor 1 + 3. Who am I?", "answer" => "2*2", "mission" => 1, "code" => 4);
				echo json_encode($array);
				break;
			case 5:
				$array = array("question" => "Whats 2+6*(7*2)+(10+9-(5+6))", "answer" => 94, "mission" => 1, "code" => 5);
				echo json_encode($array);
				break;
			case 6:
				$array = array("question" => "Whats 52+2⁴", "answer" => 68, "mission" => 2, "code" => 1);
				echo json_encode($array);
				break;
		}
	}elseif($_GET['mission'] == 2){
		switch ($_GET['code']){
			case 1:
				$array = array("question" => "Whats 52+2⁴", "answer" => 68, "mission" => 2, "code" => 1);
				echo json_encode($array);
				break;
			case 2:
				$array = array("question" => "What is Eris. A planet, a dwarf planet, a country or a animal.", "answer" => "dwarf planet", "mission" => 2, "code" => 2);
				echo json_encode($array);
				break;
			case 3:
				$array = array("question" => "What makes light? Electrons, Photons, Leptons or Protons", "answer" => "photons", "mission" => 2, "code" => 3);
				echo json_encode($array);
				break;
			case 4:
				$array = array("question" => "A computer screen is made of? Light, Element, Pixel, Plastic(Lowercase Only)", "answer" => "pixels", "mission" => 2, "code" => 4);
				echo json_encode($array);
				break;
			case 5:
				$array = array("question" => "Are other dimension on other universe? True or False.", "answer" => "false", "mission" => 2, "code" => 5);
				echo json_encode($array);
				break;
			case 6:
				$array = array("question" => "The O₂ level in the earth's atmosphere is: 10% 95% 21% or 53%?", "answer" => "21%", "mission" => 3, "code" => 1);
				echo json_encode($array);
				break;
		}
	}elseif($_GET['mission'] == 3){
		switch ($_GET['code']){
			case 1:
				$array = array("question" => "The O₂ level in the earth's atmosphere is: 10% 95% 21% or 53%?", "answer" => "21%", "mission" => 3, "code" => 1);
				echo json_encode($array);
				break;
			case 2:
				$array = array("question" => "Alpha-Bravo-Charlie-Delta-Echo-... (First letter in uppercase)", "answer" => "Foxtrot", "mission" => 3, "code" => 2);
				echo json_encode($array);
				break;
			case 3:
				$array = array("question" => "Fire is an element? (true or false, lowercase only)", "answer" => "false", "mission" => 3, "code" => 3);
				echo json_encode($array);
				break;
			case 4:
				$array = array("question" => "Which of these is not a gun: M4A1, P90, MP7, M60", "answer" => "M60", "mission" => 3, "code" => 4);
				echo json_encode($array);
				break;
			case 5:
				$array = array("question" => "What is this language: \"01100010 01101001 01101110 01100001 01110010 01111001 \"", "answer" => "binary", "mission" => 3, "code" => 5);
				echo json_encode($array);
				break;
			case 6:
				$array = array("question" => "That's the end for now", "answer" => "dsafdshkkjdfiugsjdf", "mission" => 0, "code" => 0);
				echo json_encode($array);
				break;
		}
	}
}