<?php

class Validator{

    static public function string($data, $min = 0, $maxlen = INF){
        $data = trim($data);

        return is_string($data) 
            && strlen($data) >= $min 
            && strlen($data) < $maxlen;
 
    }
    static public function number($data, $min = 1, $maxlen = INF){
        $data = trim($data);
        return is_numeric($data) 
            && $data >= $min 
            && $data <= $maxlen;
    }

}