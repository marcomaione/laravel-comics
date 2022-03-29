<link rel="stylesheet" href="{{asset('css/app.css')}}">
@include('partials.header')
<main>
     <div class="center">
         <div class="poster">
             <h2>{{$poster['title']}}</h2>
             <img src="{{$poster['thumb']}}" alt="">
             <h3>{{$poster['type']}}</h3>
             <span>{{$poster['price']}}</span>
             <span>{{$poster['sale_date']}}</span>
             <p>{{$poster['description']}}</p>
             <a href="/"><button>Gallery</button></a>
         </div>
     </div>
</main>
@include('partials.footer')