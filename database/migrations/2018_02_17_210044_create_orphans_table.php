<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrphansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orphans', function (Blueprint $table) {
          $table->increments('id');

          $table->integer('orpNationalID')->unique();
          $table->integer('orpMinistryNo')->unique();
          $table->integer('orpEkhaaNo')->unique();
          $table->string('orpEmail')->unique();
          $table->string('orpFirstname');
          $table->string('orpSecName');
          $table->string('orpThirdName');
          $table->string('orpForthName');
          $table->integer('orpMobile');
          $table->enum('orpGender', ['Male', 'Female']);

          $table->integer('orpBranch');
          $table->integer('orpHome')->nullable();

          $table->integer('orpReferralNo');
          $table->integer('orpMinistryStatus');
          $table->integer('oprEkhaaStatus');
          $table->integer('orpType');


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
        Schema::dropIfExists('orphans');
    }
}
