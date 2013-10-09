Simple Skeleton PHP project: Composer and other PHP Tools
=========================================================

A simple skeleton PHP project, using composer and other tools like PHPUnit.

In this branch you can use Mockery (https://github.com/padraic/mockery)

PSR-0

Now add PHPUnit install using composer.

http://packagist.org/packages/phpunit/phpunit

Notes
=====
[2013-10-09]

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

$ composer(.phar) create-project isidromerayo/simple_php_skeleton my_project_name --dev

All-in-one install and check (inspired by https://gist.github.com/cordoval :)

$ curl -s https://raw.github.com/gist/3612021/272f75c0f8fe76008c6c2f4c124aa35d7182f728/simple_php_skeleton.sh | sh

### Update

$ composer(.phar) update --dev

Using
=====

Create your test under "tests" directory.
Create your code under "src" directory.

To run all test

$ bin/phpunit -c tests

If you want to use ant (and only phpunit task)

$ ant phpunit

Too use code coverage you need install XDebug extension (http://xdebug.org/)

$ bin/phpunit -c phpunit-codecoverage.xml.dist

$ ant 

You should remove "Acme" namespace ;)

Travis-CI
=========

Status build: [![Build Status](https://secure.travis-ci.org/isidromerayo/simple_php_skeleton.png?branch=mockery)](http://travis-ci.org/isidromerayo/simple_php_skeleton)
