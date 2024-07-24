<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id('post_id');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('post_content');
            $table->string('post_img_name');
            $table->string('post_city');
            $table->string('post_man');
            $table->integer('post_title');
            $table->enum('post_type', ['grant', 'course' , 'work']);
            $table->enum('post_want', ['needTO', 'searchTO' ]);
            $table->enum('post_gender', ['male', 'female']);
            $table->integer('post_product_status');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
