<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function(Blueprint $table) {
            $table->date('date_of_birth')->after('name')->nullable();
            $table->string('api_key', 100)->after('remember_token')->nullable();
        });
    }

    public function down(): void
    {

    }
};
