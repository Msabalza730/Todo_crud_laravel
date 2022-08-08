<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Project

TO DO app to create, update, delete and show a task list

### Create project

- composer create-project laravel/laravel example-app
- cd example-app


### MySQL

- mysql -u root -p
- show databases;
- CREATE DATABASE todos;
- use todos;
- describe todos;


### RUN Project

- php artisan
- php artisan serve
- php artisan migrate // Run the migrations
- php artisan migrate:status

if you have error migrate try:
    - composer update


## Create a controller

- php artisan make:controller TodosController

    To create other:
    - php artisan make:controller OtherController --resource
    
    To know  the route list
        -php artisan route:list

if you have error migrate try:
    - composer update

## The App:

![todo-laravel](https://user-images.githubusercontent.com/55921624/183316787-39f9a6f7-4b71-4424-a5dc-40d3261a6697.png)

