@extends('layouts.plantilla')
@section('titulo','Noticias')
@section('contenido')
<div class="card width-auto">
  <img src="{{asset('images\Sur.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{__('Han Kang gana el Nobel de Literatura')}}</h5>
    <p class="card-text">
{{__('La escritora surcoreana Han Kang ha ganado el Premio Nobel de Literatura de este año.')}}
</p>
<p class="card-text">
  {{__('Es la primera mujer surcoreana en recibir este prestigioso premio.')}}
  </p>
  <p class="card-text">
    {{__('Una escritora de renombre Han Kang es conocida por sus novelas que exploran temas como la memoria, la identidad y la violencia.')}}
  </p>
  <p class="card-text">
    {{__('Su obra más conocida es \'La vegetariana\', que fue traducida a más de 20 idiomas y ganó el Man Booker International Prize en 2016.')}}
  </p>
  <p class="card-text">
    {{__('Un premio histórico La Academia Sueca ha reconocido a Han Kang por su \'escritura poética que explora la memoria, la imaginación y la historia personal y colectiva\'.')}}
  </p>
  <p class="card-text">
    {{__('Su victoria es un momento histórico para la literatura surcoreana y para las mujeres escritoras de todo el mundo.')}}
  </p>
  <p class="card-text">
    {{__('Otras noticias literarias Además de la noticia de Han Kang, hay otras noticias literarias interesantes que se han publicado recientemente.')}}
  </p>
  <p class="card-text">
    {{__('Por ejemplo, el escritor Emiliano Monge ha publicado una nueva novela llamada \'Los vivos\', que presenta un mundo liminal donde desaparecidos y aparecidos coexisten.')}}
  </p>
  <p class="card-text">
    {{__('También se ha anunciado que la nueva novela de la saga \'The Witcher\' se publicará antes de fin de año.')}}
  </p>
  <p class="card-text">
    {{__('En general, el mundo literario está lleno de novedades y noticias interesantes.')}}
  </p>
  <p class="card-text">
    {{{__('¡Sigue atento a las últimas publicaciones y premios!')}}}
  </p>
 
    </p>
  </div>
</div>
@endsection