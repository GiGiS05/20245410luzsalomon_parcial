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
        Schema::table('leave_requests', function (Blueprint $table) {
            $table->date('date_solicited')->after('id');
            $table->string('motive')->after('date_solicited');
            $table->enum('status', ['pendiente', 'aprobada', 'cancelada'])->default('pendiente')->after('motive');
            $table->unsignedBigInteger('student_id')->after('status');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('leave_requests', function (Blueprint $table) {
            $table->dropColumn('date_solicited');
            $table->dropColumn('motive');
            $table->dropColumn('status');
            $table->dropColumn('student_id');
            $table->dropForeign('student_id');
        });
    }
};
