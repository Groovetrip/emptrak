<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->char('middle_initial', 1)->nullable();
            $table->string('email')->nullable();
            $table->string('address');
            $table->string('address2')->nullable();
            $table->string('city');
            $table->string('state', 2);
            $table->string('zip', 12);
            $table->string('classification');
            $table->string('payment_method');
            $table->float('salary', 12, 2)->nullable();
            $table->float('hourly_rate', 8, 2)->nullable();
            $table->float('commission_rate', 8, 2)->nullable();
            $table->string('routing_number')->nullable();
            $table->string('account_number')->nullable();
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->date('birth_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
