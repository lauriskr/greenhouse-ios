<?php
// To run this test, install Sausage (see http://github.com/jlipps/sausage-bun
// to get the curl one-liner to run in this directory), then run:
//     vendor/bin/phpunit SimpleTest.php

require_once "BaseTest.php";

class AnotherTest extends BaseTest
{

	public function testExampleFail()
	{
		$this->assertTrue(false);
	}

	public function testExampleSuccess()
	{
		$this->assertFalse(false);
	}
}


class AnotherSameFileTest extends BaseTest
{

	public function testExampleFail()
	{
		$this->assertTrue(false);
	}

	public function testExampleSuccess()
	{
		$this->assertFalse(false);
	}
}
