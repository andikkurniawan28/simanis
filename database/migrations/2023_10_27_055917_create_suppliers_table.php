<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->foreignId("termin_id")->constrained()->onDelete("cascade");
            $table->string("kode")->unique();
            $table->string("keterangan")->nullable();
            $table->string("nama")->unique();
            $table->text("alamat1")->nullable();
            $table->text("alamat2")->nullable();
            $table->string("telepon")->nullable();
            $table->string("fax")->nullable();
            $table->string("kota")->nullable();
            $table->float("disc1")->default(0);
            $table->float("disc2")->default(0);
            $table->float("plafon")->default(0);
            $table->string("khusus")->nullable();
            $table->string("ekspedisi")->nullable();
            $table->string("status")->nullable();
            $table->float("kurs")->default(0);
            $table->string("person")->nullable();
            $table->string("hp")->nullable();
            $table->string("ptelp")->nullable();
            $table->string("pfax")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
