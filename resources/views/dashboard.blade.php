@extends('layout.layouts')

@section('titulo')

Escoge tu pelicula

@endsection
@section('contenido')

<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="https://ramenparados.com/wp-content/uploads/2016/03/one-piece-strong-1000x600.png" class="card-img-top" alt="Hollywood Sign on The Hill"/>
      <div class="card-body">
        <h5 class="card-title">One Piece Film: Strong World</h5>
        <p class="card-text">
          Luffy y el resto de Sombreros de Paja van a sus hogares, 
          ya que una grave crisis amenaza las islas de East Blue. 
          En el camino se cruzan con el pirata Shiki el León Dorado, que secuestra a Nami.
        </p>
        <div>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
            Play
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">One Piece Film: Strong World</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <img src="https://ramenparados.com/wp-content/uploads/2016/03/one-piece-strong-1000x600.png" class="card-img-top" alt="Hollywood Sign on The Hill"/>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Download</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://i.blogs.es/040680/one-piece-film-red-mexico-fecha-estreno-cinepolis/1366_2000.jpeg" class="card-img-top" alt="Palm Springs Road"/>
      <div class="card-body">
        <h5 class="card-title">One Piece Film: Red</h5>
        <p class="card-text">
          Uta, la cantante más popular del mundo, va a presentarse en un escenario y revelar su apariencia por primera vez. 
          Luffy y sus amigos acuden al concierto y se dan cuenta de que la voz de Uta es capaz de cambiarlo todo.
        </p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
          Play
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">One Piece Film: Red</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
      <img src="https://i.blogs.es/040680/one-piece-film-red-mexico-fecha-estreno-cinepolis/1366_2000.jpeg" class="card-img-top" alt="Palm Springs Road"/>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Download</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://occ-0-1555-784.1.nflxso.net/dnm/api/v6/6AYY37jfdO6hpXcMjf9Yu5cnmO0/AAAABQqi72f3QUPYXG3NR4SOt8sZIN4UY8Wc8J5i1c3VqLZP-2wZcXqS97PfNJ7XbYRMxmMZtT4nFaLODb5O4qPI4fdye89k5qJ0TsSV.jpg?r=d98" class="card-img-top" alt="Los Angeles Skyscrapers"/>
      <div class="card-body">
        <h5 class="card-title">One Piece: Estampida</h5>
        <p class="card-text">Después de dormir durante 15 años, el dios de la destrucción Bills despierta y se sorprende al saber que Freezer ha sido derrotado por un joven llamado Goku. No les toma mucho tiempo a él y a su maestro salir a buscarlo.</p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal3">
          Play
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">One Piece: Estampida</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
      <img src="https://occ-0-1555-784.1.nflxso.net/dnm/api/v6/6AYY37jfdO6hpXcMjf9Yu5cnmO0/AAAABQqi72f3QUPYXG3NR4SOt8sZIN4UY8Wc8J5i1c3VqLZP-2wZcXqS97PfNJ7XbYRMxmMZtT4nFaLODb5O4qPI4fdye89k5qJ0TsSV.jpg?r=d98" class="card-img-top" alt="Los Angeles Skyscrapers"/>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Download</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://tierragamer.com/wp-content/uploads/2019/02/one-piece-1.jpg" class="card-img-top" alt="Skyscrapers"/>
      <div class="card-body">
        <h5 class="card-title">One Piece Film: Gold</h5>
        <p class="card-text">
          Luffy y su tripulación se enfrentan a Tesoro, un hombre sumamente rico, ambicioso y egoísta. Nami será una pieza clave en esta misión.
        </p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal4">
          Play
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">One Piece Film: Gold</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
      <img src="https://tierragamer.com/wp-content/uploads/2019/02/one-piece-1.jpg" class="card-img-top" alt="Skyscrapers"/>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Download</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://occ-0-55-32.1.nflxso.net/dnm/api/v6/6gmvu2hxdfnQ55LZZjyzYR4kzGk/AAAABbcr6onkENvQAe-SmFIFKk9FAh-PDdsKBEQrpvToUYYtpAY7hIeTyCmQR3_VkZ8rQtqwG9up034yfiHhfTPdM6VzJlYDkhiVnrto.jpg?r=c83" class="card-img-top" alt="Skyscrapers"/>
      <div class="card-body">
        <h5 class="card-title">One Piece Film: Z</h5>
        <p class="card-text">
          Un ex-almirante de la Marina roba el Dyna Stones, y se cruza en el camino de los Piratas de Sombrero de Paja.
        </p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal5">
          Play
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">One Piece Film: Z</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
      <img src="https://occ-0-55-32.1.nflxso.net/dnm/api/v6/6gmvu2hxdfnQ55LZZjyzYR4kzGk/AAAABbcr6onkENvQAe-SmFIFKk9FAh-PDdsKBEQrpvToUYYtpAY7hIeTyCmQR3_VkZ8rQtqwG9up034yfiHhfTPdM6VzJlYDkhiVnrto.jpg?r=c83" class="card-img-top" alt="Skyscrapers"/>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Download</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="http://koi-nya.net/img/subidos_posts/2014/07/One-Piece-3D2Y-Ace-no-Shi-wo-Koete-Luffy-Nakama-to-no-Chikai.jpg" class="card-img-top" alt="Skyscrapers"/>
      <div class="card-body">
        <h5 class="card-title">One Piece Film: 3D2Y</h5>
        <p class="card-text">
          La historia nos narra los dos años de entrenamiento de Luffy con Silvers Rayleigh en la isla Rusukaina, después de la batalla de Marineford y la muerte de su hermano Ace. Allí descubrirá a Byrnndi World, el Destructor del Mundo y el poder de la Fruta del Diablo, Fruta Moa Moa.
        </p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal6">
          Play
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">One Piece Film: 3D2Y</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
      <img src="http://koi-nya.net/img/subidos_posts/2014/07/One-Piece-3D2Y-Ace-no-Shi-wo-Koete-Luffy-Nakama-to-no-Chikai.jpg" class="card-img-top" alt="Skyscrapers"/>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Download</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @if ($posts -> count())
  <h1 class="card-title text-center">PUBLICACIONES</h1>
    <div class="row row-cols-md-3 g-3">
      @foreach ($posts as $post)
    <div class="col">
      <div class="card h-100">
        <img src="{{asset('upload').'/'.$post->imagen}}" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">{{$post->titulo}}</h5>
          <p class="card-title">
            <small class="text-info">{{ '@'.$post->user->usename}}</small>
            <small class="text-muted">{{$post->created_at->diffForHummans()}}</small>
          </p>
        </div>
        <div class="card-footer">
          <a href="{{ route('posts.show', ['post' => $post , 'user' => $user]) }}" ><i class="far fa-comment"></i></a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div> {{ $posts->links('pagination::bootstrap-5') }}
   @else
   <h1 class="text-center">NO HAY PUBLICACIONES</h1>
   @endif
  
  </div>
@endsection