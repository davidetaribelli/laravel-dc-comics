
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
            <div class="col-12 bg-dark d-flex justify-content-center align-items-center p-4">
                <div class="currentSeries text-white p-2">
                    <span> CURRENT SERIES</span>
                </div>
                <div id="contentHere" class="text-white d-flex flex-wrap align-items-center p-3">
                    <div class="card d-flex flex-row">
                        <img src="{{$card['thumb']}}" class="card-img-top" alt="{{$card['title']}}">
                        <div class="card-body">
                          <h3 class="card-title">{{$card['title']}}</h3>
                          <p class="card-text">{{$card['description']}}</p>
                          <h5>Writers:</h5>
                          <small class="card-title">{{$card['writers']}}</small>
                          <h5>Artist:</h5>
                          <small class="card-title">{{$card['artists']}}</small>
                          <h5>Date:</h5>
                          <h6 class="card-title">{{$card['sale_date']}}</h6>
                          <h5>Price:</h5>
                          <h5 class="card-title">{{$card['price']}}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="load_ text-center">
                <a href="{{route("home")}}" class="py-1 px-4 border-0 m-4 text-white btn btn-primary">BACK HOME</a>
                <a href="{{route("cards.edit", $card->id)}}" class="py-1 px-4 border-0 m-4 text-white btn btn-primary">EDIT</a>
                <form action="{{route("cards.destroy", $card)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="py-1 px-4 border-0 m-4 text-white btn btn-danger" value="DELETE">
                </form>
            </div>
        </div>
    </div>
</section>

@endsection