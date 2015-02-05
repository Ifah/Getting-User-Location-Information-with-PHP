<?php
require 'Geo.php';

$geo = new Geo;

$geo->request('202.1.197.235');

echo $geo->city;
?>