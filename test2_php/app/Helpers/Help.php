<?php 

namespace App\Helpers;

class Help {
    public static function validateStringIsAlphabet($string) : bool
    {
        if (! preg_match('/^[A-Z]+$/i', $string)) {
            return false;
        }
        return true;
    }
}

?>