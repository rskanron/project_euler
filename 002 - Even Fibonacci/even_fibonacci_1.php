<?php
$startTime = microtime(true);
$sum = 2;

$num1 = 1;
$num2 = 2;
$nextFib = 0;
$num1Next = true;

while($nextFib <= 4000000) {
	$nextFib = $num1 + $num2;
	if ($nextFib % 2 === 0) {
		$sum += $nextFib;
	}
	if ($num1Next) {
		$num1 = $nextFib;
		$num1Next = false;
	} else {
		$num2 = $nextFib;
		$num1Next = true;
	}
}

echo $sum . PHP_EOL;
echo microtime(true) - $startTime;


?>