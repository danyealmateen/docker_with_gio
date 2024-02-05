<?php

namespace App;

class Toaster
{
    protected array $slices = [];
    protected int $size = 2;

    public function __construct()
    {
        $this->slices = [];
        $this->size = 2;
    }

    public function addSlice(string $slice): void
    {
        var_dump($this);
        if (count($this->slices) < $this->size) {
            $this->slices[] = $slice;
        }
    }

    public function toast()
    {
        foreach ($this->slices as $i => $slice) {
            echo ($i + 1) . ': Toasting ' . $slice . PHP_EOL;
        }
    }

    public function foo()
    {
        throw new \Exception('Not supported');
    }
}
