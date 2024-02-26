<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $users = [
        [
            'username' => 'admin',
            'email' => 'admin1@gmail.com',
            'password' => bcrypt('admin'),
            'nama_petugas' => 'admin',
            'level' => 'admin',
        ],
        [
            'username' => 'petugas',
            'email' => 'petugas1@gmail.com',
            'password' => bcrypt('petugas'),
            'nama_petugas' => 'petugas',
            'level' => 'petugas',
        ],
    ];
    
    foreach($users as $key => $value) {
            User::create($value);
        }//
    }
}
