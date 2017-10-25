<?php

class Screen {
    private $matrix;

    /**
     * @param   int $x
     * @param   int $y
     */
    public function __construct($x,$y) {
        for($i=0;$i<$y;$i++) {
            $this->matrix[] = array_fill(0,$x," ");
        }
    }

    public function printMe() {
        $rows = [];
        foreach($this->matrix as $row) {
            $rows[] = join($row, "");
        }
        echo join($rows,"\n")."\n";
    }
    
    /**
     * @param   int $x
     * @param   int $y
     * @param   string $v
     */
    public function set($x, $y, $v) {
        assert('strlen($v) === 1');
        $this->matrix[$y][$x] = $v;
    }

    public function print($x,$y,$string) {
        $i = 0;
        foreach (str_split($string) as $c) {
            $this->set($x+$i,$y,$c);
            $i++;
        }
    }

    public function marker1($x,$y) {
        $this->print($x-2,$y-2,"\\   /");
        $this->print($x-1,$y-1,".-.");
        $this->set($x-2,$y,"(");
        $this->set($x+2,$y,")");
        $this->print($x-1,$y+1,"'-'");
        $this->print($x-2,$y+2,"/   \\");
    }

    public function marker2($x,$y) {
        $this->print($x,$y-2,"|");
        $this->print($x-1,$y-1,".-.");
        $this->print($x-4,$y,"--(");
        $this->print($x-1,$y+1,"'-'");
        $this->print($x,$y+2,"|");
    }
}
