<?php
// declare(strict_types=1); // strict requirement
function addNumbers(int $a, int $b, bool $printSum): int {
	$sum = $a + $b;
	if ($printSum) {
 		echo 'The sum is ' . $sum;
	}
 	return $sum;
}
$suma = addNumbers(1, '2', true);
echo $suma;
?>