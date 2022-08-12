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
        Schema::create('jokes', function (Blueprint $table) {
            $table->id();
            $table->integer('authed_author_id')->nullable()->references('id')->on('users');
            $table->string('author_display_name')->nullable();
            $table->string('title')->nullable();
            $table->text('body')->nullable();
            $table->text('punchline')->nullable();
            $table->enum('joke_format', ['one-liner','two-liner','long']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jokes');
    }
};
