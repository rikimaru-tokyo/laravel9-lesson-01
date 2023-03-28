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
        Schema::create('m_ranks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rank_name');
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->softDeletes();
        });

        Schema::create('m_members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('rank_id');
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('created_at')->useCurrent()->nullable();
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
        Schema::dropIfExists('m_ranks');
        Schema::dropIfExists('m_members');
    }
};
