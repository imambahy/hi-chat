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
        Schema::create('chat_messages', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('from_id');
            $table->uuidMorphs('to'); //ini akan generate to_type dan to_id menggunakan eloquent laravel polimorphic
            $table->mediumText('body')->nullable();
            $table->text('seen_in_id')->nullable();
            $table->text('deleted_in_id')->nullable();
            $table->bigInteger('sort_id');
            $table->timestamps();

            // relasi to table users
            // jadi kalo user mau update, cascade(bolehkan). kalo mau hapus, jangan asal hapus (notif will show up)
            $table->foreign('from_id')
                  ->references('id')
                  ->on('users')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chat_messages');
    }
};
