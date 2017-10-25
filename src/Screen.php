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

    public function star($x,$y,$name) {
        $this->set($x,$y,"X");
        $this->print($x+1,$y," $name ($x,$y)");
    }
}
