<?php

class BaseTest extends WebDriverTestCase
{

    /*    public function testLogin() {


            $this->driver->get($this->getTestPath('/'));
            $this->driver->wait()->until(WebDriverExpectedCondition::presenceOfElementLocated(WebDriverBy::linkText('Log In')));
            $this->driver->takeScreenshot('Captures\functional\hompage.png');
            $this->driver->findElement(WebDriverBy::linkText('Log In'))->click();
            $this->driver->findElement(WebDriverBy::id('email'))->sendKeys('luunguyen@ccintegration.com');
            $this->driver->findElement(WebDriverBy::id('pass'))->sendKeys('123456');
            $this->driver->findElement(WebDriverBy::id('send2'))->click();

        }*/

    public function testCreateOrder()
    {
        $this->driver->get($this->getTestPath('/'));
        $this->driver->manage()->deleteAllCookies();
        $this->driver->wait()->until(WebDriverExpectedCondition::presenceOfElementLocated(WebDriverBy::linkText('Log In')));
        $this->driver->findElement(WebDriverBy::linkText('Calypso - Gigabit Networks'))->click();
        $this->driver->findElement(WebDriverBy::xpath("//span[text()='Add to Cart']"))->click();
        $this->driver->findElement(WebDriverBy::id('email'))->sendKeys('luunguyen@ccintegration.com');
        $this->driver->findElement(WebDriverBy::id('pass'))->sendKeys('123456');
        $this->driver->findElement(WebDriverBy::id('send2'))->click();
        $this->driver->findElement(WebDriverBy::linkText('Checkout'))->click();
        sleep(3);
// Solution 1: using xpath
        //  $this->driver->findElement(WebDriverBy::xpath("//select[@id='billing-address-select']/option[@value='33']"))->click();
// Solution 2: using cssSelector
        $this->driver->findElement(WebDriverBy::cssSelector("select#billing-address-select > option[value='33']"))->click();
// Solution 1: using getAttribute
        /*        $select = $this->driver->findElement(WebDriverBy::tagName('select'));
                $allOptions = $select->findElement(WebDriverBy::tagName('option'));

                foreach ($allOptions as $option) {
                    $option->getAttribute('value');
                    $option->click();
                 }*/

// Click on the "continue" button
        $this->driver->findElement(WebDriverBy::xpath("//span[text()='Continue']"))->click();
        sleep(3);

        $this->driver->findElement(WebDriverBy::id('s_method_perproductshippingprotiered_ground_cost'))->click();

        sleep(6);
        $this->driver->findElement(WebDriverBy::xpath("/html/body/div[1]/div/div[2]/div/div[1]/ol/li[3]/div[2]/form/div[3]/button"))->click();
        sleep(3);
        $this->driver->findElement(WebDriverBy::cssSelector("select#authorizenet_cc_type > option[value='AE']"))->click();

        $this->driver->findElement(WebDriverBy::id('authorizenet_cc_number'))->sendKeys("370000000000002");

        $this->driver->findElement(WebDriverBy::xpath("//select[@id='authorizenet_expiration']/option[@value='3']"))->click();
        $this->driver->findElement(WebDriverBy::xpath("//select[@id='authorizenet_expiration_yr']/option[@value='2017']"))->click();
        $this->driver->findElement(WebDriverBy::id('authorizenet_cc_cid'))->sendKeys("1111");

        sleep(3);
        $this->driver->findElement(WebDriverBy::xpath("/html/body/div[1]/div/div[2]/div/div[1]/ol/li[4]/div[2]/div[2]/button/span/span"))->click();
        sleep(3);
        $this->driver->findElement(WebDriverBy::id('agreement-1'))->click();
        $this->driver->findElement(WebDriverBy::xpath("//span[text()='Place Order']"))->click();


        sleep(10);
    }

}
