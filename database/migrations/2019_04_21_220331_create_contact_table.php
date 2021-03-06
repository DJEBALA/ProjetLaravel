<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // Création de la table contact  avec toutes ses colonnes
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('contact_name');
            $table->string('contact_email');
            $table->string('contact_message');
            $table->date('contact_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact');
    }
}
