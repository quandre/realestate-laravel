<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('listings', function (Blueprint $table) {
          $table->decimal('price');
          $table->boolean('published');
          $table->string('property_type');
          $table->string('listing_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('listings', function (Blueprint $table) {
          $table->dropColumn('price');
          $table->dropColumn('published');
          $table->dropColumn('property_type');
          $table->dropColumn('listing_type');
        });
    }
};
