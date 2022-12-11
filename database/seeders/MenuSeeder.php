<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $names = ['Home', 'About', 'Services', 'Portfolio', 'Team', 'Blog', 'Contact'];
    private $routes = ['home', 'about', 'services', 'portfolio', 'team', 'blog', 'contact'];

    public function run()
    {
        for ($i = 0; $i < count($this->names); $i++) {
            DB::table('menu')->insert([
                'name' => $this->names[$i],
                'route' => $this->routes[$i],
                'place' => $i
            ]);
        }
    }
}
