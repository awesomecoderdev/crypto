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
        Schema::create('metas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cmcid')->nullable();
            $table->string('slug')->nullable();
            $table->string('logo')->nullable();
            $table->text('description')->nullable();
            $table->text('urls')->nullable();
            $table->text('contract_address')->nullable();
            $table->text('notice')->nullable();
            $table->string('date_added')->nullable();
            $table->string('date_launched')->nullable();
            $table->string('category')->nullable();
            $table->text('self_reported_tags')->nullable();
            $table->boolean("is_hidden")->default(false);

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
        Schema::dropIfExists('metas');
    }
};
