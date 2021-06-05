<?php

namespace Database\Seeders;


use App\Models\Transaksi;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trs1 = new Transaksi();
        $trs1->id_pelanggan = "1";
        $trs1->id_barang = "2";
        $trs1->save();

        $trs2 = new Transaksi();
        $trs2->id_pelanggan = "3";
        $trs2->id_barang = "1";
        $trs2->save();

        $trs3 = new Transaksi();
        $trs3->id_pelanggan = "2";
        $trs3->id_barang = "1";
        $trs3->save();

        $trs4 = new Transaksi();
        $trs4->id_pelanggan = "1";
        $trs4->id_barang = "1";
        $trs4->save();
    }
}
