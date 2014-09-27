Developer Test
=======================

Introduction
------------
This is a basic application using the Zend Framework 2 MVC layer and module
system. 

Installation
------------


PHP Version
------------
robertsc$ php -v
PHP 5.4.30 (cli) (built: Jul 29 2014 23:43:29) 
Copyright (c) 1997-2014 The PHP Group
Zend Engine v2.4.0, Copyright (c) 1998-2014 Zend Technologies


Virtual Host Conf
-----------------
httpd-vhosts.conf

<VirtualHost *:80>
    ServerName developertest.local
    DocumentRoot /Applications/MAMP/htdocs/developertest.local/public
    SetEnv APPLICATION_ENV "development"
    <Directory /Applications/MAMP/htdocs/developertest.local/public>
        DirectoryIndex index.php
        AllowOverride All
        Order allow,deny
        Allow from all
    </Directory>
</VirtualHost>

On production set APPLICATION_ENV "production"



Virtual Host
------------
robertsc$ sudo emacs /etc/hosts
127.0.0.1   developertest.local



Git ZF2
-------
robertsc$ cd /Applications/MAMP/htdocs/
robertsc$ git clone git://github.com/zendframework/ZendSkeletonApplication.git developertest.local

robertsc$ cd developertest.local/
robertsc$ php composer.phar self-update
robertsc$ php composer.phar install

PHPUnit
--------
wget https://phar.phpunit.de/phpunit.phar
robertsc$ chmod +x phpunit.phar 
robertsc$ sudo mv phpunit.phar /usr/local/bin/phpunit

robertsc$ phpunit --version
PHPUnit 4.2.6 by Sebastian Bergmann.
