<?php
$startTime = microtime(true);

$num1 = 3;
$num2 = 5;
$maxMultiple = 1000;

// here is the pattern of differences between multiples of 3 and 5
// 3213123
// it repeats between every common multiple

// starting from an easy to find common multiple
$pattern = array();
$previousMultiple = $num1 * $num2;
$testNumber = $previousMultiple;
do {
	$testNumber++;
	
    $multipleOfNum1 = $testNumber % $num1 == 0;
	$multipleOfNum2 = $testNumber % $num2 == 0;
	
	// if either or both is a multiple of the next number
    if ($multipleOfNum1 || $multipleOfNum2) {
		// store difference between this multiple and last multiple found 
		$pattern[] = $testNumber - $previousMultiple;
		$previousMultiple = $testNumber;
	}
// if the last one revealed common multiples, end pattern creation
} while (!($multipleOfNum1 && $multipleOfNum2));

// iterate over the pattern and keep summing until the next multiple reaches the max
$currentMultiple = 0;
$sum = 0;
$nextInPattern = $pattern[0];
while ($maxMultiple > $currentMultiple = $currentMultiple + $nextInPattern) {
	$sum += $currentMultiple;
	$next = next($pattern);
	if (!$next) {
		reset($pattern);
		$next = $pattern[0];
	}
	$nextInPattern = $next;
}

echo "The sum of all multiples of $num1 and $num2 up to $maxMultiple is $sum" . PHP_EOL;
echo "Time taken = " . (microtime(true) - $startTime) . " ms";
