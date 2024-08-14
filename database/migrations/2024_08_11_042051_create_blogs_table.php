<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('picture')->nullable();
            $table->text('content');
            $table->timestamps();
            $table->string('author');
        });
    }

    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
