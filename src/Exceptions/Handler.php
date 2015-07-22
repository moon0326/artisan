<?php

namespace Moon\Artisan\Exceptions;

use Exception;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Symfony\Component\Console\Application as ConsoleApplication;

class Handler implements ExceptionHandler
{
    public function renderForConsole($output, Exception $e)
    {
        (new ConsoleApplication())->renderException($e, $output);
    }

    public function report(Exception $e)
    {
    }

    public function render($request, Exception $e)
    {
    }
}
