<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->id();
            $table->string('domain_name')->nullable();
            $table->string('domain_price')->nullable();
            $table->string('service_name')->nullable();
            $table->string('service_category')->nullable();
            $table->string('domain_register_type')->nullable();
            $table->string('domain_quantity')->nullable();
            $table->string('dnsmanagement')->nullable();
            $table->string('idprotection')->nullable();
            $table->string('emailforwarding')->nullable();
            $table->bigInteger('invoice_id')->unsigned();
            $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade');
            $table->string('enum_order_id')->nullable(); 
            $table->string('enum_total_charged')->nullable(); 
            $table->string('enum_registry_create_date')->nullable(); 
            $table->string('enum_registry_exp_date')->nullable(); 
            $table->string('enum_order_status')->nullable(); 
            $table->string('enum_tracking_key')->nullable(); 
            $table->string('enum_server')->nullable();  
            $table->string('reg_time_perod')->nullable(); 
            $table->string('invoice_type')->nullable(); 
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
        Schema::dropIfExists('invoice_items');
    }
}
