<?php
namespace TanTan\FileManager\Models;

class FileUsage extends Model
{
	
	protected $table = 'file_usage';

	const MODEL         = 'model';
    const TARGET           = 'target_id';
    const FILE_ID          = 'file_id';

    protected $fillable = [
        self::MODEL,
        self::TARGET,
        self::FILE_ID,
    ];

}