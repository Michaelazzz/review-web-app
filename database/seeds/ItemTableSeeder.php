<?php

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'id' => '1',
                'name' => 'Workout',
                'status' => 'false'
            ],
            [
                'id' => '2',
                'name' => 'Read nonfiction book',
                'status' => 'false'
            ],
            [
                'id' => '3',
                'name' => 'Do something fun',
                'status' => 'false'
            ],
            [
                'id' => '4',
                'name' => 'Mood',
                'status' => 'false'
            ],
            [
                'id' => '5',
                'name' => 'Work on REVEIW',
                'status' => 'false'
            ],
            [
                'id' => '6',
                'name' => 'Eat chocolate',
                'status' => 'false'
            ]
        ];

        factory(Item::class, 50)->create();
    }
}
