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
        Schema::create('destinasi', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('thumbnail', 255)->collation('utf8mb3_unicode_ci');
            $table->string('destinasi', 255)->collation('utf8mb3_unicode_ci');
            $table->string('peta_wisata', 255)->collation('utf8mb3_unicode_ci');
            $table->string('rute', 255)->collation('utf8_unicode_ci');
            $table->string('brosure', 255)->collation('utf8_unicode_ci');
            $table->string('total_waktu', 255)->collation('utf8_unicode_ci');
            $table->string('biaya', 255)->collation('utf8_unicode_ci');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destinasi');
    }
};
