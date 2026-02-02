<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Permissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->integer('role');
            $table->string('dashboard')->default(1);
            $table->string('user')->default(1);
            $table->enum('status',['active', 'disable'])->default('active');
            $table->integer('created_by')->default('0');
            $table->integer('updated_by')->default('0');
            $table->integer('deleted_by')->default('0');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions');
    }
}
