<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->constrained();
            $table->string('title');
            $table->string('description');
            $table->enum('page', ['public', 'internal', 'external']);
            $table->enum('type', ['text', 'image', 'video']);
            $table->foreignId('category_id')->constrained('categories');
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

        Schema::dropIfExists('contents', function (Blueprint $table) {
            $table->dropForeign(['admin_id'])->onDelete('cascade');
            $table->dropForeign(['category_id'])->onDelete('cascade');
        });
    }
}
