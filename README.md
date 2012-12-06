Simple Skeleton PHP project: Composer and other PHP Tools
=========================================================

A simple skeleton PHP project, using composer and other tools like PHPUnit.

PSR-0

Now add PHPUnit install using composer.

http://packagist.org/packages/phpunit/phpunit

Notes
=====

[2012-12-06] 

Change vendor/bin to bin
Change "require" to "require-dev"

[2012-10-07] 

Add a  Dependency Injection Container for PHP (Pimple)

http://pimple.sensiolabs.org/

Install
=======

$ git clone -b master https://github.com/isidromerayo/simple_php_skeleton
OR
$ git clone -b master https://bitbucket.org/isidromerayo/skeleton_php_project.git

You need install composer (http://getcomposer.org/)

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

If you want to use the vendor PHPUnit, to generate code coverage report (needs install xdebug extension)

$ bin/phpunit

If you want to use ant (and only phpunit task)

$ ant phpunit

Too use code coverage you need install XDebug extension (http://xdebug.org/)

$ bin/phpunit -c phpunit-codecoverage.xml.dist

$ ant phpunit-codecoverage

If you use Netbeans PHP, configure in

Project properties -> sources -> Test Folder: tests

Project properties -> PHPUnit -> Use XML Configuration: select from root phpunit.xml.dist (generate code coverage)
or
Project properties -> PHPUnit -> Use bootstrap: select tests/TestHelper.pho
(Alt + F6 to run)

You should remove "Acme" namespace ;)

Autotest
========

You can autotest on save file, but you need ruby and some gems.

$ gem install guard guard-phpunit
$ gem install --version '~> 0.8.8' rb-inotify

Send notify to OS, I test on GNU/Linux Ubuntu 12.04 (gnome shell).

$ ruby --version
ruby 1.9.3p194 (2012-04-20 revision 35410) [x86_64-linux]
$ gem --version
1.8.23
$ gem list

*** LOCAL GEMS ***

archive-tar-minitar (0.5.2)
bundler (1.2.1, 1.1.4)
childprocess (0.3.6)
coderay (1.0.8)
erubis (2.7.0)
ffi (1.1.5)
guard (1.5.3)
guard-phpunit (0.1.4)
i18n (0.6.1)
json (1.5.4)
libnotify (0.8.0)
listen (0.5.3)
log4r (1.1.10)
lumberjack (1.0.2)
method_source (0.8.1)
net-scp (1.0.4)
net-ssh (2.2.2)
pry (0.9.10)
rake (0.9.2.2)
rb-inotify (0.8.8)
rubygems-bundler (1.1.0, 1.0.3)
rvm (1.11.3.5)
slop (3.3.3)
thor (0.16.0)
vagrant (1.0.5)
watchr (0.7)


The project page: https://github.com/Maher4Ever/guard-phpunit. Guard::PHPUnit automatically runs your tests.
There is a problem, you need install phpunit in your system but a PR solve this problem https://github.com/Maher4Ever/guard-phpunit/pull/7.


Travis-CI
=========

Status build: [![Build Status](https://secure.travis-ci.org/isidromerayo/simple_php_skeleton.png)](http://travis-ci.org/isidromerayo/simple_php_skeleton)
