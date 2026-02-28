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
        Schema::create('t_stok', function (Blueprint $table) {
            $table->id('stok_id');
            $table->unsignedBigInteger('supplier_id')->index(); //indexing untuk Foreign Key
            $table->unsignedBigInteger('barang_id')->index(); //indexing untuk Foreign Key
            $table->unsignedBigInteger('user_id')->index(); //indexing untuk Foreign Key
            $table->date('stok_tanggal');
            $table->integer('stok_jumlah');
            $table->timestamps();

            //mendefinisikan Foreign Key pada kolom supplier_id yang merujuk ke kolom supplier_id pada tabel m_supplier
            $table->foreign('supplier_id')
                ->references('supplier_id')
                ->on('m_supplier');
            //mendefinisikan Foreign Key pada kolom barang_id yang merujuk ke kolom barang_id pada tabel m_barang
            $table->foreign('barang_id')
                ->references('barang_id')
                ->on('m_barang');
            //mendefinisikan Foreign Key pada kolom user_id yang merujuk ke kolom user_id pada tabel m_user
            $table->foreign('user_id')
                ->references('user_id')
                ->on('m_user');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_stok');
    }
};
