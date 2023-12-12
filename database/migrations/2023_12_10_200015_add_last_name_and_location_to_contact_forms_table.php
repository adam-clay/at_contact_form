<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactFormsTable extends Migration
{
    public function up()
    {
        Schema::create('contact_forms', function (Blueprint $table) {
            $table->id();
            $table->string('first_name'); // First name field
            $table->string('last_name');  // Last name field
            $table->string('email');      // Email field
            $table->string('phone')->nullable(); // Phone field, nullable
            $table->string('location');   // Location field
            $table->text('message');      // Message field
            $table->timestamps();         // Timestamps for created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('contact_forms');
    }
}
