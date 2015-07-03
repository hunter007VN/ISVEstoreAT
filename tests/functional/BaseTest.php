<?php

class BaseTest extends WebDriverTestCase
{

    public function testLogin() {


        $this->driver->get($this->getTestPath('/'));
        sleep(5);
        $this->driver->takeScreenshot('Captures\functional\hompage.png');
        $this->driver->findElement(WebDriverBy::linkText('Log In'))->click();
        $this->driver->findElement(WebDriverBy::id('email'))->sendKeys('luunguyen@ccintegration.com');
        $this->driver->findElement(WebDriverBy::id('pass'))->sendKeys('123456');
        $this->driver->findElement(WebDriverBy::id('send2'))->click();

    }

    public function testCreateOrder()
    {

    }

}
