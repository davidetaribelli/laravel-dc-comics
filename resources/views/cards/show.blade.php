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
                    <div class="card" style="width: 30rem;">
                        <img src="{{$card['thumb']}}" class="card-img-top" alt="{{$card['title']}}">
                        <div class="card-body">
                          <h3 class="card-title">{{$card['title']}}</h3>
                          <p class="card-text">{{$card['description']}}</p>
                          <h3>Writers:</h3>
                          <small class="card-title">{{$card['writers']}}</small>
                          <h3>Artist:</h3>
                          <small class="card-title">{{$card['artists']}}</small>
                          <h6 class="card-title">{{$card['sale_date']}}</h6>
                          <h5 class="card-title">{{$card['price']}}</h5>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection