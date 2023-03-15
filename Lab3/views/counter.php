<?php
$counter = new Counter();
$counter->increamentAndUupdate();
$count = $counter->getCount();
echo "<h1> Count = $count </h1>";