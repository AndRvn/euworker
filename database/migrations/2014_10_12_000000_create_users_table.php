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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique()->nullable();
            $table->enum('type', \App\User::TYPES)->nullable();
            $table->string('avatar')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('verify_token')->nullable()->unique();
            $table->enum('status', \App\User::STATUSES)->default(\App\User::STATUS_ACTIVE);
            $table->string('password');
            $table->boolean('is_company')->nullable();
            $table->json('company_name')->nullable();
            $table->unsignedBigInteger('view_count')->nullable();
            $table->json('social_link')->nullable();
            $table->boolean('is_hidden')->nullable();
            $table->softDeletes();
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
