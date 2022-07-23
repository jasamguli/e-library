<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->foreignId('size_id')->constrained('sizes');
        });
    }

    public function down()
    {
        Schema::table('books', function($table) {
            $table->dropColumn('size_id');
        });
    }
};
