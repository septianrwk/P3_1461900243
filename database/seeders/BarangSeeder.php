<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item1 = new Barang();
        $item1->nama = "Sepatu";
        $item1->harga = "100000";
        $item1->save();

        $item2 = new Barang();
        $item2->nama = "Baju";
        $item2->harga = "50000";
        $item2->save();
    }
}
