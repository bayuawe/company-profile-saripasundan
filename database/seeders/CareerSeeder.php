<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('careers')->insert([
            [
                'title' => 'Baker',
                'slug' => 'baker',
                'cover' => 'images/baker.jpg',
                'description' => 'Memproduksi kue dan kue kering.',
                'requirements' => 'Pengalaman sebagai baker|Kemampuan alat produksi',
                'benefits' => 'Asuransi kesehatan',
                'how_to_apply' => 'Kirim CV ke saripasundan.pku@gmail.com',
                'creator_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Cashier',
                'slug' => 'cashier',
                'cover' => 'images/cashier.jpg',
                'description' => 'Mengelola transaksi penjualan dan memberikan pelayanan yang ramah kepada pelanggan.',
                'requirements' => 'Pengalaman sebagai kasir|Keterampilan komunikasi yang baik|Kemampuan mengoperasikan mesin kasir',
                'benefits' => 'Asuransi kesehatan',
                'how_to_apply' => 'Kirim CV ke saripasundan.pku@gmail.com',
                'creator_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Helper',
                'slug' => 'helper',
                'cover' => 'images/helper.jpg',
                'description' => 'Membantu dalam berbagai tugas dan pekerjaan sehari-hari.',
                'requirements' => 'Lulusan SMA atau sederajat|Pengalaman sebagai helper|Keterampilan komunikasi yang baik',
                'benefits' => 'Asuransi kesehatan',
                'how_to_apply' => 'Kirim CV ke saripasundan.pku@gmail.com',
                'creator_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Content Creator',
                'slug' => 'content-creator',
                'cover' => 'images/content-creator.jpg',
                'description' => 'Membuat konten yang menarik dan menarik untuk media sosial.',
                'requirements' => 'Pengalaman sebagai content creator|Keterampilan komunikasi yang baik',
                'benefits' => 'Asuransi kesehatan',
                'how_to_apply' => 'Kirim CV ke saripasundan.pku@gmail.com',
                'creator_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}