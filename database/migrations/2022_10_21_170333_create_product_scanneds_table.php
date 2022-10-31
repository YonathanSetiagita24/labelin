<?php

use App\Models\QrCode;
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
        Schema::create('product_scanneds', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(QrCode::class)->constrained();
            $table->string('fullname');
            $table->date('birth_date');
            $table->enum('gender', ['Laki-Laki', 'Perempuan']);
            $table->string('lat');
            $table->string('long');
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
        Schema::dropIfExists('product_scanneds');
    }
};
