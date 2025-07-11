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
        Schema::create('lam_leads', function (Blueprint $table) {
            $table->id();
            $table->string("name",100)->nullable();
            $table->string("email",100)->nullable();
            $table->string("mobile",20)->nullable();
            $table->string("pincode",10);
            $table->string("date_of_birth",50)->nullable();
            $table->string("alternate_mobile_number",20)->nullable();
            $table->string("qualification")->nullable();
            $table->string("college")->nullable();
            $table->string("experience")->nullable();
            $table->string("other_experience")->nullable();
            $table->string("career_option")->nullable();
            $table->string("other_career_option")->nullable();
            $table->string("LeadType")->nullable();
            $table->string("utm_term")->nullable();
            $table->string("utm_device")->nullable();
            $table->string("utm_adgroup")->nullable();
            $table->text("utm_content")->nullable();
            $table->text("utm_creative")->nullable();
            $table->text("utm_adset")->nullable();
            $table->text("store_area")->nullable();
            $table->text("ref_code")->nullable();
            $table->text("source_url")->nullable();
            $table->string("center",100)->nullable();
            $table->string("utm_source",100)->nullable();
            $table->string("utm_campaign",100)->nullable();
            $table->enum('crmStatus', ['0', '1'])->default('1');
            $table->enum('mailStatus', ['0', '1'])->default('1');
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
        Schema::dropIfExists('lam_leads');
    }
};
