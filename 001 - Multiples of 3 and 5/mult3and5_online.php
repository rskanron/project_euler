<?
$startTime = microtime(true);

// HERE IS ONE WAY TO DO IT I FOUND ONLINE

// $divisors = array( 3, 5 );
// $multiples_of_divisors = array();

// since we want only the multiples strictly below the upper bound, we use < rather than <=
// for ( $i = 1, $n = 1000000; $i < $n; $i++ ) {
    // foreach ( $divisors as $divisor ) {
        // if ( 0 == $i % $divisor ) {
            // $multiples_of_divisors[] = $i;
            // break out of the foreach so that we only add a given number once for a list of divisors
            // break;
        // }
    // }
// }

// $sum_of_multiples = array_sum($multiples_of_divisors);




// HERE IS ANOTHER I ALSO FOUND ONLINE .........................
$numberOne = 3;
$numberTwo = 5;
$endingIndex = 1000000;
$multiplesOfNumbers = array();  

for ($index = 1; $index < $endingIndex; $index++) {
    if ($index % $numberOne == 0 || $index % $numberTwo == 0) {
        array_push($multiplesOfNumbers, $index);
    }
}
$sumOfMultiples = array_sum($multiplesOfNumbers);


echo microtime(true) - $startTime;
