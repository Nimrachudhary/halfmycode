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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('coupon_title', );
            $table->string('coupon_code')->nullable();
            $table->string('Affilate_Link')->nullable();
            $table->string('slug', )->nullable();
            $table->longText('description')->nullable();
            $table->string('Cupon_type')->nullable();
            $table->boolean('status')->default(0);
            $table->string('image')->nullable();
            $table->integer('catgory_id')->nullable();
            $table->integer('store_id')->nullable();
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
        Schema::dropIfExists('coupons');
    }
};
