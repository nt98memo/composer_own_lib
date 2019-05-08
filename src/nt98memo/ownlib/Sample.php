<?php
namespace nt98memo\ownlib;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Sample
{
    public static function displayVar() {
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler(__DIR__ . '/sample.log', Logger::WARNING));

        // add records to the log
        $log->warning('Foo');
        $log->error('Bar');
    }
}