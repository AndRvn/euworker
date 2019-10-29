<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->json('name');
            $table->json('description')->nullable();
            $table->enum('type',\App\Models\Vacancy::TYPES)->default(\App\Models\Vacancy::FULL_TIME);
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->unsignedBigInteger('experience_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->json('languages')->nullable();
            $table->float('salary')->nullable();
            $table->float('salary_per_hour')->nullable();
            $table->enum('education', config('constants.education'))->nullable();
            $table->dateTime('published_at')->default(\Carbon\Carbon::now());
            $table->dateTime('validity')->default(\Carbon\Carbon::now()->addMonths(3));
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('set null');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('set null');
            $table->foreign('experience_id')->references('id')->on('experiences')->onDelete('set null');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancies');
    }
}
