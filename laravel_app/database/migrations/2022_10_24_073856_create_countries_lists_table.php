<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries_lists', function (Blueprint $table) {
            $table->increments('countries_list_id');
            $table->string('countries_list_slug');
            $table->string('countries_list_name');
            $table->string('countries_list_code');
            $table->timestamps('countries_list_created');          
            $table->timestamps('countries_list_updated');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries_lists');
    }
}
