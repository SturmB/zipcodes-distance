<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("zipcodes", function (Blueprint $table) {
            $table->id();
            $table->string("zip", 10);
            $table->decimal("latitude", 9, 6);
            $table->decimal("longitude", 9, 6);
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
        Schema::dropIfExists("zipcodes");
    }
};
