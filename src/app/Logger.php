<?php

namespace App;

trait Logger
{
    public function log($message)
    {
        echo $message . PHP_EOL;
    }
}
