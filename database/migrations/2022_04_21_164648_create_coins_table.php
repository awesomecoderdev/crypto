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
        Schema::create('coins', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cmcid')->nullable();
            $table->string('name')->nullable();
            $table->string('symbol')->nullable();
            $table->string('slug')->unique();
            $table->string('num_market_pairs')->nullable();
            $table->string('date_added')->nullable();
            $table->text('tags')->nullable();
            $table->string('max_supply')->nullable();
            $table->string('circulating_supply')->nullable();
            $table->string('total_supply')->nullable();
            $table->text('platform')->nullable();
            $table->integer('cmc_rank')->nullable();
            $table->integer('rank')->nullable();
            $table->string('self_reported_market_cap')->nullable();
            $table->string('last_updated')->nullable();
            $table->text('quote')->nullable();
            $table->boolean("status")->default(true);

            // extra data
            $table->timestamp("created_at")->useCurrent();
            $table->timestamp("updated_at")->useCurrent()->useCurrentOnUpdate();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coins');
    }
};
