<?php

namespace Database\Seeders;

use App\Models\MainMenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MainMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        MainMenu::create([
             'name'      =>"name"
            ,'colorCode' =>"#5742f5"
            ,'iconLinks'=> "https://picsum.photos/250?image=9"
        ]);

        MainMenu::create([
            'name'      =>"name"
            ,'colorCode' =>"#5742f5"
            ,'iconLinks'=> "https://picsum.photos/250?image=9"
        ]);

    }
}
