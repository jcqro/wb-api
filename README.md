# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Requirements

PHP version: >= 7.3 https://www.php.net/downloads
Dependency manager: composer https://getcomposer.org/download/

## Installation

Clone the project
Go to the folder application using cd command on your cmd or terminal
Run 'composer install' on your cmd or terminal
Copy .env.example file to .env on the root folder.
Run 'php -S localhost:8000 -t public' on your cmd or terminal
Tu run tests '.\vendor\bin\phpunit' on your cmd or terminal

## Endpoints

http://localhost:8000/fish External API All fish
http://localhost:8000/greeting Greeting Hello World

## Test files

FishAPITest.php External API endpoint test
GreetingTest.php Greeting endpoint test

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
