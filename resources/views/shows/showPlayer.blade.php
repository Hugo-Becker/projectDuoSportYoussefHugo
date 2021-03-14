@extends('template.main')

@section('content')


<div class="container">
    <div class="card mt-5" style="width: 18rem;">


        @if ($joueur->photos==null)

          <h2 class="text-center">This player has no picture </h2>

        @else
          <img src="{{asset('storage/img/'. $joueur->photos->src)}}" class="card-img-top" alt="...">

            
        @endif


        
        <div class="card-body">
          <h5 class="card-title">Nom : {{$joueur->nom}}</h5>
          <h5 class="card-title">Prenom : {{$joueur->prenom}}</h5>
          <h5 class="card-title">Genre : {{$joueur->genre}}</h5>
          <h5 class="card-title">Age : {{$joueur->age}}</h5>
          <h5 class="card-title">Nationalité : {{$joueur->nat}}</h5>
          <h5 class="card-title">Poste : {{$joueur->poste}}</h5>
          <h5 class="card-title">Telephone : {{$joueur->tel}}</h5>
          <h5 class="card-title">Email : {{$joueur->email}}</h5>
          <h5 class="card-title">Equipe : {{$joueur->equipes->clubName}}</h5>


          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
</div>

    
@endsection