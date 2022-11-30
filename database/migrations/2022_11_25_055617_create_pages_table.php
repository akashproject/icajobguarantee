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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('banner_image');
            $table->text('description');
            $table->text('seo_description');
            $table->string('template');
            $table->boolean('enable_otp');
            $table->text('schema');
            $table->string('utm_campaign',100);
            $table->string('utm_source',100);
            $table->boolean('status',100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pages');
    }
};
