<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('request_form_id')->constrained('request_forms');
            $table->foreignId('supplier_id')->constrained('suppliers');
            $table->string('kode', 30);
            $table->date('tanggal');
            $table->string('attn', 50);
            $table->integer('total');
            $table->integer('diskon')->nullable();
            $table->integer('grand_total');
            $table->text('catatan')->nullable();
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
        Schema::dropIfExists('purchases');
    }
}
