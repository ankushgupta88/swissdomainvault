<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('campaign_id')->nullable();
            $table->string('upsell_id')->nullable();
            $table->string('offer_id')->nullable();
            $table->string('invoiced_to')->nullable();
            $table->string('pay_to')->nullable();
            $table->string('total_sub_amount')->nullable();
            $table->string('total_amount')->nullable();
            $table->string('currency')->nullable();
            $table->enum('status', ['Paid', 'Unpaid', 'Cancelled', 'Refunded'])->default('Unpaid');
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
        Schema::dropIfExists('invoices');
    }
}
