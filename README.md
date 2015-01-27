Simple Skeleton PHP project: Composer and other PHP Tools
=========================================================

A simple skeleton PHP project, using composer and other tools like PHPUnit.

PSR-0

Now add PHPUnit install using composer.

http://packagist.org/packages/phpunit/phpunit

Notes
=====

[2015-01-27]

Remove selenium server, you should be add in composer.json dependency

```
"edysanchez/selenium-server": "dev-master",
```

To launch selenium server 

```
bin/selenium-server.jar
```

[2013-11-24]

Test hot-phpunit-runner for autotest using PHP, try to remove guard-phpunit2

https://github.com/slavahatnuke/hot-phpunit-runner

hot/phpunit-runner dev-master requires php >=5.4.0, but skeleton_php_project requires >=5.3.3

[2013-11-19]

Example test doubles: Stubs and Mocks
Add Selenium RC Server
Listener to calculate time execution (https://gist.github.com/isidromerayo/5115136)

[2013-11-16]

Add template to Jenkins CI http://jenkins-php.org/

[2013-11-11]

Add basic Scrutinizer (https://scrutinizer-ci.com/).

[2013-10-10]

Add Phake (Test Doubles) to composer.json and autotest with Guard PHPUnit2 (gem).

[2013-10-09]

Script post install to remove .git

[2013-10-08]

Restructure to divide test into: unit, integration and functional

[2013-02-20]

Add "Security Advisories Checker" https://security.sensiolabs.org/

[2013-02-18]

Remove functional test because we need minimal enviroment to kata(yunos).
Selenium RC will be another project (skeleton_PHP_testing)

[2012-12-19]

Change autoload to PSR-0 in src/
Reorganize phpunit.xml files and ant task

[2012-12-07]

Add Selenium RC and test demo

[2012-12-06] 

Change vendor/bin to bin

Change "require" to "require-dev"

Add "suggest" to install XDebug

Update gist

[2012-10-07] 

Add a  Dependency Injection Container for PHP (Pimple)

http://pimple.sensiolabs.org/

Install
=======

You need install composer (http://getcomposer.org/)

$ curl -s http://getcomposer.org/installer | php
$ php composer.phar install --dev

If you install composer globally (http://getcomposer.org/doc/00-intro.md#globally),
you should be use packagist :) (http://packagist.org/)

$ composer(.phar) create-project isidromerayo/simple_php_skeleton my_project_name

All-in-one install and check (inspired by https://gist.github.com/cordoval :)

$ curl -s https://raw.github.com/gist/3612021/272f75c0f8fe76008c6c2f4c124aa35d7182f728/simple_php_skeleton.sh | sh

### Update

$ composer(.phar) update

Using
=====

Create your test under "tests" directory.
Create your code under "src" directory.

To run all test

$ bin/phpunit -c tests

If you want to use ant (and only phpunit task)

$ ant phpunit

Too use code coverage you need install XDebug extension (http://xdebug.org/)

$ bin/phpunit -c tests/phpunit-codecoverage.xml.dist

$ ant -f build-composer.xml

All test
--------

Require: WebDriver and add selenium server dependency ("edysanchez/selenium-server": "dev-master",)

By default minimal enviroment (unit + integration), to launch "complete" with Selenium the steps:

1) Launch Selenium RC Server 

$ bin/selenium-server.jar

2) Launch test with custom configuration phpunit file (another terminal window)

$ bin/phpunit -c tests/phpunit-complete.xml.dist

You should remove "Acme" namespace ;)

Autotest
========

Note: Test on Ubuntu 12.04/14.04 (Gnome Shell and XFCE)

hot-phpunit-runner
------------------

$ bin/hot-phpunit-runner --config=tests/phpunit.xml.dist --watch --notify

More info https://github.com/slavahatnuke/hot-phpunit-runner

Guard PHPUnit2
--------------

You can try to autotest with Guard PHPUnit2

$ gem install guard-phpunit2

To launch, simple:

$ guard

The configuration file is Guardfile :)

More info https://github.com/ramon/guard-phpunit2


Travis-CI
=========

Status build: [![Build Status](https://secure.travis-ci.org/isidromerayo/simple_php_skeleton.png?branch=mockery)](http://travis-ci.org/isidromerayo/simple_php_skeleton)

Scrutinizer
==========

Quality: [![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/isidromerayo/simple_php_skeleton/badges/quality-score.png?s=fe47d20f43c2d317977f3094c33845a2727bf177)](https://scrutinizer-ci.com/g/isidromerayo/simple_php_skeleton/)

Code Coverage: [![Code Coverage](https://scrutinizer-ci.com/b/isidromerayo/skeleton_php_project/badges/coverage.png?s=79428d01806bfd9549178b5504a6688c5ca8b8b4)](https://scrutinizer-ci.com/b/isidromerayo/skeleton_php_project/)

References
==========

PHPUnit: 
    
    http://phpunit.de/manual/current/en/index.html

Mockery: 

    https://github.com/padraic/mockery

Phake: 

    https://github.com/mlively/Phake
    http://phake.digitalsandwich.com/docs/html/

Selenium Extension:

    https://github.com/sebastianbergmann/phpunit-selenium/blob/master/Tests/Selenium2TestCaseTest.php
