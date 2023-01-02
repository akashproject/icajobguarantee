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
            $table->string('name');
            $table->string('title');
            $table->string('slug');
            $table->string('banner_image')->nullable();
            $table->string('featured_image')->nullable();
            $table->text('description');           
            $table->char('offer_price', 50)->nullable();
            $table->char('price', 50)->nullable();
            $table->char('duration', 50)->nullable();
            $table->char('no_of_module', 50)->nullable();
            $table->text('highlights')->nullable();
            $table->text('criteria')->nullable();
            $table->text('tags')->nullable();
            $table->boolean('enable_otp')->default('1');
            $table->text('meta_description')->nullable();
            $table->text('schema')->nullable();
            $table->string('robots',150)->default('index, follow');           
            $table->string('canonical')->nullable();           
            $table->string('utm_campaign',100)->default('Google-Organic');
            $table->string('utm_source',100)->default('SEO');
            $table->boolean('status',100)->default('1');
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
