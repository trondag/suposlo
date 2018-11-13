<?php

$sidetall = $_GET["sidetall"];

header('Content-type: application/json');
$fil = fopen("https://app.ticketmaster.com/discovery/v2/events.json?apikey=sIhCKgpPqRFAsAzAzsWtjaOoC9rMJAeC&city=oslo&classificationName=Music&page=".$sidetall, "r");

while($linje = fgets($fil)) {
    echo $linje;
}
?>