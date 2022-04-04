<?php

namespace Database\Seeders;

use App\Models\MainMenu;
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
             'name'      =>"شخصيات عامة"
            ,'colorCode' =>"#063970"
            ,'iconLinks'=> "https://picsum.photos/250?image=9"
        ]);


        MainMenu::create([
            'name'      =>"اطباء"
            ,'colorCode' =>"#1e81b0"
            ,'iconLinks'=> "https://picsum.photos/250?image=9"
        ]);


        MainMenu::create([
            'name'      =>"صيدليات"
            ,'colorCode' =>"#45b4d0"
            ,'iconLinks'=> "https://picsum.photos/250?image=9"
        ]);


        MainMenu::create([
            'name'      =>"محامين"
            ,'colorCode' =>"#685b4b"
            ,'iconLinks'=> "https://picsum.photos/250?image=9"
        ]);


        MainMenu::create([
            'name'      =>"خدمات التوصيل"
            ,'colorCode' =>"#e8eac5"
            ,'iconLinks'=> "https://picsum.photos/250?image=9"
        ]);


    }
}
