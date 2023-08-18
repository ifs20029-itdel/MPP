<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agency_service_id')->constrained('agency_services')->onDelete('cascade');
            $table->string('name', 100);
            $table->string('whatsapp', 100);
            $table->date('date')->nullable();
            $table->string('queue_number', 100)->nullable();
            $table->enum('status', ['0', '1', '2'])->default('0')->comment('0: pending, 1: process, 2: done');
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
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
        Schema::dropIfExists('bookings');
    }
}
