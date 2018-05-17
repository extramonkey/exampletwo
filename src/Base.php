<?php 

namespace Exampleone;

class Base {
    
    public static function hello($name = '')
    {
        
        return 'Hello ' . $name . '!';
        
    }

    public static function bye($name = '')
    {

       return 'Goodbye ' . $name . '!';

    }    
}
