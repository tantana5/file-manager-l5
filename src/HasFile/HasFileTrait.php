<?php
namespace TanTan\FileManager\HasFile;
use TanTan\MediaLibrary\Models\File;
use TanTan\MediaLibrary\FileRepository;

trait HasFileTrait
{
    /**
     * Get media collection by its collectionName.
     *
     * @param string $collectionName
     * @param array|callable $filters
     *
     * @return \Illuminate\Support\Collection
     */
    public function getFiles()
    {
        return app(FileRepository::class)->getFiles($this);
    }
}