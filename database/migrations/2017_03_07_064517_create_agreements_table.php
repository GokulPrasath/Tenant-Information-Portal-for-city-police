<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgreementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agreements', function (Blueprint $table) {
            $table->increments('id');
			$table->string('oname');
            $table->string('oaddress');
            $table->integer('omobno');
            $table->string('oemail');
            $table->string('oauthority');
            $table->binary('oidproof');
            $table->integer('oagreementno');
            $table->binary('oagreementdocs');
            $table->string('ostation area');
            $table->string('tname');
            $table->string('taddress');
            $table->integer('tmobno');
            $table->string('temail');
            $table->binary('tpic');
            $table->binary('tidproof');
		    $table->string('tfathername');
			$table->string('tmothername');
            $table->string('tspousename');
			$table->string('tchildname');
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
        Schema::dropIfExists('agreements');
    }
}
