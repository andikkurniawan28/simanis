<?php

namespace Database\Seeders;

use App\Models\MataUang;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $mata_uangs = [
            ["kode" => strtoupper("idr"), "kurs" => 1, "keterangan" => NULL],
            ["kode" => strtoupper("usd"), "kurs" => 9000, "keterangan" => NULL]
        ];
        MataUang::insert($mata_uangs);
    }
}
