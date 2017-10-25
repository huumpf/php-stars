<?php

class System {
    protected $stars;

    /**
     * @param   Star[] $stars
     */
    public function __construct(array $stars) {
        $this->stars = $stars;
    }

    public function printOn(Screen $screen) {
        foreach($this->stars as $star) {
            $star->printOn($screen);
        }
    }
}
