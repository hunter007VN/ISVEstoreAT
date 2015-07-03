
Customize from php-webdriver -- WebDriver bindings for PHP
===========================================

java -jar G:\1.Projects\Archived\Automation_Framework\PHPunit_Framework\SpiderAT\selenium\selenium-server-2.16.1.jar

 C:\xampp\php\phpunit.bat -c ./tests
 
 phpunit -c ./tests
 

GETTING STARTED

    All you need as the server for this client is the selenium-server-standalone-#.jar file provided here: http://selenium-release.storage.googleapis.com/index.html

    Download and run that file, replacing # with the current server version.

    java -jar selenium-server-standalone-#.jar

    Then when you create a session, be sure to pass the url to where your server is running.

    // This would be the url of the host running the server-standalone.jar
    $host = 'http://localhost:4444/wd/hub'; // this is the default

    Launch Firefox

    $driver = RemoteWebDriver::create($host, DesiredCapabilities::firefox());

    Launch Chrome

    $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());

    You can also customize the desired capabilities.

    $desired_capabilities = DesiredCapabilities::firefox();
    $desired_capabilities->setJavascriptEnabled(false);
    RemoteWebDriver::create($host, $desired_capabilities);

    See https://code.google.com/p/selenium/wiki/DesiredCapabilities for more details.

RUN UNIT TESTS

To run unit tests simply run:

./vendor/bin/phpunit -c ./tests

Note: For the functional test suite, a running selenium server is required.