# Chatmallow

## Install

## Linux

### Requierment

* php 7.0 (or newer)
* composer
* mySQL
* apache server (to run it)

### How to

When cloning the project don't forget to create the vendors (they are not versioned) do
`composer install` in the project folder

be sure to have ".env" config with your Database line 7 to 12

`php artisan key:generate` to create the app key

`php artisan migrate:install` to migrate the database (be sure to have the database, he won't create it)

`php artisan migrate`

you should be ready to go ^^ host it and try it

default user is
email -> admin@gmail.fr
pass  -> admin

## Windows

On Windows you should use [Laragon](https://laragon.org/) it contains composer and permit to host the site

### Used

This project use [Laravel](https://laravel.com/) and [AdminLTE](https://almsaeedstudio.com/themes/AdminLTE/index2.html)
