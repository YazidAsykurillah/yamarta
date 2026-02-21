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
        Schema::create('portfolio_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('portfolio_id')->constrained('portfolios')->cascadeOnDelete();
            $table->string('image');
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });

        // Migrate existing images
        $portfolios = \Illuminate\Support\Facades\DB::table('portfolios')->whereNotNull('image')->get();
        foreach ($portfolios as $portfolio) {
            \Illuminate\Support\Facades\DB::table('portfolio_images')->insert([
                'portfolio_id' => $portfolio->id,
                'image' => $portfolio->image,
                'sort_order' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Drop the existing column
        Schema::table('portfolios', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->string('image')->nullable();
        });

        // Try to restore the first image
        $images = \Illuminate\Support\Facades\DB::table('portfolio_images')->get();
        foreach ($images->groupBy('portfolio_id') as $portfolioId => $group) {
            \Illuminate\Support\Facades\DB::table('portfolios')
                ->where('id', $portfolioId)
                ->update(['image' => $group->first()->image]);
        }

        Schema::dropIfExists('portfolio_images');
    }
};
