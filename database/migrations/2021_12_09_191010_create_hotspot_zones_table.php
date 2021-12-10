<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotspotZonesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotspot_zones', function (Blueprint $table) {
            $table->id('id');
            $table->string('zone_id');
            $table->string('zone_title');
            $table->string('device_brand');
            $table->string('device_mac');
            $table->string('device_serial');
            $table->string('onu_mac');
            $table->string('onu_brand');
            $table->string('card_seller');
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hotspot_zones');
    }
}
