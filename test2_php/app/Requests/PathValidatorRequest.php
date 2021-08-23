<?php

namespace App\Requests;
use App\Helpers\Help;
use App\Exceptions\NotFoundDirectoryException;

class PathValidatorRequest
{
    private $request;
    
    public function __construct($request)
    {
        $this->request = $request;
    }

    public function validate()
    {
        $directories = explode("/", $this->request);

        foreach ($directories as $directory) {
            if($directory == ".." || empty($directory_name)) continue;
            if (!Help::validateStringIsAlphabet($directory_name)){
                throw new NotFoundDirectoryException("Invalid Directory Name and Should Be Letters from A-Z", 1);
            }
        }
        return true;
    }
}
?>