<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('votes');
            $table->timestamps();
        });
        DB::table('votes')->insert(
          array(
          'votes'=>'0'
          )
    );
      DB::table('votes')->insert(
      array(
      'votes'=>'0'
      )
);
    DB::table('votes')->insert(
  array(
  'votes'=>'2'
  )
);
    DB::table('votes')->insert(
  array(
  'votes'=>'3'
  )
);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votes');
    }
}
