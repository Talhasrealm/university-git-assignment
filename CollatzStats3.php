<?php
require_once 'collatz.php'; 

class CollatzStats extends Collatz {
    
    const BIN_SIZE = 100;
    const DEFAULT_MIN = 1;
    const DEFAULT_MAX = 1000;

    
    private $histogramData = array();

    public function __construct($number = self::DEFAULT_MIN) {
        parent::__construct($number);
    }

    
    public function getValueHistogram($n, $m) {
        $this->histogramData = array(); 
        for ($i = $n; $i <= $m; $i++) {
            $sequence = $this->getSequence($i);
            foreach ($sequence as $value) {
                $binIndex = floor($value / self::BIN_SIZE) * self::BIN_SIZE;
                $binLabel = $binIndex . "-" . ($binIndex + self::BIN_SIZE - 1);
                
                if (!isset($this->histogramData[$binLabel])) {
                    $this->histogramData[$binLabel] = 0;
                }
                $this->histogramData[$binLabel]++;
            }
        }
        ksort($this->histogramData);
        return $this->histogramData;
    }
}