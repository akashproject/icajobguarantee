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
        Schema::create('affiliate_users', function (Blueprint $table) {
            $table->id();
            $table->string("name",100);
            $table->string("email",100)->nullable();
            $table->string("mobile",20);
            $table->string("code",20);
            $table->text("pan_photo")->nullable();
            $table->string("pan_number",20)->nullable();
            $table->text("aadhar_photo")->nullable();
            $table->string("aadhar_number",20)->nullable();
            $table->string("account_holder_name",100)->nullable();
            $table->integer("account_no")->nullable();
            $table->string("branch",20)->nullable();
            $table->string("ifsc",20)->nullable();
            $table->string("cheque",20)->nullable();
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
        Schema::dropIfExists('affiliate_users');
    }
};
