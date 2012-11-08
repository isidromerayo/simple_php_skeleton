Simple Skeleton PHP project: Composer and Symfony2 components
=============================================================

A simple skeleton PHP project, using composer and Symfon2 Components.

In this branch you can use Phake (https://github.com/mlively/Phake)

PSR-0

Now add PHPUnit install using composer

http://packagist.org/packages/phpunit/phpunit

Install
=======

$ git clone -b phake https://github.com/isidromerayo/simple_php_skeleton
OR
$ git clone -b phake https://bitbucket.org/isidromerayo/skeleton_php_project.git

$ curl -s http://getcomposer.org/installer | php
$ php composer.phar install

If you install composer globally (http://getcomposer.org/doc/00-intro.md#globally),
you should be use packagist :) (http://packagist.org/)

$ composer create-project isidromerayo/simple_php_skeleton my_project_name

All-in-one install and check (inspired by https://gist.github.com/cordoval :)

$ curl -s https://raw.github.com/gist/3612021/c02c865ccc311f4293710282b7ef30cacce267d6/simple_php_skeleton.sh | sh

Using
=====

Create your test under "tests" directory.
Create your code under "src" directory.

$ phpunit

If you want to use the vendor PHPUnit

$ vendor/bin/phpunit

To generate code coverage report (needs install xdebug extension)

If you use Netbeans PHP, configure in 
Project properties -> sources -> Test Folder: tests (Alt + F6 to run)

You should remove "Acme" namespace ;)

Travis-CI
=========

Status build: [![Build Status](https://secure.travis-ci.org/isidromerayo/simple_php_skeleton.png?branch=phake)](http://travis-ci.org/isidromerayo/simple_php_skeleton)
