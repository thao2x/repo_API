<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('userId');
            $table->string('title');
            $table->text('metaTitle');
            $table->string('slug');
            $table->tinyText('summary');
            $table->smallInteger('type');
            $table->string('sku');
            $table->float('price');
            $table->float('discount');
            $table->smallInteger('quantity');
            $table->tinyInteger('shop');
            $table->timestamp('publishedAt', $precision = 0)->nullable();
            $table->timestamp('startsAt', $precision = 0)->nullable();
            $table->timestamp('endsAt', $precision = 0)->nullable();
            $table->longText('content');
            $table->timestamps();

            $table->foreign('userId')->references('id')->constrained()->onUpdate('cascade')->onDelete('cascade')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};