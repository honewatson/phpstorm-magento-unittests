phpstorm magento unittests on ubuntu
====================================

* cd /usr/local/bin

#### http://getcomposer.org/doc/00-intro.md#downloading-the-composer-executable

* sudo curl -sS https://getcomposer.org/installer | sudo php

* sudo mv composer.phar composer

#### http://phpunit.de/manual/3.7/en/installation.html
* sudo su
* cd /usr/share/php
* echo '{ "require": { "phpunit/phpunit": "3.7.*" } }' >> composer.json

* composer install

#### Additional

* create directory called tests in Magento root
* Add file called All.php which is included in this repo

#### Now watch videos in numerical order
