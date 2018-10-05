<?php
namespace TanTan\FileManager;

use TanTan\FileManager\Models\File;
use Auth;

class FileObserver
{
    public function creating(File $file)
    {
        if (Auth::check()) {
            $file->created_by = Auth::user()->id;
        }
    }
}