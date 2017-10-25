<?php

function nameGen($syllables) {
    assert('count($syllables) > 4');
    while(true) {
        $use = array_map(function($k) use ($syllables) {
            return $syllables[$k];
        }, array_rand($syllables,random_int(2,4)));   
        yield join($use,"");
    }
}
