<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('meow_points', function (Blueprint $table) {
            $table->id();
            $table->morphs('owner');
            $table->nullableMorphs('pointable');
            $table->integer('count');
            $table->enum('type', ['add', 'sub']);
            $table->timestamps();
        });
    }
};
