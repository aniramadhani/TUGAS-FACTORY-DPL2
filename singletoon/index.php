<?php

require_once 'Counter.php';

// Increment counter
$counter = Counter::getInstance();
$counter->increment();

// Get current count
$count = $counter->getCount();

echo "Current count: " . $count;

?>
