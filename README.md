ZF2 Doctrine Skeleton
=======================

Introduction
------------
This is a simple, skeleton application using the ZF2 MVC layer and module
systems. This application is meant to be used as a starting place for those
looking to get their feet wet with ZF2. The Doctrine ORM Module has been added 
and can easily be configured to use a SQLite database. Your project is set up 
in just a few minutes!

Installation 
------------

### Installation using Composer

The easiest way to create a new ZF2 project is to use [Composer](https://getcomposer.org/). If you don't have it already installed, then please install as per the [documentation](https://getcomposer.org/doc/00-intro.md).

Create your new ZF2 project:

    composer create-project -n -sdev driehle/zf2-doctrine-skeleton path/to/install


### Installation using a tarball with a local Composer

If you don't have composer installed globally then another way to create a new ZF2 project is to download the tarball and install it:

1. Download the [tarball](https://github.com/driehle/zf2-doctrine-skeleton/tarball/master), extract it and then install the dependencies with a locally installed Composer:

        cd my/project/dir
        curl -#L https://github.com/driehle/zf2-doctrine-skeleton/tarball/master | tar xz --strip-components=1
    

2. Use the composer.phar contained in the project to install the dependencies:

        php composer.phar self-update
        php composer.phar install

If you don't have access to curl, then install Composer into your project as per the [documentation](https://getcomposer.org/doc/00-intro.md).


Configuration
-------------

Before you start, you need to tell Doctrine which database to use. You can simply do so by
copying the file `config/autoload/doctrine.local.php.dist` to `config/autoload/doctrine.local.php`.
Open that file, you will see sample configurations for both MySQL and SQLite. Simply enable 
one of them by commenting out the other one and you're ready to start.

Web server setup
----------------

### PHP CLI server

The simplest way to get started if you are using PHP 5.4 or above is to start the internal PHP cli-server in the root
directory:

    php -S 127.0.0.1:8080 -t public/ public/index.php

This will start the cli-server on port 8080, and bind it the loop-back address, so the server will be available 
only from your machine. Simply point your browser to [http://localhost:8080](http://localhost:8080).

**Note:** The built-in CLI server is *for development only*.

### Vagrant server

This project supports a basic [Vagrant](http://docs.vagrantup.com/v2/getting-started/index.html) configuration with an inline shell provisioner to run the Skeleton Application in a [VirtualBox](https://www.virtualbox.org/wiki/Downloads).

1. Run vagrant up command

    vagrant up

2. Visit [http://localhost:8085](http://localhost:8085) in your browser

Look in [Vagrantfile](Vagrantfile) for configuration details.
