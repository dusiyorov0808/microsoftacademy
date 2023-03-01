<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('login');
            $table->string('password');
            $table->timestamps();
        });

        $data = [
            'id' => 1,
            'login' => 'admin',
            'password' => '$2y$10$SdapgWTqgDCkc5SXY5UHMuIFzynpTJ.gN4zqR8fKBoyn0FnUOVk2u',
        ];

        DB::table('users')->insert($data);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
