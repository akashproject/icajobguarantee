<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->char('type_id', 100);
            $table->string('title');
            $table->string('slug');
            $table->string('banner_image');
            $table->string('featured_image');
            $table->text('description');
            $table->text('seo_description');
            $table->char('offer_price', 50);
            $table->char('price', 50);
            $table->char('duration', 50);
            $table->char('no_of_module', 50);
            $table->text('highlights');
            $table->text('criteria');
            $table->boolean('enable_otp');
            $table->boolean('schema');
            $table->boolean('utm_campaign');
            $table->boolean('utm_source');
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
        Schema::dropIfExists('courses');
    }
};
