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
                    <span> CURRENT SERIES</span>
                </div>
                <div id="contentHere" class="text-white d-flex flex-wrap justify-content-start align-items-center p-3">
                    @foreach ($cards as $card)
                    <div class="card_">
                        <a class="text-decoration-none text-white" href="{{route("cards.show", $card['id'])}}">
                            <img src="{{$card['thumb']}}" alt="{{$card['type']}}">
                            <small>{{ $card['series'] }}</small>
                        </a> 
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="load_ text-center">
                <button class="py-1 px-4 border-0 m-4 text-white"> LOAD MORE </button>
            </div>
        </div>
    </div>
</section>
<section class="mainDown">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-evenly p-5 text-white">
                <div class="option p-3">
                    <img class="logo" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="digital-comics">
                    <span class="mx-3">DIGITAL COMICS</span>
                </div>
                <div class="option">
                    <img class="logo" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="merch">
                    <span class="mx-3">DC MERCHANDISE</span>
                </div>
                <div class="option">
                    <img class="logo" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="sub">
                    <span class="mx-3">SUBSCRIPTION</span>
                </div>
                <div class="option">
                    <img class="logo" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="shop">
                    <span class="mx-3">COMIC SHOP LOCATOR</span>
                </div>
                <div class="option">
                    <img class="logo" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="visa">
                    <span class="mx-3">DC POWER VISA</span>
                </div>
            </div>
        </div>
    </div>
</section>  
@endsection