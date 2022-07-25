<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtraFieldsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->after('user_status')->nullable();
            $table->string('last_name')->after('first_name')->nullable();
            $table->string('companyname')->after('last_name')->nullable();
            $table->string('address')->after('companyname')->nullable();
            $table->string('address_two')->after('address')->nullable();
            $table->string('city')->after('address_two')->nullable();
            $table->string('state')->after('city')->nullable();
            $table->string('postcode')->after('state')->nullable();
            $table->string('country')->after('postcode')->nullable();
            $table->string('currency')->after('country')->nullable();
            $table->string('mailing_list')->after('currency')->nullable();
            $table->string('term_condition')->after('mailing_list')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
