<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\User::create([
            'name' => 'admin',
            'email' => 'email@admin.com',
            'password' => bcrypt('password'),
        ]);
        $array=[
            "თევზის ასორტი 280 გრ","ცეზარი ქათმით 250 გრ","ევროპული ყველის ასორტი 300 გრ", "სოკო კეცზე სულგუნით 250 გრ", "ოჯახური ღორის ხორცით 350 გრ", "ხაჭაპური აჭარული 400 გრ", "ტომ იამი კრევეტებით 320 გრ", "ღორის მწვადი 170 გრ", "კენკრის პანნა კოტტა 170 გრ"
        ];
        foreach($array as $item){
            Item::create([
                "group_id"=>1,
                "title"=>$item,
                "price"=>10,
                "description"=>"Delicious food made with best ingredients"
            ]);
        } 
    }
}
