#phpunit-selenium

[![Build Status](https://travis-ci.org/testcookbook/php-phpunit-selenium.svg?branch=master)](https://travis-ci.org/testcookbook/php-phpunit-selenium)

##Setup
```bash
#install composer
curl -sS https://getcomposer.org/installer | php

#install dependencies
php composer.phar install

#start selenium server
java -jar selenium-server.jar

#run
/vendor/bin/phpunit test.php
```
