<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->foreignId('category_id')->constrained('categories');
        });
    }

    public function down()
    {
        Schema::table('books', function($table) {
            $table->dropColumn('category_id');
        });
    }
};
