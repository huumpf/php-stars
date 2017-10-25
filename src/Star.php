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
        $screen->star($this->x,$this->y, $this->name);
    }
}
