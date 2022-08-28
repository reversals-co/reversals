<?php

use App\Models\Admin;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('role');
            $table->string('status')->default('Active');
            $table->string('profile_image')->default('profile_image_icon.png');
            $table->string('password');

            $table->softDeletes();
            $table->timestamps();
        });

        Admin::create(['name'=>'Hamza Saqib','email'=>'mianhamza7262@gmail.com', 'role'=>'Super Admin', 'password'=>Hash::make('hamza7262')]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
};
