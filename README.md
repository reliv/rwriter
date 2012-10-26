R-Write
=======================

Introduction
------------
R-Write is a CMS that provides a "highly" WYSIWYG interface to create and edit your web site.  R-Write is built
on top of Zend Framework 2 and can be installed as a complete application or added as modules to an existing Zend
Framework 2 application.

Currently R-Write is still in development and is NOT for use on a production system.


Stand alone or complete application Installation
------------

Using Git submodules
--------------------
    git clone git@github.com:reliv/rwriter.git --recursive

Virtual Host
------------
Afterwards, set up a virtual host to point to the public/ directory of the
project.


Setup Doctrine
--------------
Copy the file config/local.php.dist to config/local.php.  Edit the Doctrine settings to point to your existing database.
* Please note that it is recommended to create a new database for use with R-Writer.  Please do not use an existing
database as R-Writer is not stable at the moment and we can not guarantee that we will not overwrite your existing data.


Run Install Script
------------------

http://[your domain]/install
