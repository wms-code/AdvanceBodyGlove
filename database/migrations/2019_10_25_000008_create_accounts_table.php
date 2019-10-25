<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            
            $table->increments('id');

            $table->string('accounts_groups')->nullable();

            $table->integer('accounts_category')->nullable();

            $table->integer('accounts_report')->nullable();

            $table->string('name')->nullable();

            $table->string('short_name')->nullable();

            $table->string('contact_person')->nullable();

            $table->longText('address')->nullable();

            $table->longText('address_1')->nullable();

            $table->longText('address_2')->nullable();

            $table->longText('delivery_address')->nullable();

            $table->string('phone')->nullable();

            $table->string('mobile')->nullable();

            $table->string('tngst')->nullable();

            $table->string('cst')->nullable();

            $table->string('gst_no')->nullable();

            $table->integer('vat_no')->nullable();

            $table->decimal('opening_balance', 15, 2)->nullable();

            $table->decimal('closing_balance', 15, 2)->nullable();

            $table->decimal('total_debits', 15, 2)->nullable();

            $table->decimal('total_credits', 15, 2)->nullable();

            $table->decimal('credit_limit', 15, 2)->nullable();

            $table->string('opening_balance_type')->nullable();

            $table->string('remarks')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
