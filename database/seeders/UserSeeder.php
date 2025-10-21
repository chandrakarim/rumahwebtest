<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();

        User::insert([
            [
                'name' => 'chandra',
                'email' => 'chandra@email.com',
                'password' => Hash::make('123'),
                'jk' => 'laki-laki',
                'no_tlp' => '081211103074',
            ],
            [
                'name' => 'citra',
                'email' => 'citra@email.com',
                'password' => Hash::make('123'),
                'jk' => 'perempuan',
                'no_tlp' => '081211103079',
            ],
            [
                'name' => 'angga',
                'email' => 'angga@email.com',
                'password' => Hash::make('123'),
                'jk' => 'laki-laki',
                'no_tlp' => '08121110304',
            ],
        ]);
    }
}
