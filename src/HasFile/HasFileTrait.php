<?php
namespace TanTan\FileManager\HasFile;
use Spatie\MediaLibrary\Models\File;

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