<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('code', 6)->unique();
            $table->string('name');
            $table->integer('age');
            $table->char('gender');
            $table->string('email');
            $table->string('address');
            $table->string('phone');
            $table->foreignId('paid_by')->nullable()->constrained('users');
            $table->foreignId('get_merchant_by')->nullable()->constrained('users');
            $table->dateTime('get_merchant_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
}
