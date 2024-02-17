<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\NullableType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('campain', function (Blueprint $table) {
            $table->id();
            $table->string('name',40)->unique();
            $table->text('description')->nullable();
            $table->string('geometry-location')->nullable();
            $table->date('start-date')->nullable();
            $table->date('finish-date')->nullable();
            $table->string('poster-slug')->nullable();
            $table->string('pdf-slug')->nullable();
            $table->string('leader-firstname',40)->comment('leader firstname of this campain');
            $table->string('leader-lastname',40)->comment('leader lastname of this campain');
            $table->string('leader-phone');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campain');
    }
};
