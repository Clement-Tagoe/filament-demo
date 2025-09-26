<?php

use App\Models\Shop\Customer;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('shop_reviews');
        
        Schema::create('comments', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Customer::class)->nullable()->constrained('shop_customers')->cascadeOnDelete();
            $table->morphs('commentable');
            $table->text('title')->nullable();
            $table->text('content')->nullable();
            $table->boolean('is_visible')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
