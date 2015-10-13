## Laravel Artisan as a Package

Laravel Artisan is not available as a composer package. This package makes it easy to use Laravel Artisan as a composer package.

## Installation
1. Run ```composer require moon/artisan```
2. Run ```./vendor/moon/artisan/artisan artisan:init```. This command creates **artisan-config.php** and **artisan** in your root directory.

## Usage

* Run ```php artisan make:console command-name``` to create a new command. 
* When you create a new command, it will have **Artisan\Console\Commands** namespace. For example, if you run ```php artisan make:console Hello```, you will get ***Artisan\Console\Commands\Hello*** as a fully qualified class name. 
* Add the fully qualified class name to ***artisan-config.php***
* Run ```php artisan list``` to confirm.