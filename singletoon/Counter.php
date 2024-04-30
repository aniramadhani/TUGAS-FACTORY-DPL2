<?php

class Counter
{
    private static ?Counter $instance = null;
    private int $count;

    private function __construct()
    {
        $this->count = 0;
    }

    public static function getInstance(): Counter
    {
        if (!self::$instance) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    public function increment()
    {
        $this->count++;
    }

    public function getCount(): int
    {
        return $this->count;
    }
}

?>
