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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('banner_image')->nullable();
            $table->string('featured_image')->nullable();
            $table->text('description');
            $table->text('seo_description')->nullable();
            $table->string('excerpt')->nullable();
            $table->string('category')->nullable();
            $table->string('tag')->nullable();
            $table->string('author_id')->nullable();
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
        Schema::dropIfExists('blogs');
    }
};
