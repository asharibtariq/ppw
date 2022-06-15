<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_team', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->nullable()->default(null);
            $table->string('designation', 50)->nullable()->default(null);
            $table->string('department', 50)->nullable()->default(null);
            $table->string('image')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->enum('status', ['Y','N'])->default('Y');
            $table->integer('created_by')->default(0);
            $table->integer('updated_by')->default(0);
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
        Schema::dropIfExists('tbl_team');
    }
}
