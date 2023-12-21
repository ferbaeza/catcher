<?php

namespace Baezeta\Catcher\Utils\Folders;

class Directory
{
    static function create(string $path)
    {
        if(!is_dir($path)) {
            mkdir($path, 0777, true);
        }
    }

    static function delete(string $path)
    {
        if(is_dir($path)) {
            rmdir($path);
        }
    }

    static function exists(string $path)
    {
        return is_dir($path);
    }

    static function files(string $path)
    {
        return scandir($path);
    }

    static function resources(string $path = null)
    {
        $path =  __DIR__ . '/../../resources/' . $path;

        if(self::exists($path)) {
            return $path;
        }
        self::create($path);
    }

}
