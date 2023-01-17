<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
//use Tpetry\PostgresqlEnhanced\Schema\Blueprint;
//use Tpetry\PostgresqlEnhanced\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigInteger("id");
            $table->string('first_name', 50)->default('Anonymous');
            $table->string('last_name', 50)->default('Anonymous');
            $table->string('preferred_name', 50)->nullable();
            $table->string('email', 255)->unique('AK_people_email');
            $table->text('phones')->nullable();
            $table->timestamps();
        });
        DB::statement('ALTER TABLE people ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY');
        DB::statement('ALTER TABLE people ADD PRIMARY KEY(id)');
        DB::statement('ALTER TABLE people ALTER COLUMN phones SET DATA TYPE text[] USING phones::text[]');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
};
