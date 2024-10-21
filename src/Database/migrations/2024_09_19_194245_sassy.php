<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(\Stupidly\Sassy\App\Models\config('sassy.tables.Page'), function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create(\Stupidly\Sassy\App\Models\config('sassy.tables.Post'), function (Blueprint $table) {
            $table->id();

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create(\Stupidly\Sassy\App\Models\config('sassy.tables.Section'), function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('block');
            $table->foreignUuid('page_id')->constrained();
            $table->text('markdown')->nullable();
            $table->json('json')->nullable();
            $table->integer('posts')->default(0);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
