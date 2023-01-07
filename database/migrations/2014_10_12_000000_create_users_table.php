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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('name', 50)->nullable();
            $table->string('username', 100)->nullable()->unique();
            $table->string('phone', 20)->nullable()->unique();
            $table->string('email', 100)->nullable()->unique();
            $table->dateTime('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->dateTime('password_changed_at')->nullable();
            $table->dateTime('last_login_at')->nullable();
            $table->string('last_login_ip', 100)->nullable();
            $table->boolean('to_be_logged_out')->default(false);

            $table->rememberToken();

            $table->dateTime('created_at')->nullable();
            $table->foreignId('created_by_id')
                ->nullable()
                ->references('id')
                ->on('user')
                ->onUpdate('CASCADE')
                ->onDelete('RESTRICT');

            $table->dateTime('updated_at')->nullable();
            $table->foreignId('updated_by_id')
                ->nullable()
                ->references('id')
                ->on('user')
                ->onUpdate('CASCADE')
                ->onDelete('RESTRICT');

            $table->dateTime('deleted_at')->nullable();
            $table->foreignId('deleted_by_id')
                ->nullable()
                ->references('id')
                ->on('user')
                ->onUpdate('CASCADE')
                ->onDelete('RESTRICT');

            $table->boolean('is_active')->default(true);
            $table->dateTime('activated_at')->nullable();
            $table->foreignId('activated_by_id')
                ->nullable()
                ->references('id')
                ->on('user')
                ->onUpdate('CASCADE')
                ->onDelete('RESTRICT');

            $table->dateTime('deactivated_at')->nullable();
            $table->foreignId('deactivated_by_id')
                ->nullable()
                ->references('id')
                ->on('user')
                ->onUpdate('CASCADE')
                ->onDelete('RESTRICT');

            $table->dateTime('active_started_at')->nullable();
            $table->dateTime('active_ended_at')->nullable();
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
