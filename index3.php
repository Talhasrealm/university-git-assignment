<?php
require_once 'CollatzStats.php'; 

$solver = new CollatzStats(3);

$n = 25;
$m = 100;

$histogram = $solver->getValueHistogram($n, $m);

echo "<h2>Histogram for [$n; $m]:</h2>";
foreach ($histogram as $range => $count) {
    echo "Range $range: $count times<br>";
}
?>