<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyPolicyFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_policy_features', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('p_features_id');
            $table->foreign('p_features_id')->references('id')->on('p_features')->onDelete('cascade')->onUpdate('cascade');
            $table->string('f_details');
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
        Schema::dropIfExists('company_policy_features');
    }
}
