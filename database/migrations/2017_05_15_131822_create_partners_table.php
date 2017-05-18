<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('partner_id');      
            $table->string('partner_name');     
            $table->bigInteger('phone');        
            $table->string('address');      
            $table->string('area');     
            $table->string('proof_type');       
            $table->string('proof_id');     
            $table->string('proof_doc');        
            $table->string('guarantor_name');       
            $table->string('guarantor_address');        
            $table->string('Partner_Amount');       
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
        Schema::dropIfExists('partners');
    }
}
