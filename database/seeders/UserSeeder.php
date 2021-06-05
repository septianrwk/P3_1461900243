<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usr1 = new Pengguna();
        $usr1->nama = "Admin";
        $usr1->username = "admin";
        $usr1->password = "admin";
        $usr1->save();
    }
}
