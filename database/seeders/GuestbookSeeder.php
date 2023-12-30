<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuestbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker = Faker::create();

        // foreach (range(1, 10) as $index) {
        //     Pelanggan::create([
        //         'nama' => $faker->name,
        //         'email' => $faker->unique()->safeEmail,
        //         'alamat' => $faker->address,
        //         'no_telepon' => $faker->phoneNumber,
        //     ]);
        \App\Models\Guestbook::factory(10)->create();
        }
    }

