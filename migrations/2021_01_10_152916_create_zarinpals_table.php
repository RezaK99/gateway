<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZarinpalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zarinpals', function (Blueprint $table) {
            $table->id();
            $table->string('merchant_id');
            $table->enum('type', ['zarin-gate', 'normal'])->default('zarin-gate');
            $table->string('callback_url')->default('/');
            $table->enum('server', ['germany ', 'iran', 'test'])->default('germany');
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->text('description');
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
        Schema::dropIfExists('zarinpals');
    }
}
