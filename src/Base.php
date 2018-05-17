<?php 

namespace Exampleone;

class Base {
    /**
     * Print Hello (with an optional name)
     * 
     * @param string $name
     */
    public static function hello($name = '')
    {
        
        return 'Hello ' . $name . '!';
        
    }

    public static function bye($name = '')
    {

       return 'Goodbye ' . $name . '!';

    }    
}
