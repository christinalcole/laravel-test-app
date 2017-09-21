<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLinkColumnsToPeople extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('people', function ($table) {
          $table->text('Link5');
          $table->text('Link6');
          $table->text('Link7');
          $table->text('Link8');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('people', function ($table) {
          $table->dropColumn('Link5');
          $table->dropColumn('Link6');
          $table->dropColumn('Link7');
          $table->dropColumn('Link8');
        });
    }
}
