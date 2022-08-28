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
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->longText('subject')->nullable();
            $table->longText('message')->nullable();
            $table->longText('our_comment')->nullable();
            $table->string('status')->default('Not Reviewed');
            $table->boolean('is_terms_policy_checked')->nullable();
            $table->string('website')->nullable();

            $table->foreignId('admin_id')->nullable();// query handled by
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('set null');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_us');
    }
};
