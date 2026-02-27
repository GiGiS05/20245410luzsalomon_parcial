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
        Schema::table('students', function (Blueprint $table) {
            $table->string('full_name')->after('id');
            $table->string('badge')->unique()->after('full_name');
            $table->string('institutional_email')->unique()->after('badge');
            $table->integer('available_permits')->default(3)->after('institutional_email');
            $table->enum('state', ['activa', 'inactiva'])->default('activa')->after('available_permits');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn('full_name');
            $table->dropColumn('badge');
            $table->dropColumn('institutional_email');
            $table->dropColumn('available_permits');
            $table->dropColumn('state');

    });
    }
};
