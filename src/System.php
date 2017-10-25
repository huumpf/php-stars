<?php

class System {
    protected $stars;
    protected $user_pos;

    /**
     * @param   Star[] $stars
     */
    public function __construct(array $stars, $user_pos) {
        $this->stars = $stars;
        $this->user_pos = $user_pos;
    }

    public function printOn(Screen $screen) {
        foreach($this->stars as $star) {
            $star->printOn($screen);
        }
        $user_star = $this->stars[$this->user_pos];
        $screen->marker2($user_star->x(), $user_star->y());
    }
}
