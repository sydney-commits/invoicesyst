<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->enum('role', ['admin', 'client', 'superadmin'])->default('client');

            $table->string('company_name')->nullable();
            $table->string('contact_person')->nullable();

            // Billing Address
            $table->string('billing_street')->nullable();
            $table->string('billing_city')->nullable();

            $table->string('billing_postal_code')->nullable();
            $table->string('billing_country')->nullable();

            $table->string('phone_number')->nullable();;
            $table->string('alternate_phone')->nullable();


            $table->enum('payment_method',['M-Pesa','Cash','Credit Card'])->default('Cash');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
