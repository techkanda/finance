<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubLedgersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_ledgers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ledger_no');       
            $table->string('username');        
            $table->string('ledger_name');     
            $table->string('ledger_group');        
            $table->string('ledger_access');            
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
        Schema::dropIfExists('sub_ledgers');
    }
}
