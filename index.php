<?php
/*
Sharmi Sukhia
IS 218 
Feburary 12, 2018
*/

//REQUIREMENT 1 - I can see this code executed 
echo "Sharmi Sukhia <br><br>";
$date =  date('Y-m-d', time());
echo "The value of \$dates: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

echo "<br><br>";

//REQUIREMENT 2
$date= str_replace('-', '/', $date);
echo "<b>2)</b> Replace '-' with '/' in date: $date <br>";

//REQUIREMENT 3
echo "<b>3)</b> Compare \$date to \$tar: ";
if(strtotime($date) > strtotime($tar)) {
	echo "The future<br>";
} else if(strtotime($date) < strtotime($tar)) {
	echo "The past<br>";
} else {
	echo "Oops<br>";
}

//REQUIREMENT 4
echo "<b>4)</b> Positions of '/' in \$date: ";
for($i = 0; $i < strlen($date); $i++) {
	if($date[$i] == '/') echo "$i ";
}
echo '<br>';

//REQUIREMENT 5
$word_count = count(explode("/", $date));
echo "<b>5)</b> Number of words in \$date: $word_count <br>";

//REQUIREMENT 6
$date_length = strlen($date);
echo "<b>6)</b> Length of \$date: $date_length <br>";

//REQUIREMENT 7
$first_ascii = ord($date[0]);
echo "<b>7)</b> ASCII value of first char in \$date string: $first_ascii <br>";

//REQUIREMENT 8
$last_two_chars = substr($date, -2);
echo "<b>8)</b> Last two chars in \$date: $last_two_chars <br>";

//REQUIREMENT 9
$exploded = explode("/", $date);
echo "<b>9)</b> Date array: ";
print_r($exploded);

//REQUIREMENT 10
echo "<br><b>10)</b> ";
foreach($year as $year) {
	if($year % 4 == 0) {
		if($year % 100 == 0) {
			if($year % 400 == 0) {
				echo "$year : True | ";
			} else {
				echo "$year : False | ";
			}
		} else {
			echo "$year : True | ";
		}
	} else {
		echo "$year : False | ";
	};
}

?>
