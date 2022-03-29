<link rel="stylesheet" href="{{asset('css/app.css')}}">
@include('partials.header')
<main>
    <div class="center">
        <div class="poster">
            <h2>{{$poster['title']}}</h2>
            <img src="{{$poster['thumb']}}" alt="">
            <h3>{{$poster['type']}}</h3>
        </div>
        <div class="info">
            <h1>Artisti</h1>
            @foreach ($poster['artists'] as $artists)
                <a href="#">{{$artists}}</a>
            @endforeach
            <span>Price-{{$poster['price']}}</span>
            <span>Relase Date-</Relase-Date>{{$poster['sale_date']}}</span>
        </div>
        <div class="poster-l">
            <h1>Descrizione</h1>
            <p>{{$poster['description']}}</p>
            <a href="/"><button>Gallery</button></a>
        </div>
    </div>
</main>
@include('partials.footer')