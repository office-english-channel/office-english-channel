<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned()->nullable()->index()->comment('STORE ID FROM CATEGORIES');
            $table->integer('sub_category_id')->unsigned()->nullable()->index()->comment('STORE ID FROM SUB-CATEGORIES');
            $table->integer('vendor_id')->unsigned()->nullable()->index()->comment('STORE ID FROM VENDORS');
            $table->string('first_name', 90)->nullable()->default(null);
            $table->string('last_name', 90)->nullable()->default(null);
            $table->string('email', 145)->nullable()->default(null);
            $table->string('mobile_no', 25)->nullable()->default(null);
            $table->string('phone_no', 25)->nullable()->default(null);
            $table->string('address_1', 145)->nullable()->default(null);
            $table->string('address_2', 145)->nullable()->default(null);
            $table->string('city_name', 90)->nullable()->default(null);
            $table->string('zip_code', 25)->nullable()->default(null);
            $table->string('state_name', 145)->nullable()->default(null);
            $table->string('comments', 512)->nullable()->default(null);
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
        Schema::dropIfExists('service_requests');
    }
}
