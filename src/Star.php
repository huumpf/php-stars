<?php

class Star {
    protected $x;
    protected $y;
    protected $name;

    /**
     * @param   int $x
     * @param   int $y
     * @param   string $name
     */
    public function __construct($x,$y,$name) {
        $this->x = $x; 
        $this->y = $y; 
        $this->name = $name; 
    }

    public function printOn(Screen $screen) {
        $symbols = [".","o","O", "*"];
        $symbol = $symbols[random_int(0,3)];
        $screen->set($this->x,$this->y,$symbol);
        $screen->print($this->x+1,$this->y," ".$this->name." (".$this->x.",".$this->y.")");
    }

    public function x() {
        return $this->x;
    }

    public function y() {
        return $this->y;
    }
}
