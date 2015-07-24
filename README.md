## Laravel Artisan as a Package

This package let you use the Laravel Artisan commands outside of the Laravel ecosystem.

## Installation
1. Run ```composer require moon/artisan```
2. Run ```./vendor/moon/artisan/artisan artisan:init```. This command creates ***artisan-config.php** and **artisan** in your root directory.

## Usage

Usage is simliar to Laravel, except that you need to add command classes to **artisan-config.php** instead of **Kernel.php**

* Run ```php artisan make:console command-name``` to create a new command. 
* When you create a new command, it will have **Artisan\Console\Commands** namespace. If you add run ```php artisan make:console Hello```, you will get a ***Artisan\Console\Commands\Hello*** as fully qualified class name. 
* Add the fully qualified class name to ***artisan-config.php***
* Run ```php artisan list``` to confirm.