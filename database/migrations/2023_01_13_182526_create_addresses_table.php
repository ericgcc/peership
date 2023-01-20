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
        Schema::create('addresses', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->text('line_1');
            $table->text('line_2')->nullable();
            $table->string('city', 100);
            $table->string('country', 2)->index('FK_COUNTRIES-ADDRESSES-country');
            $table->string('region', 100);
            $table->string('zip', 16);
            $table->timestamps();

            $table->foreign('country', 'FK_COUNTRIES-ADDRESSES-country')->references('id')
                ->on('countries')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
};
