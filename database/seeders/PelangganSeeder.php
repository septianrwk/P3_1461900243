<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cst1 = new Pelanggan();
        $cst1->nama = "Ade";
        $cst1->alamat = "Surabaya";
        $cst1->save();

        $cst2 = new Pelanggan();
        $cst2->nama = "Zam";
        $cst2->alamat = "Kalimantan";
        $cst2->save();

        $cst3 = new Pelanggan();
        $cst3->nama = "Arif";
        $cst3->alamat = "Sidoarjo";
        $cst3->save();
    }
}
