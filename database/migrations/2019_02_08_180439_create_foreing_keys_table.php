<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeingKeysTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('subcategories', function (Blueprint $table) {
            $table->foreign('categoryid')->references('id')->on('categories');
        });
        
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('userid')->references('id')->on('users');
        });
        
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('categoryid')->references('id')->on('categories');
            $table->foreign('subcategoryid')->references('id')->on('subcategories');
            $table->foreign('providerid')->references('id')->on('providers');
        });
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('subcategory');
    }

}
