<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableStatisticsIdentificators extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistics_identificators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('identificator')->comment('UUID identificator');
            $table->bigInteger('remote_addr')->comment('IP who requested identificator.');
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
        Schema::dropIfExists('statistics_identificators');
    }
}
