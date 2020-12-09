<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->longText('hash_tags')->nullable();
            $table->longText('sector')->nullable();
            $table->longText('start_date')->nullable();
            $table->longText('end_date')->nullable();
            $table->longText('promo')->nullable();
            $table->longText('display_on')->nullable();
            $table->longText('gender')->nullable();
            $table->longText('age')->nullable();
            $table->longText('country')->nullable();
            $table->longText('city')->nullable();
            $table->longText('interest')->nullable();
            $table->integer('is_show')->default(0);
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
        Schema::dropIfExists('campaigns');
    }
}
