Developer Test
=======================

Introduction
------------

<h4>Requirements:</h4>

<p>You need to write a PHP program that will generate an HTML file that contains a sorted table of data 

with information retrieved from an input file.</p> 

<p>The input file, which is a JSON file, is located here: http://bit.ly/14GpXIv </p>

<p>Using the input JSON file, sort the data by last name (the field in the JSON file called “LName”) in 

descending order and display all fields into a HTML table on a valid HTML page.</p>

<p>The end user (the developers at the client who will be scoring your test), must be able to change the 

field the sort is applied to and see the result –without opening your PHP program and touching a single 

line of code. </p>

<h4>Solution</h4>
<p>
This is a basic application that uses the Zend Framework 2 MVC layer and module
system to retrieve and parse a JSON file and display the data in table format.
 It uses Twitter Bootstrap 3.2 for the layout and DataTables jQuery 
plugin to sort and filter the table data.</p>

Installation
------------


PHP Version
------------
<pre>
robertsc$ php -v
PHP 5.4.30 (cli) (built: Jul 29 2014 23:43:29) 
Copyright (c) 1997-2014 The PHP Group
Zend Engine v2.4.0, Copyright (c) 1998-2014 Zend Technologies`
</pre>


Libraries
----------
<ul>
<li>Zend Framework 2</li>
<li>Twitter Bootstrap 3.2</li>
<li>JQuery 1.11</li>
<li>DataTables jQuery plugin</li>
<li>PHPUnit 4.2</li>
</ul>

Virtual Host Config
-------------------
httpd-vhosts.conf

<pre>
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
</pre>

On production set APPLICATION_ENV "production"



Virtual Host
------------
<pre>
robertsc$ sudo emacs /etc/hosts
127.0.0.1   developertest.local
</pre>


Git
---
<pre>
robertsc$ cd /Applications/MAMP/htdocs/
robertsc$ git clone git://github.com/californiavol/developertest.local developertest.local

robertsc$ cd developertest.local/
robertsc$ php composer.phar self-update
robertsc$ php composer.phar install
</pre>

PHPUnit
--------
<pre>
wget https://phar.phpunit.de/phpunit.phar
robertsc$ chmod +x phpunit.phar 
robertsc$ sudo mv phpunit.phar /usr/local/bin/phpunit

robertsc$ phpunit --version
PHPUnit 4.2.6 by Sebastian Bergmann.
</pre>
