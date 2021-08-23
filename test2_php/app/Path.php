<?php declare(strict_types=1);

namespace App;
use App\ExceptionHandlers\NotFoundDirectoryException;
use App\Helpers\Help;

class Path
{
    public  $root_path = "/";
    public $current_path;

    public function __construct($original_path)
    {
        $this->validate($original_path);
        $this->current_path = $original_path;
    }



    public function cd($path) : Void
    {
        $this->validate($path);
        $current_path_paths_arr = explode("/", $this->current_path);
        $paths = explode("/", $path);
        $current = current($paths);

        while($current) {
            if($current == "..") {
                $current_path_paths_arr = array_slice($current_path_paths_arr, 0, count($current_path_paths_arr) - 1);
            } else {
                $current_path_paths_arr[] = $current;
            }
            $current = next($paths);
        }
        //root directory
        if(count($current_path_paths_arr) == 1) {
            $this->current_path = $this->root_path;
            return;
        }

        $this->current_path = implode("/", $current_path_paths_arr);
        return;
    }

    protected function validate($path) : bool
    {
        $directory_names = explode("/", $path);

        foreach ($directory_names as $directory_name) {
            if($directory_name == ".." || empty($directory_name)) continue;
            if (!Help::validateStringIsAlphabet($directory_name)){
                throw new NotFoundDirectoryException("Invalid Directory Name and Should Be Letters from A-Z", 1);
            }
        }
        return true;
    }
}

?>