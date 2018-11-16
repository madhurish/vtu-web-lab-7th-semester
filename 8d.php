<?php
$arr1 = array(
array(1,2,9),
array(3,4,9),
array(5,6,9));
$arr2 = array(
array(7,2,9),
array(7,4,9),
array(7,6,9));
echo"<h2>Matrix1</h2>";
for($row=0;$row<3;$row++){
echo"<br>";
	for($col=0;$col<3;$col++){
	echo" ".$arr1[$row][$col];
	}
}
echo"<h2>Matrix2</h2>";
for($row=0;$row<3;$row++){
echo"<br>";
	for($col=0;$col<3;$col++){
	echo" ".$arr2[$row][$col];
	}
}
echo"<h2>Result of sum</h2>";
for($row=0;$row<3;$row++){
echo"<br>";
	for($col=0;$col<3;$col++){
	echo" ".($arr2[$row][$col]+$arr1[$row][$col]);
	}
}
?>

