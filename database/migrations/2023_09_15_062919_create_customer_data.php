<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customer_data', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('name',60);
            $table->string('contact',20);
            $table->string('email',100);
            $table->enum('gender',['Male','Female','Other'])->nullable();
            $table->text('address');
            $table->boolean('status')->default(1);
            $table->date('dob');
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_data');
    }
};
