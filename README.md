Simple Skeleton PHP project: Composer and other PHP Tools
=========================================================

A simple skeleton PHP project, using composer and other tools like PHPUnit.

PSR-0

Now add PHPUnit install using composer 

http://packagist.org/packages/phpunit/phpunit


Install
=======

$ git clone -b master https://github.com/isidromerayo/simple_php_skeleton
OR
$ git clone -b master https://bitbucket.org/isidromerayo/skeleton_php_project.git

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

If you have install phpunit on your system

$ phpunit -c tests/

If you want to use the vendor PHPUnit

$ vendor/bin/phpunit -c tests/

To generate code coverage report (needs install xdebug extension)

$ vendor/bin/phpunit

If you want to use ant (and only phpunit task)

$ ant phpunit

If you use Netbeans PHP, configure in 
Project properties -> sources -> Test Folder: tests (Alt + F6 to run)

You should remove "Acme" namespace ;)

Autotest
========

You can autotest on save file, but you need ruby and some gems.

$ gem install guard guard-phpunit
$ gem install --version '~> 0.8.8' rb-inotify

Send notify to OS, I test on GNU/Linux Ubuntu 12.04 (gnome shell).

The project page: https://github.com/Maher4Ever/guard-phpunit. Guard::PHPUnit automatically runs your tests.
There is a problem, you need install phpunit in your system but a PR solve this problem https://github.com/Maher4Ever/guard-phpunit/pull/7.


Travis-CI
=========

Status build: [![Build Status](https://secure.travis-ci.org/isidromerayo/simple_php_skeleton.png)](http://travis-ci.org/isidromerayo/simple_php_skeleton)
