<?php
namespace TanTan\FileManager;
use Illuminate\Support\ServiceProvider;

class FileManagerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ( !class_exists('CreateFilesTable') ) {
            $this->publishes([
                __DIR__.'/../database/migrations/create_files_table.php.stub' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_files_table.php'),
            ], 'migrations');
        }
        if ( !class_exists('CreateFileUsageTable') ) {
            $this->publishes([
                __DIR__.'/../database/migrations/create_file_usage_table.php.stub' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_file_usage_table.php'),
            ], 'migrations');
        }
        TanTan\FileManager\Models\File::observe(new FileObserver());
    }

    public function register()
    {
        // $this->app->singleton(MediaRepository::class, function () {
        //     return new MediaRepository();
        // });
    }
}