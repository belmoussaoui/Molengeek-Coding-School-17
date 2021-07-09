<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonial_items', function (Blueprint $table) {
            $table->id();
            $table->string('quote');
            $table->string('name');
            $table->string('avatar');
            $table->string('job');
            $table->foreignId('testimonial_id')->constrained('testimonials');
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
        Schema::dropIfExists('testimonial_items');
    }
}
