<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LinkedusereventCreateTable extends Migration
{
    	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('linked_user_event', function (Blueprint $table) {
			$table->integer('event_id');
			$table->integer('user_id');
			$table->boolean('paid');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('linked_user_event');
	}
}
