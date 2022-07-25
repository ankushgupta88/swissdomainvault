<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserTypeFieldsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('mobile')->after('remember_token')->nullable();
            $table->string('avatar')->default('default_user.png')->after('mobile')->nullable();
            $table->enum('user_type', ['Admin', 'Customer', 'Subscriber','Guest'])->default('Customer')->after('avatar')->nullable();
            $table->enum('user_status', ['Pending', 'Suspend', 'Active'])->default('Active')->after('user_type')->nullable();
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
