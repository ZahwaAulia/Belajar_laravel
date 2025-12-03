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
        if (Schema::hasTable('multiuploads')) {
            Schema::table('multiuploads', function (Blueprint $table) {
                if (!Schema::hasColumn('multiuploads', 'id')) {
                    $table->id()->first();
                }
            });
        }
        // Jika tabel tidak ada → migration dilewati → TIDAK ERROR
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('multiuploads')) {
            Schema::table('multiuploads', function (Blueprint $table) {
                // Hapus id jika mau, tapi bisa dikosongkan
            });
        }
    }
};
