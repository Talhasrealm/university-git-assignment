<?php

class Collatz {
    // This is a property. Every Collatz object will have its own starting number.
    public $startNumber;

    // The constructor sets up the object when you first create it.
    public function __construct($number) {
        $this->startNumber = $number;
    }

    // This method does the math for one specific number
    public function getSequence($n) {
        $sequence = array();
        
        while ($n != 1) {
            $sequence[] = $n;
            
            if ($n % 2 == 0) {
                $n = $n / 2;
            } else {
                $n = 3 * $n + 1;
            }
        }
        $sequence[] = 1;
        return $sequence;
    }

    // This method processes a range of numbers (e.g., 25 to 100)
    public function getRangeStatistics($min, $max) {
        // Let's create variables to track our "winners"
        $maxSteps = 0;
        $maxStepsNumber = 0;
        
        $highestValue = 0;
        $highestValueNumber = 0;

        // Loop through every number in the range
        for ($i = $min; $i <= $max; $i++) {
            $currentSequence = $this->getSequence($i);
            $count = count($currentSequence);
            $peak = max($currentSequence);

            // Check if this number has the longest sequence
            if ($count > $maxSteps) {
                $maxSteps = $count;
                $maxStepsNumber = $i;
            }

            // Check if this number goes the highest
            if ($peak > $highestValue) {
                $highestValue = $peak;
                $highestValueNumber = $i;
            }
        }

        // Return everything in a simple array
        return array(
            "longest_steps" => $maxSteps,
            "longest_steps_num" => $maxStepsNumber,
            "peak_value" => $highestValue,
            "peak_value_num" => $highestValueNumber
        );
    }
}