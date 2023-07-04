<header class="bg-light">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-4 d-flex align-items-center">
                <img class="logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo-dc">
            </div>
            <div class="col-8 d-flex align-items-center justify-content-evenly">
                @foreach ($links as $link)
                <a class="text-decoration-none text-black mx-3 d-flex align-items-center" href="#">
                    {{$link}}
                </a>
                @endforeach
            </div>
        </div>
    </div>
</header>