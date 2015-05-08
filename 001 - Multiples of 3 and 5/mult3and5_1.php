<?
$startTime = microtime(true);

$num1 = 3;
$num2 = 5;
$maxMultiple = 1000000;

$currentNumber = 0;
$multiples = array();
$answer = 0;

while ($currentNumber + $num1 < $maxMultiple) {
	$currentNumber = $currentNumber + $num1;
	$multiples[] = $currentNumber;
}

$currentNumber = 0;
while ($currentNumber + $num2 < $maxMultiple) {
	$currentNumber = $currentNumber + $num2;
	$multiples[] = $currentNumber;
}

$multiples = array_unique($multiples);
$answer = array_sum($multiples);
echo $answer . PHP_EOL;
echo microtime(true) - $startTime;