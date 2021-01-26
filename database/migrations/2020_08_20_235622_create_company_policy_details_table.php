<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyPolicyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_policy_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_policies_id');
            $table->foreign('company_policies_id')->references('id')->on('company_policies')->onDelete('cascade')->onUpdate('cascade');
            $table->text('details');
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
        Schema::dropIfExists('company_policy_details');
    }
}
