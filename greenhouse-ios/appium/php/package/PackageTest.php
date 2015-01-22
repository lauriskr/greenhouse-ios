<?php
// To run this test, install Sausage (see http://github.com/jlipps/sausage-bun
// to get the curl one-liner to run in this directory), then run:
//     vendor/bin/phpunit SimpleTest.php

require_once "vendor/autoload.php";
define("APP_PATH", realpath(dirname(__FILE__).'/../../../build/Debug-iphonesimulator/greenhouse-ios.app'));
if (!APP_PATH) {
    die("App did not exist!");
}


class PackageTest extends Sauce\Sausage\WebDriverTestCase
{
    protected $numValues = array();

    public static $browsers = array(
        array(
            'local' => true,
            'port' => 4723,
            'browserName' => '',
            'desiredCapabilities' => array(
                'device' => 'iPhone Simulator',
				'deviceName' => 'iPhone Simulator',
                'version' => '8.1',
                'platform' => 'iOS',
				'platformName' => 'iOS',
                'app' => APP_PATH
            )
        )
    );

    public function testExampleFail()
    {
        $this->assertTrue(false);
    }

	public function testExampleSuccess()
    {
        $this->assertFalse(false);
    }
}
