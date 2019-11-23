<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBridgeLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bridge_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('remote_addr')->comment('IP address from request');
            $table->string('http_useragent')->comment('User agent');
            $table->string('request_uri')->comment('Request url');
            $table->string('request_method')->comment('Request method');
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
        Schema::dropIfExists('bridge_statistics');
    }
}
