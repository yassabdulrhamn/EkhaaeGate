<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('empNationalID')->unique();
            $table->string('email')->unique();
            $table->string('empFirstname');
            $table->string('empSecName');
            $table->string('empThirdName');
            $table->integer('empMobile');
            $table->enum('empGender', ['Male', 'Female']);
            $table->string('empJobTitle');
            $table->string('empPicture')->nullable();
            $table->integer('empBranch');
            $table->integer('empRoles');
            $table->string('empPassword');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
