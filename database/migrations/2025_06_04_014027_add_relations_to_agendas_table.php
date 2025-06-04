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
        Schema::table('agendas', function (Blueprint $table) {
            $table->foreignId('cliente_id')->constrained()->after('id');
            $table->foreignId('horario_id')->constrained()->after('cliente_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('agendas', function (Blueprint $table) {
            $table->dropForeign(['cliente_id']);
            $table->dropForeign(['horario_id']);
            $table->dropColumn(['cliente_id', 'horario_id']);
        });
    }
};
