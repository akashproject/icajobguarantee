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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string("name",100);
            $table->string("email",100);
            $table->string("mobile",20);
            $table->string("center",100);
            $table->string("pincode",10);
            $table->string("latitude",50);
            $table->string("longitude",50);
            $table->string("utm_source",100);
            $table->string("utm_campaign",100);
            $table->string("role",50)->nullable();
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
        Schema::dropIfExists('leads');
    }
};
