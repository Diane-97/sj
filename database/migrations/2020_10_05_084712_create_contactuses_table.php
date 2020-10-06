<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD:database/migrations/2020_09_29_065746_create_contacts_table.php
class CreateContactsTable extends Migration
=======
class CreateContactusesTable extends Migration
>>>>>>> d3f2386b2ca19bb6de80547eb556b55782af5e02:database/migrations/2020_10_05_084712_create_contactuses_table.php
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:database/migrations/2020_09_29_065746_create_contacts_table.php
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            // $table->string('address');
            $table->string('email')->unique();
            $table->string('name');
=======
        Schema::create('contactuses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
>>>>>>> d3f2386b2ca19bb6de80547eb556b55782af5e02:database/migrations/2020_10_05_084712_create_contactuses_table.php
            $table->string('subject');
            $table->string('message');
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
<<<<<<< HEAD:database/migrations/2020_09_29_065746_create_contacts_table.php
        Schema::dropIfExists('contacts');
=======
        Schema::dropIfExists('contactuses');
>>>>>>> d3f2386b2ca19bb6de80547eb556b55782af5e02:database/migrations/2020_10_05_084712_create_contactuses_table.php
    }
}
