<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinasi_children', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('destinasi_id')->unsigned();
            $table->string('days', 255)->collation('utf8mb3_unicode_ci');
            $table->string('detail_rute', 255)->collation('utf8mb3_unicode_ci');
            $table->string('deskripsi', 255)->collation('utf8mb3_unicode_ci');
            $table->string('thumbnail', 255)->collation('utf8mb3_unicode_ci');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();

            //add foreign key
            $table->foreign('destinasi_id')->references('id')->on('destinasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destinasi_children');
    }
};
