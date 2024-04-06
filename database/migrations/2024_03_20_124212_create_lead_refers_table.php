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
        Schema::create('lead_refers', function (Blueprint $table) {
            $table->id();
            $table->integer('from_center');
            $table->integer('to_center');
            $table->string("name",100);
            $table->string("email",100);
            $table->string("mobile",20);
            $table->text("remarks",20);
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
        Schema::dropIfExists('lead_refers');
    }
};
