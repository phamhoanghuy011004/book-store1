<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Cloudinary\Cloudinary;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Cẩm Nang Ẩm Thực Việt Nam',
                'author' => 'Nhiều tác giả',
                'description' => 'Cuốn sách cung cấp thông tin về các món ăn đặc trưng của ẩm thực Việt Nam.',
                'category' => 'Ẩm thực, nấu ăn',
                'content' => 'Cuốn sách này giới thiệu chi tiết về các món ăn truyền thống và đặc sản của các vùng miền Việt Nam, cùng với cách chế biến và những bí quyết ẩm thực độc đáo.',
                'publish_at' => 2015,
                'image' => 'images/download.jpg',
                'amount' => 100,
                'price' => 90000,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ] );
    }
}
