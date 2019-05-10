<?php
include_once 'PrimeTable.php';
$primeTable = new PrimeTable();
if($primeTable->checkValidArgs($argv)) {
	$primeTable->display($argv[2]);
}