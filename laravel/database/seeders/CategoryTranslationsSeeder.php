<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryTranslationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('category_translations')->delete();
        \DB::table('category_translations')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Hướng dẫn',
                'description' => 'hướng dẫn',
                'slug' => 'huong-dan',
                'category_id' => 1,
                'locale' => 'vn'
            ),
        	1 =>
        	array(
                'id' => 2,
                'name' => 'How to',
                'description' => 'how to',
                'slug' => 'how-to',
                'category_id' => 1,
                'locale' => 'en'
        	),
            2 =>
        	array(
                'id' => 3,
                'name' => 'Sàn giao dịch',
                'description' => 'sàn giao dịch',
                'slug' => 'san-giao-dich',
                'category_id' => 2,
                'locale' => 'vn'
        	),        	
        	3 =>
        	array(
                'id' => 4,
                'name' => 'Exchange',
                'description' => 'exchange',
                'slug' => 'exchange',
                'category_id' => 2,
                'locale' => 'en'
        	), 	     	
        	4 =>
        	array(
                'id' => 5,
                'name' => 'Binance',
                'description' => 'binance',
                'slug' => 'binance',
                'category_id' => 3,
                'locale' => 'vn'
        	),        	
        	5 =>
        	array(
                'id' => 6,
                'name' => 'Binance',
                'description' => 'binance',
                'slug' => 'binance',
                'category_id' => 3,
                'locale' => 'en'
            ),
            6 =>
        	array(
                'id' => 7,
                'name' => 'Kucoin',
                'description' => 'kucoin',
                'slug' => 'kucoin',
                'category_id' => 4,
                'locale' => 'vn'
        	),        	
        	7 =>
        	array(
                'id' => 8,
                'name' => 'Kucoin',
                'description' => 'kucoin',
                'slug' => 'kucoin',
                'category_id' => 4,
                'locale' => 'en'
            ),
            8 =>
        	array(
                'id' => 9,
                'name' => 'Forex',
                'description' => 'forex',
                'slug' => 'forex',
                'category_id' => 5,
                'locale' => 'vn'
        	),        	
        	9 =>
        	array(
                'id' => 10,
                'name' => 'Forex',
                'description' => 'forex',
                'slug' => 'forex',
                'category_id' => 5,
                'locale' => 'en'
            ),
            10 =>
        	array(
                'id' => 11,
                'name' => 'FTX',
                'description' => 'ftx',
                'slug' => 'ftx',
                'category_id' => 6,
                'locale' => 'vn'
        	),        	
        	11 =>
        	array(
                'id' => 12,
                'name' => 'ftx',
                'description' => 'ftx',
                'slug' => 'ftx',
                'category_id' => 6,
                'locale' => 'en'
            ),
            12 =>
        	array(
                'id' => 13,
                'name' => 'Đánh giá',
                'description' => 'đánh giá',
                'slug' => 'danh-gia',
                'category_id' => 7,
                'locale' => 'vn'
        	),        	
        	13 =>
        	array(
                'id' => 14,
                'name' => 'Review',
                'description' => 'review',
                'slug' => 'review',
                'category_id' => 7,
                'locale' => 'en'
            ),
        	14 =>
        	array(
                'id' => 15,
                'name' => 'Kiếm tiền',
                'description' => 'kiếm tiền',
                'slug' => 'kiem-tien',
                'category_id' => 8,
                'locale' => 'vn'
        	),        	
        	15 =>
        	array(
                'id' => 16,
                'name' => 'Make money',
                'description' => 'make money',
                'slug' => 'make-money',
                'category_id' => 8,
                'locale' => 'en'
        	), 
            16 =>
        	array(
                'id' => 17,
                'name' => 'Tin tức',
                'description' => 'tin tức',
                'slug' => 'tin-tuc',
                'category_id' => 9,
                'locale' => 'vn'
        	),        	
        	17 =>
        	array(
                'id' => 18,
                'name' => 'News',
                'description' => 'news',
                'slug' => 'news',
                'category_id' => 9,
                'locale' => 'en'
            ),
        ));
    }
}
