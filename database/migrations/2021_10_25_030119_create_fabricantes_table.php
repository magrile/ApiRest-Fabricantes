<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFabricantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('fabricantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('marca');
            $table->string('plantas');
            $table->string('paisesDistribuidos');
            $table->float('beneficioBruto');
            $table->float('beneficoNeto');
            $table->float('deuda');
            $table->string('cif', 9);

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
        Schema::dropIfExists('fabricantes');
    }
}
