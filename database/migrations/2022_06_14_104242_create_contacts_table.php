<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_contact', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 50)->nullable()->default(null);
            $table->string('lastname', 50)->nullable()->default(null);
            $table->string('email', 100)->nullable()->default(null);
            $table->string('phonenumber', 20)->nullable()->default(null);
            $table->text('message')->nullable()->default(null);
            $table->enum('status', ['Y','N'])->default('Y');
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
        Schema::dropIfExists('tbl_contact');
    }
}
