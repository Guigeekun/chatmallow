# Chatmallow

## Install

### Requierment

* php 7.0 (or newer)
* composer
* mySQL
* apache server (only on prod)

### How to

be sure to have ".env" config with your Database line 7 to 12

## Linux

When cloning the project don't forget to create the vendors (they are not versioned) do
`composer install` in the project folder

`php artisan key:generate` to create the app key

`php artisan migrate:install` to migrate the database (be sure to have the database, he won't create it)

`php artisan migrate`

you should be ready to go ^^ host it and try it

use `php artisan serve` to start it

use `php artisan db:seed` to create a first user in the database use it to connect yourself

default user is
* mail : admin@gmail.com
* pass : admin
* name : admin

In order to use laravel-mix, use `npm install` (`npm install --no-bin-links` for windows systems !) to install laravel Mix (for assets and scripts.)
more: ( https://laravel.com/docs/5.4/mix#running-mix )

## Windows

On Windows you should use [Laragon](https://laragon.org/) it contains composer and permit to host the site

### Used

This project use [Laravel](https://laravel.com/) and [AdminLTE for laravel](https://packagist.org/packages/jeroennoten/laravel-adminlte)
