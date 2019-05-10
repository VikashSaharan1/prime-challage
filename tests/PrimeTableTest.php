<?php
require_once dirname(__FILE__) . '/../PrimeTable.php';
use PHPUnit\Framework\TestCase;

class PrimeTableTest extends TestCase {

	private $primeTable;

	function setUp() {
        $this->primeTable = new PrimeTable();
    }

	function testIsValidCommand() {
		$this->assertEquals(true, $this->primeTable->checkValidArgs(array(0 => 'primetable.php', 1 =>'--count', 2 => 10)));
	}

	function testIsInvalidCommand() {
		$this->assertEquals(true, $this->primeTable->checkValidArgs(array(0 => 'primetable.php', 1 =>'--test', 2 => 10)));
	}
}