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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();

            $table->string('report_rand_no');
            $table->tinyInteger('reporter_type')->default(0)->comment('0 => personal , 1 => agent_or_association');
            $table->string('report_applicant_identity_or_agent_identity');
            $table->string('report_applicant_name_or_agent_name');
            $table->string('reported_person_name_or_agent_name');
            $table->string('reported_person_identity_or_agent_identity');
            $table->tinyInteger('report_reciever_type')->default(0)->comment('0 => individual , 1 => trade_association');
            $table->string('report_reciever_identity_or_identity_trade_association_no');
            $table->string('trade_association_name_or_consignee_name');
            $table->string('trade_association_phone_or_consignee_phone');
            $table->string('claim_financial_value_digit');
            $table->string('claim_financial_value_written');
            $table->longText('financial_value_description');
            $table->string('attachments')->nullable();
            $table->string('fees');
            
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
        Schema::dropIfExists('reports');
    }
};
