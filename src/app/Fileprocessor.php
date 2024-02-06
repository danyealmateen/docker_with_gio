<?php

namespace App;

class FileProcessor
{
    use Logger;

    public function process($file)
    {
        $this->log("Processing file:" . $file);
    }
}
