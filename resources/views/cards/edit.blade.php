@extends('layouts.app')

@section('content')
<section class="mainUp">
    <div class="container-fluid p-0">
        <div class="row">
            <img class="logo" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron">
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12 bg-dark d-flex align-items-center p-4">
                <div class="currentSeries text-white p-2">
                    <span> Modifica il fumetto</span>
                </div>
                <div class="col-7 my-3">
                    <form action="{{route('cards.update', $card->id)}}" method="post">
                        @csrf

                        @method("PUT")
                        <div class="input-group input-group-sm mb-3">
                            <label class="text-white input-group-text bg_blue me-3 border-0" for="title">Title</label>
                            <input type="text" name="title" placeholder="Insert title" class="px-2 py-1 border-0 rounded-end" value="{{$card->title}}">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <label class="text-white input-group-text bg_blue me-3 border-0" for="description">Description</label>
                            <textarea type="text" name="description" placeholder="Insert description" class="px-2 py-1 border-0 rounded-end" cols="30" rows="5">{{$card->description}}</textarea>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <label class="text-white input-group-text bg_blue me-3 border-0" for="thumb">Thumb</label>
                            <input type="text" name="thumb" placeholder="Insert thumb" class="px-2 py-1 border-0 rounded-end" value="{{$card->thumb}}">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <label class="text-white input-group-text bg_blue me-3 border-0" for="price">Price</label>
                            <input type="text" name="price" placeholder="Insert price" class="px-2 py-1 border-0 rounded-end" value="{{$card->price}}">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <label class="text-white input-group-text bg_blue me-3 border-0" for="series">Series</label>
                            <input type="text" name="series" placeholder="Insert series" class="px-2 py-1 border-0 rounded-end" value="{{$card->series}}">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <label class="text-white input-group-text bg_blue me-3 border-0" for="sale_date">Sale_date</label>
                            <input type="text" name="sale_date" placeholder="Insert sale_date" class="px-2 py-1 border-0 rounded-end" value="{{$card->sale_date}}">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <label class="text-white input-group-text bg_blue me-3 border-0" for="type">Type</label>
                            <input type="text" name="type" placeholder="Insert type" class="px-2 py-1 border-0 rounded-end" value="{{$card->type}}">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <label class="text-white input-group-text bg_blue me-3 border-0" for="artists">Artists</label>
                            <input type="text" name="artists" placeholder="Insert artists" class="px-2 py-1 border-0 rounded-end" value="{{$card->artists}}">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <label class="text-white input-group-text bg_blue me-3 border-0" for="writers">Writers</label>
                            <input type="text" name="writers" placeholder="Insert writers" class="px-2 py-1 border-0 rounded-end" value="{{$card->writers}}">
                        </div>
                        <button type="submit" class="text-white input-group-text bg_blue me-3 border-0">Modifica</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection