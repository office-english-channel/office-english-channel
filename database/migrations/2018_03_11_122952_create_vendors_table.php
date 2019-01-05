<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cover_id')->unsigned()->nullable()->index()->comment('STORE ID FROM MEDIAS');
            $table->integer('category_id')->unsigned()->nullable()->index()->comment('STORE ID FROM CATEGORIES');
            $table->integer('sub_category_id')->unsigned()->nullable()->index()->comment('STORE ID FROM SUB-CATEGORIES');
            $table->string('vendor_name', 145)->nullable()->default(null);
            $table->string('slug', 145)->nullable()->default(null);
            $table->string('address_1', 145)->nullable()->default(null);
            $table->string('address_2', 145)->nullable()->default(null);
            $table->string('city_name', 90)->nullable()->default(null);
            $table->string('zip_code', 25)->nullable()->default(null);
            $table->string('state_name', 145)->nullable()->default(null);
            $table->string('email', 145)->nullable()->default(null);
            $table->string('mobile_no', 25)->nullable()->default(null);
            $table->string('phone_no', 25)->nullable()->default(null);
            $table->string('summary', 512)->nullable()->default(null);
            $table->smallInteger('status')->nullable()->default('1')->comment('1-ACTIVE,0-INACTIVE');
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
        Schema::dropIfExists('vendors');
    }
}
