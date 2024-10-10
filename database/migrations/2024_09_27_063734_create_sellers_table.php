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
        Schema::create('sellers', function (Blueprint $table) {
            // Table columns
            $table->id();
            $table->string('firstname'); // 'firstname' => 'required|regex:/^[A-Za-z]+$/',
            $table->string('lastname');  // 'lastname' => 'required|regex:/^[A-Za-z]+$/',
            $table->string('company')->nullable(); // 'company' => 'nullable',
            $table->string('phonenumber')->unique(); // 'phonenumber' => 'required|string|max:10|regex:/^(077|075|071|070|076|078|074|073)\d{7}$/',
            $table->string('personalemail')->unique(); // 'personalemail' => 'required|email',
            $table->string('companymail')->unique(); // 'companymail' => 'required|email',
            $table->string('district'); // 'district' => 'required',
            $table->string('province'); // 'province' => 'required',
            $table->string('address1'); // 'address1' => 'required',
            $table->string('address2')->nullable(); // 'address2' => 'nullable',
            $table->string('city'); // 'city' => 'required',
            $table->string('zip'); // 'zip' => 'required|string|max:7|numeric',
            $table->timestamps();

            // Foreign key relation to users table (personalemail refers to email in users table)
            $table->foreign('personalemail')->references('email')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sellers');
    }
};
