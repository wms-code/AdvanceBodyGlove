<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts_groups', function (Blueprint $table) {
            
            $table->increments('id');

            $table->string('name', 100)->unique();

            $table->string('root', 100);

            $table->double('opening_balance', 10, 2)->nullable();

            $table->double('closing_balance', 10, 2)->nullable();

            $table->double('total_debits', 10, 2)->nullable();

            $table->double('total_credits', 10, 2)->nullable();

            $table->integer('sort_by')->unsigned()->default(0);

            $table->tinyInteger('status')->default(1);

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
        Schema::dropIfExists('accounts_groups');
    }
}
