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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('CNIC', 15)->nullable();
            $table->string('phone', 11)->nullable();
            $table->enum('gender', ['Male', 'Female', 'Other'])->default('Male');
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->unsignedSmallInteger('age')->nullable();
            $table->boolean('status')->default(1);
        });
        // Schema::table('users', function (Blueprint $table) {
        //     // Drop the "city" column
        //     $table->dropColumn('city');

        //     // Rename the "status" column to "is_active"
        //     $table->renameColumn('status', 'is_active');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        #Schema::dropIfExists('users');
        // Schema::table('users', function (Blueprint $table) {
        //     // Reverse the changes in the "up" method
        //     $table->string('city')->nullable();
        //     $table->renameColumn('is_active', 'status');
        // });
        // Schema::table('users', function (Blueprint $table) {
        //     // Reverse the changes in the "up" method
        //     $table->string('city')->nullable();
        //     $table->renameColumn('is_active', 'status');
        // });
    }
};
