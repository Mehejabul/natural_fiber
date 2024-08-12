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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->biginteger('unit_id');
            $table->biginteger('catalogue_id');
            $table->biginteger('category_id');
            $table->biginteger('brand_id');
            $table->string('title');
            $table->string('code')->unique();
            $table->string('weight')->nullable();
            $table->enum('has_stock',['Yes','No'])->default('Yes');
            $table->enum('discount_type',['Fixed','Percentage','Not_Apply'])->default('Not_Apply');
            $table->double('discount_amount')->default(0);
            $table->double('cost');
            $table->double('mrp');
            $table->integer('alert_stock')->default(0);
            $table->string('color')->nullable();
            $table->enum('view_section',['New_Arrival','Best_Seller','Flash_Sell','Feature_Products','Just_For_You','Most_Popular','On_Sale','Speacial_Offer','Special_Products','Trending_Products'])->default('New_Arrival');
            $table->biginteger('type')->nullable();
            $table->text('tags')->nullable();
            $table->enum('status',['Active','Inactive'])->default('Active');
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->string('size_guide')->nullable();
            $table->timestamps();
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
