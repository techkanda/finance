<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cus_id');      
            $table->string('cus_name');     
            $table->bigInteger('phone');        
            $table->string('address');      
            $table->integer('area_id');     
            $table->string('proof');        
            $table->string('proof_id');     
            $table->string('proof_doc');        
            $table->string('guarantor_name');       
            $table->string('guarantor_address');        
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
        Schema::dropIfExists('customers');
    }
}
