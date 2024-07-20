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
        Schema::create('venues', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('web_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('address');
            $table->text('short_address')->nullable();
            $table->string('closest_metro')->nullable();
            $table->unsignedInteger('city_id');
            $table->tinyInteger('mock_status')->default(2);
            $table->boolean('is_non_bookable')->default(false);
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->unsignedInteger('available_time_period');
            $table->string('payment_options')->nullable();
            $table->json('online_payment_options')->nullable();
            $table->text('slug');
            $table->decimal('tax', 5, 2);
            $table->boolean('is_exclusive');
            $table->unsignedInteger('company_id');
            $table->json('invoice_type')->nullable();
            $table->boolean('is_hudle_exclusive')->default(false);
            $table->unsignedInteger('cancellable_before')->nullable();
            $table->unsignedInteger('cancellable_after')->nullable();
            $table->boolean('partner_cancellable')->default(false);
            $table->boolean('consumer_cancellable')->default(false);
            $table->json('share_url')->nullable();
            $table->json('settings')->nullable();
            $table->timestamps();
            $table->timestamp('pushed_at')->nullable();
            $table->boolean('is_approved')->default(false);
            $table->boolean('is_daily_view_enabled')->default(false);
            $table->unsignedInteger('contact_person_id')->nullable();
            $table->timestamp('plan_order')->nullable();
            $table->tinyInteger('type')->default(1);
            $table->boolean('mask_user_detail')->default(true);
            $table->unsignedInteger('company_branch_id');
            $table->text('tnc')->nullable();
            $table->decimal('commission_percentage', 5, 2);
            $table->unsignedInteger('position')->default(0);
            $table->timestamp('elastic_updated_at')->nullable();
            $table->decimal('points', 10, 2)->default(0.00);
            $table->timestamp('rank_expire_at')->nullable();
            $table->string('invoice_series');
            $table->timestamp('invoice_updated_at')->nullable();
            $table->string('sac_code')->nullable();
            $table->boolean('is_partner_daily_view_enabled')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venues');
    }
};
