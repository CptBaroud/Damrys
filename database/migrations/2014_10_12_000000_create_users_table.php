<?php

use App\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        $user = new User();
        $user->name = "Mmouky";
        $user->email = "mmouky@hotmail.com";
        $user->email_verified_at = time();
        $user->password = Hash::make("123456789");
        $user->save();

        $user1 = new User();
        $user1->name = "Admin";
        $user1->email = "damrys@damrys.fr";
        $user1->email_verified_at = time();
        $user1->password = Hash::make("Damrys@44350");
        $user1->save();
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
