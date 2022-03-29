<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comics-laravel</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @include('partials.header')
    <main>
        <div class="content">
            <div class="list">
                @foreach ($posters as $key => $poster)
                    <a href="/poster/{{$key}}"><div class="card">
                            <img src="{{$poster['thumb']}}" alt="">
                            <h3>{{$poster['series']}}</h3>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="more">
            <button>LOAD MORE</button>
        </div>  
    </main>
    @include('partials.footer')
</body>
</html>