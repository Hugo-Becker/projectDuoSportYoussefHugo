@extends('template.main')


@section('content')

    <div class="container mt-3">

        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Club Name</th>
                <th scope="col">Ville</th>
                <th scope="col">Pays</th>
                <th scope="col">Currents Players</th>
                <th scope="col">Max Players</th>
                <th scope="col">Show</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($equipes as $key =>$equipe)

              


                <tr>
                  <th scope="row">{{$equipe->id}}</th>
                  <td>{{$equipe->clubName}}</td>
                  <td>{{$equipe->ville}}</td>
                  <td>{{$equipe->pays}}</td>
                  <td>{{count($joueurs->where('equipe_id',$equipe->id))}}</td>
                  <td>{{$equipe->maxPlayers}}</td>
                  <td> 
                    <a class="btn btn-primary" href="/equipes/{{$equipe->id}}">SHOW</a>
                  </td>
                </tr>
                  
              @endforeach

          
            </tbody>
          </table>

    </div>
    
@endsection