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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("status")->default(1);
            $table->unsignedBigInteger("level")->default(1);
            $table->string("first_name", 50);
            $table->string("last_name", 255);
            $table->string("birthday", 10);
            $table->string("contact_number", 15);
            $table->string("email", 100);
            $table->string("password", 500);
            $table->string("profile_picture", 100)->default("padrao.png");
            $table->timestamps();
            $table->softDeletes();


            // Chaves

            $table->foreign("status")->references("id")->on("status");
            $table->foreign("level")->references("id")->on("level_access");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
