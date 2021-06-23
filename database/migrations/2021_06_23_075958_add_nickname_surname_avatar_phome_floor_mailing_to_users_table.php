<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNicknameSurnameAvatarPhomeFloorMailingToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nickname');
            $table->string('surname');
            $table->string('avatar')->nullable();
            $table->string('phone');
            $table->boolean('sex');
            $table->boolean('mailing')->default(0);

            $table->dropColumn('password');
            $table->dropColumn('email');
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
            $table->dropColumn('nickname');
            $table->dropColumn('surname');
            $table->dropColumn('avatar');
            $table->dropColumn('phone');
            $table->dropColumn('sex');
            $table->dropColumn('mailing');
        });
    }
}
