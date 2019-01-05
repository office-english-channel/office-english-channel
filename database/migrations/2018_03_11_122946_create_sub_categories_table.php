<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cover_id')->unsigned()->nullable()->index()->comment('STORE ID FROM MEDIAS');
            $table->integer('category_id')->unsigned()->nullable()->index()->comment('STORE ID FROM CATEGORIES');
            $table->string('sub_category_name', 145)->nullable()->default(null);
            $table->string('slug', 145)->nullable()->default(null);
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
        Schema::dropIfExists('sub_categories');
    }
}
