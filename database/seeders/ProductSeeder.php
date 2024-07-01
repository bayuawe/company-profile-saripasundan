<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Kue Balok - Choco Original',
                'slug' => 'kue-balok-choco-original',
                'cover' => 'images/kue-balok-choco-original.jpg',
                'price' => 20000,
                'about' => 'Kue coklat lezat dengan bahan berkualitas tinggi, dipanggang dengan sempurna untuk memberikan rasa yang luar biasa.',
                'category_id' => 1,
                'creator_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Kue Balok - Choco Banana',
                'slug' => 'kue-balok-choco-banana',
                'cover' => 'images/kue-balok-choco-banana.jpg',
                'price' => 20000,
                'about' => 'Kue coklat lezat dengan bahan berkualitas tinggi, dipanggang dengan sempurna untuk memberikan rasa yang luar biasa.',
                'category_id' => 1,
                'creator_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Pia Butter - Cokelat',
                'slug' => 'pia-butter-cokelat',
                'cover' => 'images/pia-butter-cokelat.jpg',
                'price' => 16000,
                'about' => 'Pia butter dengan isian cokelat yang lezat dan tekstur yang lembut.',
                'category_id' => 1,
                'creator_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Pia Butter - Kacang',
                'slug' => 'pia-butter-kacang',
                'cover' => 'images/pia-butter-kacang.jpg',
                'price' => 16000,
                'about' => 'Pia butter dengan isian kacang yang lezat dan tekstur yang lembut.',
                'category_id' => 1,
                'creator_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Bolen Pisang Lumer',
                'slug' => 'bolen-pisang-lumer',
                'cover' => 'images/bolen-pisang-lumer.jpg',
                'price' => 22000,
                'about' => 'Bolen pisang dengan isian cokelat yang lumer di mulut, memberikan sensasi rasa yang lezat dan memuaskan.',
                'category_id' => 1,
                'creator_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Chocobar - Original',
                'slug' => 'chocobar-original',
                'cover' => 'images/chocobar-original.jpg',
                'price' => 25000,
                'about' => 'Chocobar original dengan rasa cokelat yang lezat dan tekstur yang renyah.',
                'category_id' => 2,
                'creator_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Chocobar - Banana',
                'slug' => 'chocobar-banana',
                'cover' => 'images/chocobar-banana.jpg',
                'price' => 25000,
                'about' => 'Snack keju renyah dan gurih.',
                'category_id' => 2,
                'creator_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Chocobar - Hazelnut',
                'slug' => 'chocobar-hazelnut',
                'cover' => 'images/chocobar-hazelnut.jpg',
                'price' => 25000,
                'about' => 'Snack keju renyah dan gurih.',
                'category_id' => 2,
                'creator_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Chocobar - Durian',
                'slug' => 'chocobar-durian',
                'cover' => 'images/chocobar-durian.jpg',
                'price' => 25000,
                'about' => 'Snack keju renyah dan gurih.',
                'category_id' => 2,
                'creator_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Keripik Pisang Lumer',
                'slug' => 'keripik-pisang-lumer',
                'cover' => 'images/keripik-pisang-lumer.jpg',
                'price' => 16000,
                'about' => 'Snack keju renyah dan gurih.',
                'category_id' => 2,
                'creator_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Keripik Singkong Lumer',
                'slug' => 'keripik-singkong-lumer',
                'cover' => 'images/keripik-singkong-lumer.jpg',
                'price' => 16000,
                'about' => 'Snack keju renyah dan gurih.',
                'category_id' => 2,
                'creator_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Soes Kering Lumer',
                'slug' => 'soes-kering-lumer',
                'cover' => 'images/soes-kering-lumer.jpg',
                'price' => 16000,
                'about' => 'Snack keju renyah dan gurih.',
                'category_id' => 2,
                'creator_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Basreng - Original',
                'slug' => 'basreng-original',
                'cover' => 'images/basreng-original.jpg',
                'price' => 16000,
                'about' => 'Snack keju renyah dan gurih.',
                'category_id' => 2,
                'creator_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Basreng - Pedas Daun Jeruk',
                'slug' => 'basreng-pedas-daun-jeruk',
                'cover' => 'images/basreng-pedas-daun-jeruk.jpg',
                'price' => 16000,
                'about' => 'Snack keju renyah dan gurih.',
                'category_id' => 2,
                'creator_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Koko Choco',
                'slug' => 'koko-choco',
                'cover' => 'images/koko-choco.jpg',
                'price' => 16000,
                'about' => 'Snack keju renyah dan gurih.',
                'category_id' => 2,
                'creator_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Ring Choco',
                'slug' => 'ring-choco',
                'cover' => 'images/ring-choco.jpg',
                'price' => 20000,
                'about' => 'Snack keju renyah dan gurih.',
                'category_id' => 2,
                'creator_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Es Cokelat Lumer',
                'slug' => 'es-cokelat-lumer',
                'cover' => 'images/es-cokelat-lumer.jpg',
                'price' => 14000,
                'about' => 'Snack keju renyah dan gurih.',
                'category_id' => 3,
                'creator_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
