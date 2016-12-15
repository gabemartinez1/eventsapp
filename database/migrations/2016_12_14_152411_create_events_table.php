<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->string('setup');
            $table->string('event-start');
            $table->string('event-end');
            $table->string('clean-up');
            $table->string('entertainment-end');
            $table->text('spaces');
            $table->smallInteger('guests');
            $table->string('event-type');
            $table->text('event-contact');
            $table->string('entrances');
            $table->text('ops-needs');
            $table->text('security-needs');
            $table->string('vip');
            $table->text('parking');
            $table->string('admission');
            $table->string('billing');
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
        Schema::dropIfExists('events');
    }
}
