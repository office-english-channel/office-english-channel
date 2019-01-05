<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkInServiceRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_requests', function (Blueprint $table) {
            $table->foreign('vendor_id')->references('id')->on('vendors')->onUpdate('CASCADE')->onDelete('NO ACTION');
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('CASCADE')->onDelete('NO ACTION');
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')->onUpdate('CASCADE')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_requests', function (Blueprint $table) {
            $table->dropForeign('service_requests_vendor_id_foreign');
            $table->dropForeign('service_requests_category_id_foreign');
            $table->dropForeign('service_requests_sub_category_id_foreign');
        });
    }
}
