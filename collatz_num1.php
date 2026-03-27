<?php
$currentValue = 27; 
$stepCount = 0; 

echo "<br>";
echo "Starting Number: " . $currentValue . "<br>";

if ($currentValue <= 0) {
    // We use (int) here just in case the variable is empty/null
    echo "Please enter a positive number instead of " . (int)$currentValue . ". \n";
} else {
    echo "Sequence: ";
    $startingSeed = $currentValue;

    while ($currentValue != 1) {
        echo $currentValue . " >> ";
        
        if ($currentValue % 2 == 0) {
            $currentValue = $currentValue / 2;
        } else {
            $currentValue = 3 * $currentValue + 1;
        }
        $stepCount++;
    }

    echo "1 <br>";
    echo "Total steps: " . $stepCount;
}
?>