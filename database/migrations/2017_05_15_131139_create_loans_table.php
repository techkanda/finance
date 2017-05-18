<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_no');
            $table->integer('cus_id');
            $table->date('loan_date');
            $table->string('mode_id');
            $table->float('loan_amount', 10,2);
            $table->integer('intrest_deuction');
            $table->bigInteger('netamount');
            $table->bigInteger('due_amount');
            $table->date('due_date');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('rate_intrest');
            $table->string('loan_period');
            $table->string('loan_security');
            $table->string('loan_security_details');
            $table->string('partner_ref');
            $table->string('created_by');
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
        Schema::dropIfExists('loans');
    }
}
