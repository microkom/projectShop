<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProviderOrderLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_order_lines', function (Blueprint $table) {
            $table->increments('id');
            $table->float('price',5)->nullable();
            $table->integer('quantity')->nullable();
            $table->float('discount')->nullable();
            $table->float('taxApplied')->nullable();            
            $table->timestamps();
        });
    }

    /*
`providerorderid` int NOT NULL,  /*PENDIENTE DE CAMBIAR EL NOMBRE AL NOMBRE DE LA CLAVE AJENA
	`productid` int NOT NULL,
	`price` float(5,2) DEFAULT NULL,
	`quantity` int(11) DEFAULT NULL,
	`discount` float(10,2) DEFAULT NULL,
	`taxApplied` float(5,2) DEFAULT NULL, 
     *      */
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provider_order_lines');
    }
}
