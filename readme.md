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

This project use [Laravel](https://laravel.com/)
[AdminLTE for laravel](https://packagist.org/packages/jeroennoten/laravel-adminlte)

# French
## Installation
### Pré requis
* php 7.0 (or newer)(and php7.0-xml)
* composer
* mySQL
* apache server (only on prod)

### Installation

Les utilisateurs Windows peuvent utiliser [Laragon](https://laragon.org/)

Clonez le projet et renommer ".env.exemple" en ".env" vous devez ensuite l’éditer que Chatmallow manager se connecte à votre base de donnée (ligne 7 à 12)

faites `composer install` dans le dossier du projet pour créer les vendors

Créer la clé d'application avec `php artisan key:generate`

Ensuite vous devez préparer votre base de donnée `php artisan migrate:install` puis `php artisan migrate` puis `php artisan db:seed`

Pour utiliser Laravel-mix et compiler les assets faites
`npm install` (`npm install --no-bin-links` pour Windows !)
( https://laravel.com/docs/5.4/mix#running-mix )

Ensuite pour compiler utilisez `npm run production` (ou `npm run dev` pour une version decompréssé des assets)

Maintenant vous pouvez lancer Chatmallow
`php artisan serve`

L'utilisateur par defaut est :
* Mail : admin@gmail.com
* MPD : admin
* Nom d'utilisateur : admin

Pour modifier cet utilisateur vous pouvez éditer le database seeder dans /database/seeds/DatabaseSeeder.php
