<?php

namespace TanTan\FileManager;

use Closure;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use TanTan\FileManager\Models\File;
use TanTan\FileManager\Models\FileUsage;
use TanTan\FileManager\HasMedia\HasMedia;
use Illuminate\Database\Eloquent\Collection as DbCollection;

class FileRepository
{
    /** @var \TanTan\FileManager\Models\Media */
    protected $model;
    protected $modelUse;

    /** @param \TanTan\FileManager\Models\Media $model */
    public function __construct(File $model, FileUsage $modelUse)
    {
        $this->model = $model;
        $this->modelUse = $modelUse;
    }

    public function getFiles(HasMedia $model){
        
    }

    public function getFileByIds(array $ids) : DbCollection
    {
        return $this->model->whereIn('id', $ids)->get();
    }

    public function getByModel(string $modelType): DbCollection
    {
        return $this->model->where('model', $modelType)->get();
    }
}
