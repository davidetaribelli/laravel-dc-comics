<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = Card::all();
        
        return view("cards.index", compact("cards"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("cards.create");
    }

    private function validateCard($data){
        $validator = Validator::make($data,[
            "title"=>"required|min:5|max:50",
            "description"=>"required|min:5|max:65535",
            "thumb"=>"required|min:5|max:65535",
            "price"=>"required|min:5|max:10",
            "series"=>"required|min:5|max:50",
            "sale_date"=>"required",
            "type"=>"required|min:5|max:50",
            "artists"=>"required|min:5|max:50",
            "writers"=>"required|min:5|max:50",
        ],[
            "title.required" => "Il titolo è obbligatorio",
            "title.min" => "Il titolo deve essere almeno di :min caratteri",
            "description.required" => "La descrizone è obbligatoria",
            "description.min" => "La descrizone deve essere almeno di :min caratteri",
            "thumb.required" => "L'immagine è obbligatoria",
            "thumb.min" => "Il percorso dell'immagine deve essere almeno di :min caratteri",
            "price.required" => "Il prezzo è obbligatorio",
            "price.min" => "Il prezzo deve essere almeno di :min caratteri",
            "series.required" => "La serie del fumetto è obbligatoria",
            "series.min" => "La serie deve essere almeno di :min caratteri",
            "sale_date.required" => "La data è obbligatoria",
            "type.required" => "La tipologia del fumetto è obbligatoria",
            "type.min" => "La tipologia deve essere almeno di :min caratteri",
            "artists.required" => "Gli artisti del fumetto sono obbligatori",
            "artists.min" => "Gli artisti devono avere almeno :min caratteri",
            "writers.required" => "Gli scrittori del fumetto sono obbligatori",
            "writers.min" => "Gli scrittori devono avere almeno :min caratteri",
            
        ])->validate();
        
        return $validator;
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validateCard($request->all());

        $newCard =  new Card;
        $newCard->title = $data["title"];
        $newCard->description = $data["description"];
        $newCard->thumb = $data["thumb"];
        $newCard->price = $data["price"];
        $newCard->series = $data["series"];
        $newCard->sale_date = $data["sale_date"];
        $newCard->type = $data["type"];
        $newCard->artists = $data["artists"];
        $newCard->writers = $data["writers"];
        $newCard->save();

        return redirect()->route('cards.show', $newCard->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  Card $card
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        return view("cards.show", compact("card"));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $card)
    {
        return view("cards.edit", compact("card"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Card $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card $card)
    {
        $data = $this->validateCard($request->all());

        $card->title = $data["title"];
        $card->description = $data["description"];
        $card->thumb = $data["thumb"];
        $card->price = $data["price"];
        $card->series = $data["series"];
        $card->sale_date = $data["sale_date"];
        $card->type = $data["type"];
        $card->artists = $data["artists"];
        $card->writers = $data["writers"];
        $card->update();

        return redirect()->route('cards.show', $card->id); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Card $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        $card->delete();

        return redirect()->route('cards.index');
    }
}
