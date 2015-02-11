<?php
$localIP = getHostByName(getHostName());
echo $localIP;

$is192 = strpos($localIP, "195");

if ($is192){
    echo "its true";
} else {
    echo "nope " . $is192;
}