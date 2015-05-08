<?
$startTime = microtime(true);

$num1 = 3;
$num2 = 5;

// here is the pattern of increments between multiples of 3 and 5
// 3213123 3213123
// it repeats after they achieve the same multiple, which the first one is of course 3*5 = 15

// how do we find this pattern?
// first get the lowest common multiple ....
$lcm = $num1 * $num2;
// start from lower divisor
$lastMultiple = 0;
$pattern = array();
// starting from first answer (num1*1) up to lcm
for ($index = $num1; $index <= $lcm; $index++) {
    // if is a multiple
    if ($index % $num1 == 0 || $index % $num2 == 0) {
		// store difference between this multiple and last multiple found
		$pattern[] = $index - $lastMultiple;
		$lastMultiple = $index;
    }
}

$maxMultiple = 1000000;

$currentNumber = 0;
$multiples = array();

$nextInPattern = $pattern[0];
while ($maxMultiple > $currentNumber = $currentNumber + $nextInPattern) {
	$multiples[] = $currentNumber;
	$next = next($pattern);
	if (!$next) {
		reset($pattern);
		$next = $pattern[0];
	}
	$nextInPattern = $next;
}

$answer = array_sum($multiples);
echo $answer . PHP_EOL;
echo microtime(true) - $startTime;