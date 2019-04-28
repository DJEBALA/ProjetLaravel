<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // Création de la table posts  avec toutes ses colonnes 
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('post_author');
            $table->date('post_date');
            $table->text('post_content');
            $table->string('post_title');
            $table->string('post_status')->nullable();
            $table->string('post_name');
            $table->string('post_type');
            $table->string('post_category')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('posts');
    }
}
