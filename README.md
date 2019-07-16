# WildCircus
Checkpoint 4
=====================
Requirements
------------

  * Php ^7.2    http://php.net/manual/fr/install.php;
  * Composer    https://getcomposer.org/download/;

Installation
------------

1 . Clone the current repository.

2 . Move in and create a `.env.local` file. 
**This one is not committed to the shared repository.**
Set `db_name` to **Checkpoint4**.
 
3 . Execute commands below into your working folder to install the project:

```bash
$ composer install
$ php bin/console d:d:c (create 'name' DB)
$ php bin/console d:m:m (execute migrations and create tables)
$ php bin/console m:m
```
> Reminder : Don't use composer update to avoid problem

> Assets are directly into *public/* directory, **we will not use** Webpack with this Checkpoint 4


Usage
-----

Launch the server with command below and follow instructions on homepage `/`;

```bash
$ bin/console s:r
$ php bin/console make:controller
$ yarn install
$ yarn run encore dev --watch
