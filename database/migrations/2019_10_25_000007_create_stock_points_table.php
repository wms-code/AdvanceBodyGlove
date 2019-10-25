<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockPointsTable extends Migration
{
    public function up()
    {
        Schema::create('stock_points', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->string('rack')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
