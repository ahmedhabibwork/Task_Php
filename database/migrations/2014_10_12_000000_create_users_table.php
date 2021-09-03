<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
            $table->string('image')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('status')->default(1);
            $table->string('phone_number')->nullable();
            $table->string('address')->nullable();
            $table->integer('role_id')->default(1);
            $table->rememberToken();
            $table->timestamps();
        });
        $user = new \App\Models\User();
        $user->name = 'Admin';
        $user->email = 'admin@dataninfo.com';
        $user->password = Hash::make('123456');
        $user->role_id = 1;
        $user->save();
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
