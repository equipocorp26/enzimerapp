<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('university_id')->nullable()->constrained('universities','id')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('career_id')->nullable()->constrained('careers','id')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('plan_id')->nullable()->constrained('plans','id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('email')->unique();
            $table->integer('status')->default(2);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
