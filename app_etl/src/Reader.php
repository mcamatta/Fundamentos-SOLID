<?php 

namespace App;

use App\Extractor\File;

class Reader
{
    private string $directory;
    private string $file;

    public function __construct($directory, $file) {
        $this->directory = $directory;
        $this->file = $file;
    }

    public function getDirectory(): string
    {
        return $this->directory;
    }

    public function getFile(): string
    {
        return $this->file;
    }

    public function readFile(): array
    {
        $path = $this->getDirectory() . DIRECTORY_SEPARATOR . $this->getFile();
        $extension = explode('.', $this->getFile());
        $class = 'App\Extractor\\' .  ucfirst($extension[1]);

        return call_user_func_array(
            [
                new $class,
                'readFile'
            ],
            [
                $path
            ]
        );
    }
}