<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$right = 8;
		$wrong = 0;
		$userWrongAnswer = Array();
		$answer = Array();
		$answer[0] = 'Madrid';
		$answer[1] = 'China|India|Japan|';
		$answer[2] = 'Portugal|France|';
		$answer[3] = 'Washington';
		$answer[4] = 'Tokyo';
		$answer[5] = 'Ottawa';
		$answer[6] = 'Beijing';
		$answer[7] = 'Seoul';
		$questions = Array();
		$questions[0] = "";
		$questions[1] = "";
		$questions[2] = "";
		$questions[3] = "";
		$questions[4] = "";
		$questions[5] = "";
		$questions[6] = "";
		$questions[7] = "";
		$questions[8] = "";

		// q1
		$q1c1 = $_POST["q1c1"];
		//q2
		$q2c1 = $_POST["q2c1"];
		$tempstr='';
			for ($i=0; $i < count($q2c1) ; $i++) { 
				 $tempstr .= $q2c1[$i]."|";
			}
		$q2c1 = $tempstr;
		$tempstr='';
		//q3
		$q3c1 = $_POST["q3c1"];
			for ($i=0; $i < count($q3c1) ; $i++) { 
				$tempstr .= $q3c1[$i]."|";
			}
		$q3c1 = $tempstr;
		$tempstr='';
		//q4
		$q4c1 = $_POST["q4c1"];
		//q5
		$q5c1 = $_POST["q5c1"];
		//q6
		$q6c1 = $_POST["q6c1"];
		//q7
		$q7c1 = $_POST["q7c1"];
		//q8
		$q8c1 = $_POST["q8c1"];

		$userAnswer = Array();
		$userAnswer[0]=$q1c1;
		$userAnswer[1]=$q2c1;
		$userAnswer[2]=$q3c1;
		$userAnswer[3]=$q4c1;
		$userAnswer[4]=$q5c1;
		$userAnswer[5]=$q6c1;
		$userAnswer[6]=$q7c1;
		$userAnswer[7]=$q8c1;
		// for ($i=0; $i < count($userAnswer); $i++) { 
		// 	echo $userAnswer[$i]."<br/>";
		// }
		for ($i=0; $i < count($answer); $i++) { 
			if ($answer[$i]==$userAnswer[$i]) {
				
				$userWrongAnswer[$i]=0;
			}else{
				$wrong++;
				$right--;
				$userWrongAnswer[$i]=1;
			}
		}
		// for ($i=0; $i <count($userWrongAnswer) ; $i++) { 
		// 	echo $userWrongAnswer[$i]." ";
		// }
		// for ($i=0; $i < count($userAnswer); $i++) { 
		// 	echo $userAnswer[$i]." " ;
		// }
		for ($i=0; $i < count($userWrongAnswer); $i++) { 
			if ($userWrongAnswer[$i]=="1") {
				echo "Question".($i+1).":".""."<br/>";
				$userWrongAnswerSpecial = explode("|",$userAnswer[$i]);
				$rightAnswerSpecial = explode("|",$answer[$i]);
				echo "You answered: ";
				for ($j=0; $j < count($userWrongAnswerSpecial); $j++) { 
					echo $userWrongAnswerSpecial[$j]." ";
				}
				echo "<br/>";
				echo "Correct answer: ";
				for ($z=0; $z <count($rightAnswerSpecial) ; $z++) { 
					echo $rightAnswerSpecial[$z]." ";
				}
				echo "<br/>";
			}
		}
		echo "<br/>";
		echo "You score is ".($right/($right+$wrong)*100)."%";
	?>
</body>
</html>

