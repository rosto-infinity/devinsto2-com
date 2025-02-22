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
        Schema::create('customers', function (Blueprint $table) {
            $table->string('profile_type')->after('remember_token')->nullable();
            $table->unsignedBigInteger('profile_id')->after('profile_type')->nullable();
            $table->timestamp('deleted_at')->nullable()->after('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->dropColumn('profile_type');
            $table->dropColumn('profile_id');
            $table->dropColumn('deleted_at');
        });
        Schema::dropIfExists('customers');
    }
};