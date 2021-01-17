<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('codestudy');
            $table->string('student_number')->unique();
            $table->string('research_type');
            $table->string('title');
            $table->string('first_supervisor');
            $table->string('second_supervisor');
            $table->string('Aim');
            $table->string('background');
            $table->string('originality');
            $table->string('schedule');
            $table->string('method');
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
        Schema::dropIfExists('members');
    }
}
