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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->string('name');
            $table->integer('owner_id');
            $table->integer('category_id');
            $table->string('microchip_id')->nullable();
            $table->string('status'); //dead, alive
            $table->string('mark')->nullable();
            $table->string('color');
            $table->string('gender');
            $table->string('breed');
            $table->date('dob');
            $table->string('created_by');
            $table->integer('weight')->nullable();
            $table->integer('delete_status')->default(0);
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
        Schema::dropIfExists('pets');
    }
};
