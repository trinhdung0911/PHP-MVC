<?php
class Input {
    
    /**
     * Return a given $_GET value if it exists, else, return false
     * If no $key is passed through I am expecting all $_GEt variables returned to me
     * @param  string $key 
     * @return string/array
     */
    function get($key = '') {
        if ( $key != '' ) {
            return isset($_GET[$key]) ? $_GET[$key] : false;
        }
        return $_GET;
    }    
}