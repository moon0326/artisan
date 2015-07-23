## Laravel Artisan as a Package

If you ever wnated to use the Laravel Artisan commands outside of the Laravel, this package can help you with that.

## Installation
1. Run ```composer require moon/artisan```
2. Run ```./vendor/moon/artisan/artisan artisan:init```. This command creates ***artisan-config.php** and **artisan** in your root directory.

## Usage

Run ```php artisan make:console command-name``` to create a new command. As you create a new command, you need to add the full path of the command class into **commands** in **artisan-config.php** just like how you do it with the Laravel.


