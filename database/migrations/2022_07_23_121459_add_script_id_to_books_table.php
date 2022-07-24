<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->foreignId('script_id')->constrained('scripts')->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::table('books', function($table) {
            $table->dropColumn('script_id');
        });
    }
};
