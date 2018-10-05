<?php

namespace TanTan\FileManager;

use Closure;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use TanTan\FileManager\Models\File;
use TanTan\FileManager\HasMedia\HasMedia;
use Illuminate\Database\Eloquent\Collection as DbCollection;

class FileRepository
{
    /** @var \TanTan\FileManager\Models\Media */
    protected $model;

    /** @param \TanTan\FileManager\Models\Media $model */
    public function __construct(File $model)
    {
        $this->model = $model;
    }

    public function getFiles(HasMedia $model){
        
    }
}
