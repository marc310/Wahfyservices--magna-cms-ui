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
        Schema::table('users', function (Blueprint $table) {
            $table->string('Ban_Status')->nullable();
            $table->string('agents_management_privillage')->nullable();
            $table->string('users_management_privillage')->nullable();
            $table->string('reports_management_privillage')->nullable();
            $table->string('payments_management_privillage')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['Ban_Status','agents_management_privillage','users_management_privillage','reports_management_privillage','payments_management_privillage']);
        });
    }
};
