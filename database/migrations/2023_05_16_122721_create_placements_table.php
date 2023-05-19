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
        Schema::create('placements', function (Blueprint $table) {
            $table->id();
            $table->integer('featured_image')->nullable();
            $table->string('name',100);
            $table->string('title');
            $table->text('bio');
            $table->string('course_id',100)->nullable();
            $table->string('dasignation',200);
            $table->integer('placed_at')->nullable();
            $table->string('center_id')->nullable();
            $table->boolean('enable_otp')->default('1');
            $table->text('meta_description')->nullable();
            $table->text('schema')->nullable();
            $table->string('robots',150)->default('index, follow');  
            $table->string('canonical')->nullable();                    
            $table->string('utm_campaign',100)->default('Google-Organic');
            $table->string('utm_source',100)->default('SEO');
            $table->enum('status', ['0', '1'])->default('1');
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
        Schema::dropIfExists('placements');
    }
};
