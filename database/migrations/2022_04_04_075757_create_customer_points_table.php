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
        Schema::create('customer_points', function (Blueprint $table) {
            $table->id();
            $table->integer('point_type');
            $table->string('point_name');
            $table->string('point_lat');
            $table->string('point_log');
            $table->string('point_specialty')->nullable();
            $table->string('point_open_time')->nullable();
            $table->string('point_close_time')->nullable();
            $table->string('point_img')->nullable();
            $table->string('point_img_cover')->nullable();
            $table->string('point_phone')->nullable();
            $table->string('point_address')->nullable();
            $table->integer('creator_id');
            $table->integer('approval_id');
            $table->boolean('IsActive');
            $table->boolean('IsApprove');
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
        Schema::dropIfExists('customer_points');
    }
};
