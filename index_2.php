<?php
// 1. Load your class
require_once 'Collatz_number.php';

// 2. Create the object (passing in a starting number)
$solver = new Collatz(3);

// 3. Define the interval you want to check
$start = 25;
$end = 500;

// 4. Get the results
$stats = $solver->getRangeStatistics($start, $end);

// 5. Print results in a readable way
echo "Analysis for range $start to $end:<br>";
echo "Longest sequence: " . $stats['longest_steps_num'] . " (with " . $stats['longest_steps'] . " steps)<br>";
echo "Highest number reached: " . $stats['peak_value'] . " (reached by number " . $stats['peak_value_num'] . ")<br>";
?>