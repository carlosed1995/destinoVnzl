<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create(['name' => 'PHP']);
        Tag::create(['name' => 'MySql']);
        Tag::create(['name' => 'Javascript']);
        Tag::create(['name' => 'Laravel']);
        Tag::create(['name' => 'Css']);
    }
}
