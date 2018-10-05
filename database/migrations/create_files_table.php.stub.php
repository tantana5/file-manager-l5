<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('alt')->nullable();
            $table->string('disk')->nullable();
            $table->string('file_name');
            $table->string('file_url');
            $table->string('mime_type')->nullable();
            $table->unsignedInteger('size')->nullable();
            $table->unsignedBigInteger('download')->default(0);
            $table->unsignedInteger('created_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
