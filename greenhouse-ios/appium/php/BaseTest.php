<?php
// To run this test, install Sausage (see http://github.com/jlipps/sausage-bun
// to get the curl one-liner to run in this directory), then run:
//     vendor/bin/phpunit SimpleTest.php

require_once "vendor/autoload.php";
define("APP_PATH", realpath(getenv("GREENHOUSE_SYMROOT")."/Debug-iphonesimulator/greenhouse-ios.app"));
if (!APP_PATH) {
    die("App did not exist!");
}


class BaseTest extends Sauce\Sausage\WebDriverTestCase
{
    protected $numValues = array();
    public static $browsers = array(
        array(
            'local' => true,
            'port' => 4723,
            'browserName' => '',
			'seleniumServerRequestsTimeout' => 320,
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
}
