package com.greenhouseci.greenhouseios;

import io.appium.java_client.AppiumDriver;
import io.appium.java_client.ios.IOSDriver;
import org.junit.After;
import org.junit.Before;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.remote.CapabilityType;
import org.openqa.selenium.remote.DesiredCapabilities;

import java.io.File;
import java.net.URL;

public class BaseTest {

    private AppiumDriver driver;

    private WebElement row;

    @Before
    public void setUp() throws Exception {
        File appDir = new File(System.getenv("GREENHOUSE_SYMROOT"), "Debug-iphonesimulator");
        File app = new File(appDir, "greenhouse-ios.app");
        DesiredCapabilities capabilities = new DesiredCapabilities();
        capabilities.setCapability(CapabilityType.BROWSER_NAME, "");
        capabilities.setCapability("platformVersion", "8.1");
        capabilities.setCapability("platformName", "iOS");
        capabilities.setCapability("deviceName", "iPhone Simulator");
        capabilities.setCapability("app", app.getAbsolutePath());
        driver = new IOSDriver(new URL("http://127.0.0.1:4723/wd/hub"), capabilities);
    }

    @After
    public void tearDown() throws Exception {
        driver.quit();
    }
    
}
