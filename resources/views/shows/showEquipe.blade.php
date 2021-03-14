@extends('template.main')

@section('content')

<div class="container">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"> Club name : {{$equipe->clubName}}</h5>
          <h5 class="card-title"> Ville : {{$equipe->ville}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">Capacity :{{count($joueurs->where('equipe_id',$equipe->id))}} /{{$equipe->maxPlayers}}</h6>

          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
    </div>

    <div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Poste</th>
                <th scope="col">Show Player</th>
              </tr>
            </thead>
            <tbody>

                

                @foreach ($joueurs->where('equipe_id',$equipe->id) as $player)
                <tr>
                    <th scope="row">{{$player->nom}}</th>
                    <td>{{$player->prenom}}</td>
                    <td>{{$player->poste}}</td>
                    <td>
                        <a class="btn btn-primary" href="/joueurs/{{$player->id}}">SHOW</a>
                    </td>
                  </tr>


                    
                @endforeach

            
            </tbody>
          </table>
    </div>



</div>


    
@endsection