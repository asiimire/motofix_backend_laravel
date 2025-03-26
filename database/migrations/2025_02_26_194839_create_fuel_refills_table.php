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
        Schema::create('fuel_refills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained()->onDelete('cascade')->comment('Reference to the customer placing the order');
            $table->foreignId('fuel_type_id')->constrained()->onDelete('cascade')->comment('Reference to the fuel type for pricing and tracking');
            $table->decimal('no_of_litres', 8, 2)->comment('Number of litres ordered');
            $table->decimal('total_price', 8, 2)->comment('Total price calculated based on fuel type price per litre');
            $table->string('delivery_location')->comment('Location where fuel is to be delivered');
            $table->string('delivery_status')->default('pending')->comment('Status of the delivery (e.g., pending, delivered)');
            $table->decimal('delivery_fee', 8, 2)->comment('Fee charged for delivery');
            $table->timestamps();

            // Indexes
            $table->index('customer_id');
            $table->index('fuel_type_id');
        });
    }

    /**
     * Reverse the migrations
     */
    public function down(): void
    {
        Schema::dropIfExists('fuel_refills');
    }
};
