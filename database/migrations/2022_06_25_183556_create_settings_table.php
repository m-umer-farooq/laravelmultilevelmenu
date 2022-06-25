<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->string('mail_mailer')->nullable(true);
            $table->string('mail_host')->nullable(true);
            $table->string('mail_port')->nullable(true);
            $table->string('mail_username')->nullable(true);
            $table->string('mail_password')->nullable(true);
            $table->string('mail_encryption')->nullable(true);
            $table->string('mail_from_address')->nullable(true);
            $table->string('mail_from_name')->nullable(true);
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
        Schema::dropIfExists('settings');
    }
}
