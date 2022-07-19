<?php

namespace Database\Seeders;

use App\Models\Anggota;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        Anggota::create([
            'nama'=> 'iqram',
            'nim'=> '60200120081',
            'ttl'=> 'pinrang, 03-09-2002',
            'alamat'=> 'pinrang'
        ]);

        User::create([
            'username' => 'admin',
            'password' => bcrypt('admin123')
        ]);
    }
}
