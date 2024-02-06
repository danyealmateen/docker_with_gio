<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\FileProcessor;

$fileProcessor = new FileProcessor();
$fileProcessor->process("myfile.txt");
