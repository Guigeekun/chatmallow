# Chatmallow

## Install

### Requierment

* php 7.0 (or newer)(and php7.0-xml)
* composer
* mySQL
* apache server (only on prod)

### How to

be sure to have ".env" config with your Database line 7 to 12
you can rename ".env.exemple" and complete it

## Linux

When cloning the project don't forget to create the vendors (they are not versioned) do
`composer install` in the project folder

`php artisan key:generate` to create the app key

`php artisan migrate:install` to migrate the database (be sure to have the database, he won't create it)

`php artisan migrate` to prepare your database for Chatmallow
`php artisan db:seed` and to create default things

In order to use laravel-mix, use `npm install` (`npm install --no-bin-links` for windows systems !) to install laravel Mix (for assets and scripts.)
more: ( https://laravel.com/docs/5.4/mix#running-mix )

Then, if you want to compile your assets, use `npm run production` (or `npm run dev` for a uncompressed version of assets files.)

you should be ready to go ^^ host it and try it

use `php artisan serve` to start it

default user is
* mail : admin@gmail.com
* pass : admin
* name : admin

## Windows

On Windows you should use [Laragon](https://laragon.org/) it contains composer and permit to host the site

## And now ?

Chatmallow Manager is supposed to work with the physical support Chatmallow
Use the python script to make Chatmallow manager work with the arduino through the serial connection



### Used

This project use [Laravel](https://laravel.com/) and [AdminLTE for laravel](https://packagist.org/packages/jeroennoten/laravel-adminlte)
