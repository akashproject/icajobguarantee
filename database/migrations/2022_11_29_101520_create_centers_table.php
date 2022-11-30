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
        Schema::create('centers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('banner_image')->nullable();
            $table->string('featured_image')->nullable();
            $table->text('description');
            $table->text('seo_description')->nullable();
            $table->text('highlights')->nullable();
            $table->string('email',50)->nullable();
            $table->string('mobile',50)->nullable();
            $table->string('whatsapp',100)->nullable();
            $table->string('gmap_location')->nullable();
            $table->integer('state_id');
            $table->integer('city_id');
            $table->text('pincode')->nullable();
            $table->text('schema')->nullable();
            $table->boolean('enable_otp')->default('1');
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
        Schema::dropIfExists('centers');
    }
};
