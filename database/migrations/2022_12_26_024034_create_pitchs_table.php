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
        Schema::create('pitchs', function (Blueprint $table) {
            $table->increments("id")->from(1000000);
            $table-> string("namepitch",100)->nullable();
            $table-> string("address",100)->nullable();
            $table-> string("phonenumber",20)->nullable();
            $table-> LONGTEXT("image")->nullable();
            $table-> string("price_hour",100)->nullable();
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
        Schema::dropIfExists('pitchs');
    }
};
