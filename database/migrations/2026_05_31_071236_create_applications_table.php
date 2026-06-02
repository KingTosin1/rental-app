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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();

            $table->string('full_name', 255);
            $table->string('email', 255);
            $table->string('phone', 50);
            $table->text('address')->nullable();

            $table->string('marital_status', 50);
            $table->unsignedInteger('children_count')->default(0);

            $table->string('occupancy_length', 100);
            $table->date('move_in_date');
            $table->boolean('pets')->default(false);
            $table->unsignedInteger('smokers_count')->default(0);
            $table->boolean('ever_evicted')->default(false);
            $table->text('vacating_reason');

            $table->string('employer_name', 255);
            $table->string('occupation', 255);
            $table->string('employment_length', 100);
            $table->decimal('monthly_income', 12, 2);

            $table->string('landlord_name', 255);
            $table->string('landlord_phone', 50);
            $table->string('next_of_kin', 255);
            $table->string('relationship', 100);
            $table->string('next_of_kin_phone', 50);

            $table->boolean('authorized_check')->default(false);
            $table->boolean('information_verified')->default(false);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
