## Laravel Artisan as a Package

Laravel Artisan is not available as a composer package. You can use Laravel Artisan in your project with this package.

## Laravel Versions

| Laravel | This Package | Installation |
|--------|--------|----------|
| 5.4 | v1.7 | composer require moon/artisan:v1.7 |
| 5.3 | v1.6 | composer require moon/artisan:v1.6 |
| 5.2 | v1.5 | composer require moon/artisan:v1.5 |
| 5.1 | v1.4 | composer require moon/artisan:v1.4 |



## Installation
1. Run ```composer require moon/artisan```
2. Run ```./vendor/moon/artisan/artisan artisan:init```. This command creates **artisan-config.php** and **artisan** in your root directory.


## Usage

* Run ```php artisan make:console command-name``` to create a new command. 
* When you create a new command, it will have **Artisan\Console\Commands** namespace. For example, if you run ```php artisan make:console Hello```, you will get ***Artisan\Console\Commands\Hello*** as a fully qualified class name. 
* Add the fully qualified class name to ***artisan-config.php***
* Run ```php artisan list``` to confirm.

For general usage, please refer to Artisan documentation at http://laravel.com/docs/5.2/artisan