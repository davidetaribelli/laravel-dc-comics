<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cards = config("comics");

        foreach($cards as $card){
         $newCard = new Card();
         $newCard->title = $card["title"];
         $newCard->description = $card["description"];
         $newCard->thumb = $card["thumb"];
         $newCard->price = $card["price"];
         $newCard->series = $card["series"];
         $newCard->sale_date = $card["sale_date"];
         $newCard->type = $card["type"];
         $newCard->artists = $card["artists"];
         $newCard->writers = $card["writers"];
         $newCard->save();
        }
    }
}
