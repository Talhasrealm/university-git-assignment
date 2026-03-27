<?php
class Collatz {
    // Protected allows the child class to access it, but hides it from index.php
    protected $startNumber;

    public function __construct($number) {
        $this->startNumber = $number;
    }

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

    public function getRangeStatistics($min, $max) {
        $maxSteps = 0;
        $highestValue = 0;
        // ... rest of your existing logic ...
        return array(
            "longest_steps" => $maxSteps,
            "peak_value" => $highestValue
        );
    }
}