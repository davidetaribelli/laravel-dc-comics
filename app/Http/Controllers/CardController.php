<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

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
        $data = $request->all();

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
