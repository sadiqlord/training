<?php

use App\Model\Job;
use App\Model\Tag;
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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('job_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Job::class,'job_listing_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Tag::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};
