<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('service_type');
            $table->string('card_type')->comment('active,upcoming,end,SandBox');
            $table->mediumText('description');
            $table->mediumText('importand_notice')->nullable();
            $table->string('logo');
            $table->string('banner_image');
            $table->dateTime('sale_start');
            $table->dateTime('sale_end');
            $table->float('price');
            $table->float('previous_price');
            $table->float('diffrent_parcent');
            $table->string('website_link')->nullable();
            $table->string('whitepaper')->nullable();

            $table->string('ticker')->nullable();
            $table->string('token_type');
            $table->string('ico_token_price');
            $table->string('usd_fund_goal');
            $table->string('total_tokens')->nullable();
            $table->string('role_of_token');
            $table->string('heart');

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
        Schema::dropIfExists('cards');
    }
}
