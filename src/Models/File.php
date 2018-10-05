<?php
namespace TanTan\FileManager\Models;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'files';

    const TITLE         = 'title';
    const ALT           = 'alt';
    const DISK          = 'disk';
    const FILE_NAME     = 'file_name';
    const FILE_URL      = 'file_url';
    const MIME_TYPE     = 'mime_type';
    const SIZE          = 'size';
    const DOWNLOAD      = 'download';
    const CREATED_BY    = 'created_by';

    protected $fillable = [
        self::TITLE,
        self::ALT,
        self::DISK,
        self::FILE_NAME,
        self::FILE_URL,
        self::MIME_TYPE,
        self::SIZE,
        self::DOWNLOAD,
        self::CREATED_BY,
    ];

    /**
     * Indicates if the model should be timestamped.
     * @var bool
     */
    public $timestamps = true;

	public function model(): MorphTo
    {
        return $this->morphTo();
    }

    public function getDiskDriverName(): string
    {
        return strtolower(config("filesystems.disks.{$this->disk}.driver"));
    }

    public function getDiskUrl(): string
    {
        return strtolower(config("filesystems.disks.{$this->disk}.url"));
    }

    public function setCreatedByAttribute($value){
    	$this->attributes['created_by'] = 1;
    }

}