<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('ville');
            $table->string('pays');
            $table->Integer('max')->default('0');
            $table->Integer('ATT')->default('0');
            $table->Integer('CT')->default('0');
            $table->Integer('DC')->default('0');
            $table->Integer('RP')->default('0');
            $table->foreignId("continent_id")->constrained("continents");
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
        Schema::dropIfExists('equipes');
    }
}
