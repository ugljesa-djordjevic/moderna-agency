<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $titles = ['Welcome to Moderna', 'Your journey companion', 'Our goal'];
    private $content = 'Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.';

    public function run()
    {
        foreach ($this->titles as $title) {
            DB::table('slider')->insert([
                'title' => $title,
                'content' => $this->content
            ]);
        }
    }
}
